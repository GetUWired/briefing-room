<?php

use BTN\BriefingRoom\Agency;
use BTN\BriefingRoom\Framework\Exceptions\NotFound;
use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\Manager;
use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Sergeant;
use BTN\BriefingRoom\Helpers\Memberium;
use StellarWP\DB\QueryBuilder\JoinQueryBuilder;

function access_tag(){
    $access = false;
	if( function_exists('memb_hasAnyTags') ){
		$tag = 792;
		if(memb_hasAnyTags($tag)){
			$access = true;
		}
	}
    return $access;
}
add_shortcode( 'briefing_room_training_log', function() {

    $user = wp_get_current_user();
    $training = BTN\BriefingRoom\Training::fromCurrentPost();

    // TODO: Migrate to capabilities.
    if(array_intersect($user->roles, [Manager::ROLE, Sergeant::ROLE, 'memberium_sergeant'])) {
        ob_start();
        include 'templates/training-log.html.php';
        return ob_get_clean();
    }

    try {
        if (in_array(Officer::ROLE, $user->roles)) {
            $officer = Officer::findByUserId($user->ID);
            ob_start();
            include 'templates/training-log--officer.html.php';
            return ob_get_clean();
        }
    } catch (NotFound $exception) {
//        return "<div>Student record not found for current user.</div>";
    }

    return '<div>User role does not support training log.</div>';
});

add_shortcode('briefing_room_training_log_other', function() {

    // TODO: Replace this shortcode with an argument to the `briefing_room_training_log` shortcode.
 
    $user = wp_get_current_user();

    try {
        if (in_array(Manager::ROLE, $user->roles)) {
            $manager = Manager::findByUserId($user->ID);
            ob_start();
            include 'templates/training-log--manager.html.php';
            return ob_get_clean();
        }
    } catch (NotFound $exception) {
//        return "<div>Manager record not found for current user.</div>";
    }

    try {
        if (in_array(Sergeant::ROLE, $user->roles) || in_array('memberium_sergeant', $user->roles)) {
            $sergeant = Sergeant::findByUserId($user->ID);
            ob_start();
            include 'templates/training-log.html.php';
            return ob_get_clean();
        }
    } catch (NotFound $exception) {
//        return "<div>Facilitator record not found for current user.</div>";
    }



    try {
        if (in_array(Officer::ROLE, $user->roles) || in_array('memberium_officer', $user->roles)) {
            $officer = Officer::findByUserId($user->ID);
            
            ob_start();
            
            include 'templates/training-log--officer.html.php';
            return ob_get_clean();
        }
    } catch (NotFound $exception) {
 
    }

    return '<div>User role does not support training log.</div>';
});

add_shortcode('briefing_room_admin_station_reporting', function() {
    $access = access_tag();
    $user = wp_get_current_user();
    if(in_array('memberium_stationadmin', $user->roles) || $access) {
        ob_start();
        include 'templates/admin-station-reporting.html.php';
        return ob_get_clean();
    }

    return '<div>Only agency managers can view station reports.</div>';
});

add_shortcode('briefing_room_admin_sergeant_reporting', function() {
	$access = access_tag();
    $user = wp_get_current_user();
    if(in_array('memberium_stationadmin', $user->roles) || $access) {
        ob_start();
        include 'templates/admin-sergeant-reporting.html.php';
        return ob_get_clean();
    }

    return '<div>Only agency managers can view facilitator reports.</div>';
});

add_shortcode('briefing_room_admin_officer_reporting', function() {
	$access = access_tag();
    $user = wp_get_current_user();
    if(in_array('memberium_stationadmin', $user->roles) || in_array(Sergeant::ROLE, $user->roles) || $access) {
        ob_start();
        include 'templates/admin-officer-reporting.html.php';
        return ob_get_clean();
    }

    return '<div>Only agency managers and facilitators can view student reports.</div>';
});

add_shortcode('briefing_room_admin_session_reporting', function() {
    include 'templates/admin-session-reporting.html.php';
 

    /* will determine late who has access
    $user = wp_get_current_user();
    if(in_array('memberium_stationadmin', $user->roles) || in_array(Sergeant::ROLE, $user->roles)) {
        ob_start();
        include 'templates/admin-session-reporting.html.php';
        return ob_get_clean();
    }

    return '<div>Only agency managers and facilitators can view student reports.</div>';
    */
});

add_shortcode('briefing_room_manager_add_sergeant', function() {
    $user = wp_get_current_user();
    if(current_user_can('manage_options') || in_array(\BTN\BriefingRoom\Manager::ROLE, $user->roles)) {

        try {
            $agency = Agency::find(
                Memberium::getContactField('_AgencyID') ?: 4
            );
        } catch (NotFound $e) {
            return '<div>Agency not found.</div>';
        }

        ob_start();
        include 'templates/manager-add-sergeant.html.php';
        return ob_get_clean();
    }
    return '<div>Only agency managers can add facilitators.</div>';
});

add_shortcode('briefing_room_csv_add_stations', function() {
    ob_start();
?>
    <form action="/wp-admin/admin-post.php" method="post" enctype="multipart/form-data">

        <input type="hidden" name="action" value="csv_add_stations">

        <label for="csv_stations">
            Select File To Upload:
            <input type="file" id="csv_stations" name="csv_stations" value="" />
        </label>

        <button type="submit">Upload</button>
    </form>
<?php
    return ob_get_clean();
});

add_shortcode('briefing_room_csv_add_sergeants', function() {
    ob_start();
    ?>
    <form action="/wp-admin/admin-post.php" method="post" enctype="multipart/form-data">

        <input type="hidden" name="action" value="csv_add_sergeants">
        <input type="hidden" name="agencyId" value="<?php echo Memberium::getContactField('_AgencyID'); ?>">

        <label for="csv_sergeants">
            Select File To Upload:
            <input type="file" id="csv_sergeants" name="csv_sergeants" value="" />
        </label>

        <button type="submit">Upload</button>
    </form>
    <?php
    return ob_get_clean();
});

add_shortcode('btn_sso_login_form', [\BTN\BriefingRoom\Helpers\MiniOrangeSAML::class, 'loginForm']);


add_shortcode( 'briefing_room_weekly_report_form', function(){
    ob_start();
    ?>
    <script>
        function weekReport() {
            let url = '/?btn_download_report=session&format=csv';
            const urlParams = new URLSearchParams(window.location.search);

            let startDate = urlParams.get('startDate');
            let endDate = urlParams.get('endDate');

            url += `&session_id=all`;
            if (startDate) url += `&startDate=${startDate}`;
            if (endDate) url += `&endDate=${endDate}`;

            const link = document.createElement('a');
            link.href = url;
            link.download = 'report.csv'; // optional hint
            link.style.display = 'none';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        weekReport();

    </script>
    <style>
        #briefing_room_weekly_report_form {
            text-align: center;
            margin: 3rem 2rem;
            padding: 3rem;
            box-shadow: 0 0 5px #000;
            border-radius: 1rem;
        }
    </style>
    <div id="briefing_room_weekly_report_form">
        <h4>Your download is starting...</h4>
        <p>If your download does not start automatically please click the button below</p>
        <p><button onclick="weekReport()" >Start Download</button></p>
    </div>
    <?php
    return ob_get_clean();

});

add_shortcode( 'weekly_report_redirect', function(){
    ob_start();
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const urlParams = new URLSearchParams(window.location.search);
        const redirectToValue = urlParams.get('redirect_to');

        if (redirectToValue && redirectToValue.includes('/weekly-download/')) {

            const endDate = urlParams.get('endDate');
            if (endDate) {
                const redirectInput = document.querySelector('input[name="redirect_to"]');
                if(redirectInput)
                redirectInput.value = redirectToValue + `&endDate=${endDate}`;
            }
        }
    });
    </script>
    <?php
    return ob_get_clean();
});

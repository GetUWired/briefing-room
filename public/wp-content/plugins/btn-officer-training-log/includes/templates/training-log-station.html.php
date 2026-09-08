<?php

use BTN\BriefingRoom\Station;
use BTN\BriefingRoom\Sergeant;

/** @var Sergeant $sergeant */

global $wp;
$redirect = home_url( $wp->request );

?>

<h2>Record Training</h2>

<div>
    You are logged in as [memb_contact fields=FirstName,LastName separator=" "]. Not You? [memb_logout_link linktext="Log Out" url="{{current.url}}"]
</div>

<form
    style="display: flex; flex-direction: column; gap: 20px;"
    action="<?php echo admin_url ( 'admin-post.php' ); ?>"
    method="post"
>

    <?php if(isset($_REQUEST['success'])): ?>
		<div class="aw-alert bg-success js-flash-message" style="display:block">
			Training Successfully Submitted.
		</div>
    <?php endif; ?>

    <input type="hidden" name="action" value="log_training">
    <input type="hidden" name="redirect" value="<?php echo esc_attr($redirect); ?>">

	<input type="hidden" id="sergAgencyId" value="<?php echo $stations[0]->agencyId; ?>">
	<input type="hidden" id="sergStationId" value="<?php echo $stations[0]->id; ?>">

	<select name="sergeantId" id="sergId" required style="max-width:400px;margin-top:15px">
		<option value="">Choose Facilitator</option>
		<?php
		// Adding Options For Sergeant Select
		foreach ($sergeants as $sergeant) {

			if($sergeant->stationAgency != null){

				echo  '<option value="' . $sergeant->station_id . '" data-agency="' . $sergeant->stationAgency . '" >' . $sergeant->firstName.' '. $sergeant->lastName . '</option>';

			}

		}
		?>
	</select>

    <?php if(isset($training)): ?>
        <input type="hidden" name="trainingId" value="<?php echo $training->id; ?>">
    <?php else: ?>
        <div>
            <label for="title">Training Title</label>
            <input type="text" name="title" id="title">
        </div>
    <?php endif; ?>

    <div>
        <label for="duration">Duration (minutes)</label>
        <input type="text" name="duration" id="duration">
    </div>

    <div style="display: flex; gap: 20px;">

        <fieldset id="training-log-officer-list" style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
            <legend style="margin-bottom: 0;">Students in Attendance</legend>
            <ul style="list-style-type: none; margin: 0;">
            </ul>
        </fieldset>

        <fieldset id="training-log-officer-search" style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
            <legend style="margin-bottom: 0;">Search Students</legend>
            <input type="search" placeholder="Search officers" />
            <ul style="list-style-type: none; margin: 0;">
            </ul>
        </fieldset>
    </div>
    <button type="button" style="color: #0274be; align-self: baseline; background-color: transparent; margin: 0; padding: 0;" onclick="window['add-officer-dialog'].showModal();">Add Officer</button>

    <button type="submit">Log Training</button>

</form>

<dialog id="add-officer-dialog">
    <h2>Add New Officer</h2>

	<div class="aw-alert"></div>

    <form
        style="display: flex; flex-direction: column; gap: 20px;"
        id="add-new-officer"
        action="#"
    >

        <div>
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName">
        </div>

        <div>
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName">
        </div>

        <div>
            <label for="emailAddress">Email Address</label>
            <input type="text" name="emailAddress" id="emailAddress">
        </div>

        <div>
            <label for="badgeId">Badge ID</label>
            <input type="text" name="badgeId" id="badgeId">
        </div>

        <div>
            <label for="stateId">State ID</label>
            <input type="text" name="stateId" id="stateId" />
        </div>

        <div>
            <label for="agencyId">Agency ID</label>
            <input type="text" name="agencyId" id="agency" value="<?php echo $agency_id; ?>" readonly />
        </div>

        <div>
            <label for="stationId">Choose Station</label>
			<select name="stationId" id="stationId" required >
				<option value="">Choose Station</option>
				<?php
				// Adding Options For Sergeant Select
				foreach ($stations as $station) {

						echo  '<option value="' . $station->id . '" >' . $station->name .'</option>';

				}
				?>
			</select>
		</div>

        <div>
            <label for="rank">Rank</label>
            <select name="rank" id="rank">
                <option value="officer">Officer</option>
                <option value="sergeant">Facilitator</option>
                <option value="lieutenant">Lieutenant</option>
                <option value="captain">Captain</option>
                <option value="chief">Chief</option>
            </select>
        </div>

        <button type="submit">Add Officer</button>
    </form>

    <button style="position: absolute; top: 15px; right: 15px; padding: 0; background-color: transparent; color: initial; text-transform: lowercase;" onclick="window['add-officer-dialog'].close();">
        &#10006;
    </button>
</dialog>

<script>

	jQuery(document).ready(function($){
		$(document).on('change','#sergId',function(){

			var stationId = $(this).val();
			var agencyId = $(this).find(':selected').data('agency');

			if(stationId != null && agencyId != null){

				$('#sergAgencyId').val(agencyId);
				$('#sergStationId').val(stationId);

			}

		});
	});

    document.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
            document.querySelectorAll('.js-flash-message')
                    .forEach(node => node.remove());
        }, 10000);
    });

    (($) => {
        const officerList = $('#training-log-officer-list')
        officerList.find('input[type="search"]').on('input', (e) => {
            const query = e.target.value.toLowerCase();
            officerList.find('li').each((i, el) => {
                const officer = $(el).text().toLowerCase();
                officer.includes(query) ? $(el).show() : $(el).hide();
            });
        });
        officerList.find('input[type="checkbox"]').on('change', (e) => {
            if(officerList.find('input[type="search"]').val()) {
                officerList.find('input[type="search"]').val('').trigger('input').focus();
            }
        });
    })(jQuery);

    (($) => {
        const officerSearch = $('#training-log-officer-search');

        officerSearch.find('input[type="search"]').on('input', (e) => {
            const search = e.target.value.toLowerCase();
			var agencyId = jQuery('#sergAgencyId').val();
            console.log(search)
			if(agencyId != ''){
            $.ajax( {
                url: '<?php echo esc_url_raw( rest_url('btn/briefing-room/officers') ); ?>',
                method: 'GET',
                beforeSend: function ( xhr ) {
                    xhr.setRequestHeader( 'X-WP-Nonce', '<?php echo wp_create_nonce( 'wp_rest' ); ?>' );
                },
                data:{
                    'search': search,
                    'agency': agencyId,
                }
            } ).done( function ( response ) {
                officerSearch.find('ul').empty();
                response.forEach(officer => {
					if(officer.stationAgency != null){
						officerSearch.find('ul').append(`
							<li>
								<label
									style="cursor: pointer;"
									data-officer
									data-officer-id="${officer.id}"
									data-officer-first-name="${officer.firstName}"
									data-officer-last-name="${officer.lastName}"
								>
									${officer.lastName}, ${officer.firstName}
								</label>
							</li>
						`);
					}
                });
            } );
			} // end if
			else{
				alert('Sergeant is not selected.');
			}
        })

        const officerList = $('#training-log-officer-list')
        officerSearch.on('click','[data-officer]', (e) => {
            const id = e.target.getAttribute('data-officer-id')
            const firstName = e.target.getAttribute('data-officer-first-name')
            const lastName = e.target.getAttribute('data-officer-last-name')
            officerList.find('ul').append(`
                <li>
                    <label>
                        <input type="checkbox" name="officers[]" value="${id}" checked="checked">
                        ${lastName}, ${firstName}
                    </label>
                </li>
            `);
            officerSearch.find('ul').empty();
            officerSearch.find('input[type="search"]').val('');
        })
    })(jQuery);

    jQuery(function(){
        jQuery('#add-new-officer').submit((e) => {
            e.preventDefault();
			jQuery('.aw-alert').hide();
            jQuery.ajax({
                type: 'POST',
                url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
                data: {
                    _ajax_nonce: '<?php echo wp_create_nonce( '_ajax_nonce' ); ?>',
                    action: 'add_officer',
                    firstName: jQuery('#add-new-officer #firstName').val(),
                    lastName: jQuery('#add-new-officer #lastName').val(),
                    emailAddress: jQuery('#add-new-officer #emailAddress').val(),
                    badgeId: jQuery('#add-new-officer #badgeId').val(),
                    stateId: jQuery('#add-new-officer #stateId').val(),
                    agencyId: jQuery('#add-new-officer #agency').val(),
                    stationId: jQuery('#add-new-officer #stationId').val(),
                    rank: jQuery('#add-new-officer #rank').val(),
                },
                success: (res) => {
					console.log(res);
					if (res.success) {
						jQuery('#add-new-officer').trigger('reset');

						jQuery('.aw-alert').addClass('bg-success');
						jQuery('.aw-alert').html(res.data.message);
						jQuery('.aw-alert').show();

						jQuery('#training-log-officer-list ul').append(`
							<li>
								<label>
									<input type="checkbox" name="officers[]" value="${res.data.id}" checked="checked">
									${res.data.lastName}, ${res.data.firstName} <small>(${res.data.badgeId})</small>
								</label>
							</li>
						`);

						window['add-officer-dialog'].close();
                    }else{
						jQuery('.aw-alert').removeClass('bg-success');
						jQuery('.aw-alert').html(res.data[0].message);
						jQuery('.aw-alert').show();
					}
                }
            });
        });
    });
</script>


<style>
.aw-alert {
    padding: 10px;
    background: #db8c8c;
    margin: 10px 0;
    border-radius: 5px;
    color: #fff;
	display:none;
}
	.bg-success{
		background:#52c852 !important;
	}
</style>

<?php

use BTN\BriefingRoom\Manager;

/** @var Manager $manager */

$stations = $manager->agency()->stations()->getAll();

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

    <input type="hidden" name="action" value="log_training_manager">
    <input type="hidden" name="redirect" value="<?php echo esc_attr($redirect); ?>">

    <?php if(isset($training)): ?>
        <input type="hidden" name="trainingId" value="<?php echo $training->id; ?>">
    <?php else: ?>
        <div>
            <label for="title">Training Title</label>
            <input type="text" name="title" id="title" required>
        </div>
   
        <div>
            <label for="description">Description (optional)</label>
            <textarea  name="description" id="description" rows="3" maxlength="250" style="resize: none;"></textarea>
        </div>
        
    <?php endif; ?>

    <div>
        <label for="duration">Duration (minutes)</label>
        <input type="text" name="duration" id="duration" required>
    </div>

    <?php /* 3rd party training, add description and url */ ?>
    <?php if(!isset($training)): ?>
        <div>
            <label for="video_url">Video URL (optional)</label>
            <input type="url" name="video_url" id="video_url">
        </div>
    <?php endif; ?>


    <div style="display: flex; gap: 20px;">

        <fieldset id="training-log-officer-list" style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
            <legend style="margin-bottom: 0;">Students in Attendance</legend>
            <ul style="list-style-type: none; margin: 0;">
            </ul>
        </fieldset>

        <fieldset id="training-log-officer-search" style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
            <legend style="margin-bottom: 0;">Search Students</legend>
            <input type="search" placeholder="Begin typing last name to see a list of students" />
            <ul style="list-style-type: none; margin: 0;">
                <li><small>(Search results will show here)</small></li>
            </ul>
        </fieldset>
    </div>
    <!--<button type="button" style="color: #0274be; align-self: baseline; background-color: transparent; margin: 0; padding: 0;" onclick="window['add-officer-dialog'].showModal();">Add Student</button>-->

    <button type="submit">Log Training</button>

</form>

<dialog id="add-officer-dialog">
    <h2>Add New Student</h2>

    <div class="aw-alert">

    </div>

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
            <input type="text" name="agencyId" id="agency" value="<?php echo $manager->organizationId; ?>" readonly />
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
                <option value="sergeant">Sergeant</option>
                <option value="lieutenant">Lieutenant</option>
                <option value="captain">Captain</option>
                <option value="chief">Chief</option>
            </select>
        </div>

        <button type="submit">Add Student</button>
    </form>

    <button style="position: absolute; top: 15px; right: 15px; padding: 0; background-color: transparent; color: initial; text-transform: lowercase;" onclick="window['add-officer-dialog'].close();">
        &#10006;
    </button>
</dialog>

<script>
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
        let debounce;
        const officerSearch = $('#training-log-officer-search');
        console.log(officerSearch)
        officerSearch.find('input[type="search"]').on('input', (e) => {
            if(debounce) clearTimeout(debounce);
            const search = e.target.value.toLowerCase();
            console.log(!!search, search, search.length)

            officerSearch.find('ul').empty();

            if(!search) {
                officerSearch.find('ul').append(`<li><small>(Search results will show here)</small></li>`);
                return;
            } else {
                officerSearch.find('ul').append(`<li><small>Searching...</small></li>`)
            }

            debounce = setTimeout(function(){

            $.ajax( {
                url: '<?php echo esc_url_raw( rest_url('btn/briefing-room/students') ); ?>',
                method: 'GET',
                beforeSend: function ( xhr ) {
                    xhr.setRequestHeader( 'X-WP-Nonce', '<?php echo wp_create_nonce( 'wp_rest' ); ?>' );
                },
                data:{
                    'search': search,
                    'agency': '<?php echo $manager->organizationId; ?>',
                }
            } ).done( function ( response ) {

                officerSearch.find('ul').empty();

                if(0 === response.length) {
                    officerSearch.find('ul').append(`<li><small>(No results found for "${search}")</small></li>`);
                    return;
                }


                response.forEach(student => {
                    officerSearch.find('ul').append(`
                        <li>
                            <label
                                style="cursor: pointer;"
                                data-student
                                data-student-id="${student.id}"
                                data-student-user-id="${student.userId}"
                                data-student-first-name="${student.firstName}"
                                data-student-last-name="${student.lastName}"
                                data-student-reference-id="${student.referenceId ?? ''}"
                            >
                                ${student.lastName}, ${student.firstName} <small>${student.referenceId ?? ''}</small>
                            </label>
                        </li>
                    `);
                });
            } );
            }, 250);
        })

        const officerList = $('#training-log-officer-list')
        officerSearch.on('click','[data-student]', (e) => {
            let dataElm = e.currentTarget

            const id = dataElm.getAttribute('data-student-id')
            const userId = dataElm.getAttribute('data-student-user-id')
            const firstName = dataElm.getAttribute('data-student-first-name')
            const lastName = dataElm.getAttribute('data-student-last-name')
            const referenceId = dataElm.getAttribute('data-student-reference-id')
            officerList.find('ul').append(`
                <li>
                    <label>
                        <input type="checkbox" name="students[]" value="${userId}" checked="checked">
                        ${lastName}, ${firstName} <small>${referenceId}</small>
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

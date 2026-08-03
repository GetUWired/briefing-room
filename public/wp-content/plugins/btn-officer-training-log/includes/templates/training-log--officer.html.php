<?php

use BTN\BriefingRoom\Officer;
use BTN\BriefingRoom\Training;

/** @var Officer $officer */
/** @var Training $training */

global $wp;
$redirect = home_url( $wp->request );
?>

<?php if(!isset($training)): ?>
<h2>Record Training</h2>
<?php endif; ?>

<div>
    You are logged in as [memb_contact fields=FirstName,LastName separator=" "]. Not You? [memb_logout_link linktext="Log Out" url="{{current.url}}"]
</div>

<form
    style="display: flex; flex-direction: column; gap: 20px;"
    action="<?php echo admin_url ( 'admin-post.php' ); ?>"
    method="post"
>

    <?php if(isset($_REQUEST['success'])): ?>
        <p class="js-flash-message">Training log successfully submitted.</p>
    <?php endif; ?>

    <input type="hidden" name="action" value="log_training_officer">
    <input type="hidden" name="redirect" value="<?php echo esc_attr($redirect); ?>">

    <?php if(isset($training)): ?>
        <input type="hidden" name="trainingId" value="<?php echo $training->id; ?>">

        <div style="text-align: center;">
        <strong>When the video has completed, click the "Log Training" button below.</strong>
        </div>

        <button
            id="logTrainingSubmit"
            type="submit"
            disabled="disabled"
            title="Please watch the video before logging this training"
        >
            Log Training
        </button>
    <?php else: ?>
        <?php /* 3rd party training */ ?>
        <div>
            <label for="title">Training Title</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="description">Description (optional)</label>
            <textarea  name="description" id="description" rows="3" maxlength="250" style="resize: none;"></textarea>
        </div>

        <div>
            <label for="duration">Duration (minutes)</label>
            <input type="text" name="duration" id="duration" required>
        </div>

        <div>
            <label for="video_url">Video URL (optional)</label>
            <input type="url" name="video_url" id="video_url">
        </div>
        <button type="submit">Log Training</button>
    <?php endif; ?>
 


    

</form>

<?php if(isset($training)): ?>
<script>
    document.addEventListener("DOMContentLoaded", (event) => {
        setTimeout(() => {
            const button = document.getElementById('logTrainingSubmit');
            button.removeAttribute("disabled");
        }, <?php echo ($training->getDurationInMinutes() ?: 10) *.5; ?> * 60 * 1000)
    });
</script>
<?php endif; ?>
<style>
    #logTrainingSubmit {
        cursor: pointer;
        background-color: #e86752;
    }
    #logTrainingSubmit:disabled,
    #logTrainingSubmit:disabled:hover {
        cursor: default;
        background-color: #ccc;
    }
</style>

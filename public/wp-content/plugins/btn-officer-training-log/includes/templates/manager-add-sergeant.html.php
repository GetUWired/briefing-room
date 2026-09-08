<?php

use BTN\BriefingRoom\Agency;

/**
 * @var Agency $agency
 */

global $wp;

$stations = $agency->stations()->getAll();

?>

<form
    style="display: flex; flex-direction: column; gap: 20px;"
    action="<?php echo admin_url('admin-post.php'); ?>"
    method="POST"
>

    <input type="hidden" name="action" value="add_sergeant">
    <input type="hidden" name="agencyId" value="<?php echo $agency->id; ?>">
    <input type="hidden" name="redirect" value="<?php echo home_url( $wp->request ) ?>">

    <div>
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" id="firstName" required>
    </div>

    <div>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" id="lastName" required>
    </div>

    <div>
        <label for="emailAddress">Email Address</label>
        <input type="email" name="emailAddress" id="emailAddress" required>
    </div>

    <div>
        <label for="stationId">Station</label>
        <select name="stationId" id="stationId" required>
            <option value="" selected disabled>Select a station</option>
            <?php foreach($stations as $station): ?>
                <option value="<?= $station->id ?>"><?= $station->name ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit">Add Facilitator</button>
</form>


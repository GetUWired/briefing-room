<?php
$sergeants = \BTN\BriefingRoom\Sergeant::query([
    'number' => 5,
]);
?>

<div class="wrap">
    <h1>Training Log Dashboard</h1>

    <div style="margin-top: 20px; display: flex; flex-direction: row; gap: 20px; justify-content: stretch;">

        <x-widget title="Active Sergeants">
            <ol>
                <?php foreach($sergeants->models as $sergeant) : ?>
                    <li><?php echo $sergeant->name(); ?></li>
                <?php endforeach; ?>
            </ol>
        </x-widget>

        <x-widget title="Total Training Time">
            <?php
                echo \BTN\BriefingRoom\Helpers\TimeFormatter::minutesToHours(
                    \BTN\BriefingRoom\TrainingSession::all()->sum('duration')
                );
            ?>
        </x-widget>

        <x-widget title="Trainings This Month">
            <ul>
                <?php foreach(\BTN\BriefingRoom\TrainingSession::thisMonth()->models as $session): ?>
                <li><?php echo $session->training()->getTitle() ?? '[Training Deleted]'; ?> - <?php echo $session->sergeant()->name(); ?></li>
                <?php endforeach; ?>
            </ul>
        </x-widget>

    </div>

</div>

<script>
    class Widget extends HTMLElement {

        constructor() {
            super()

            this.content = this.innerHTML;
            this.innerHTML = '';
            this.template = document.getElementById('widget');
        }

        connectedCallback() {
            this.appendChild(
                document.importNode(this.template.content, true)
            );

            console.log(
                this.getAttribute('title'),
                this.querySelector('.postbox-header h2'),
            )

            this.querySelector('.postbox-header h2').innerHTML = this.getAttribute('title');
            this.querySelector('.inside').innerHTML = this.content
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        customElements.define('x-widget', Widget)
    });
</script>

<template id="widget">
    <div class="postbox" style="height: 100%;">
        <div class="postbox-header" style="padding-left: 20px;">
            <h2>Widget</h2>
        </div>
        <div class="inside">

            <p>Example widget</p>

        </div>
    </div>
</template>

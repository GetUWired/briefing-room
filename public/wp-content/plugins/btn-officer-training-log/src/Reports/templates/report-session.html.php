<?php
/**
 * @var string $title
 * @var string $logo
 * @var string $logoAlt
 * @var array $meta
 * @var array $headers
 * @var array $data
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th {
            font-weight: normal;
			padding:6px;
        }
        td {
            
			padding:6px;
        }
        @media print {
            /* All your print styles go here */
            body {
                font-size: 12pt;
                line-height: 1.2;
            }
        }
        @media not print {
            html, body {
                max-width: 816px;
                margin: auto;
            }
            body {
                margin: 20px 0 40px;
            }
        }
    </style>
</head>
<body>
    <img style="display: block; margin: auto;width: 250px;" src="<?= $logo; ?>" alt="<?= $logoAlt; ?>">

    <ul style="list-style: none; padding: 0; font-weight: bold;">
        <?php foreach($meta as $text): ?>
            <li><?= $text; ?></li>
        <?php endforeach; ?>
    </ul>

    <?php foreach( $data as $session ) { ?>
        <ul style="list-style: none; padding: 0; font-weight: bold;">
            <?php foreach($session['meta'] as $key=>$text): ?>
                <li><?php echo $key.': ' . $text ?></li>
            <?php endforeach; ?>
        </ul>
 
        <table style="table-layout: fixed;width: 100%">
            <tr>
                <td style="width: 50%; text-align: left; vertical-align: top">
                <b>Session Title:</b> <?php echo $session['title'] ?><br>
                <b>Date:</b> <?php echo $session['date'] ?><br>
                <b>Source:</b> <?php echo $session['type'] == 'briefing' ? "The Briefing Room" : "3rd Party training"?>
                </td>
                <td style="width: 50%; text-align: right; vertical-align: top">
                    <b>Duration:</b> <?php echo $session['duration'] ?><br>
                    <b>Num of Students:</b> <?php echo $session['num_students'] ?><br>
                    <b>Session ID:</b> <?php echo $session['id'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border:none">
                    <b>Description</b><br>
                    <?php echo $session['description'] ?><br><br>
                    <b>URL:</b> <a href="<?php echo esc_url( $session['url'] ) ?>"><?php echo $session['url'] ?></a>                    
                </td>
            </tr>
            <tr>
                <td colspan="2"  style="border:none">

         
        
        <br><b>Students</b>
        <?php
        $students = $session['students'];

        echo '<table style="width: 100%;border: none;"><tr>';

        $columns = 3;
        $items_per_column = ceil(count($students) / $columns);

        for ($i = 0; $i < $columns; $i++) {
            echo '<td style="width: 33.3%;border:none">';
            for ($j = $i * $items_per_column; $j < ($i + 1) * $items_per_column && $j < count($students); $j++) {
                echo $students[$j]['full_name'] . '<br>';
            }
            echo '</td>';
        }

        echo '</tr></table>';
        ?>
        </td></tr>
    </table>

    <?php } ?>

    

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            window.print();
        }, false);
    </script>
</body>
</html>

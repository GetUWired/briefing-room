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
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
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

    <table style="width: 100%;">
        <thead style="text-align: left; font-weight: normal;">
            <tr>
                <?php foreach($headers as $header): ?>
                    <th><?= $header; ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $row): ?>
                <tr>
                    <?php foreach($row as $value): ?>
                        <td><?= $value; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            window.print();
        }, false);
    </script>
</body>
</html>

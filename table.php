<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>

    <?php foreach($_GET as $key => $value): ?>
        <tr>
            <td class='key'><?= $key ?></td>
            <td class='value'><?= $value ?></td>
        </tr>
    <?php endforeach; ?>
    
    </table>
</body>
</html>
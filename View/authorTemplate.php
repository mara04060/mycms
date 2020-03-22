<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Authors</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>

<table class="layout">
    <tr>
        <td colspan="2" class="header">
            Authors:
        </td>
    </tr>
    <tr>
        <td>
            <?php foreach ($data as $item): ?>
                <br />
                <?php print($item->getName()); ?>

            <?php endforeach; ?>

        </td>

        <td width="300px" class="sidebar">
            <div class="sidebarHeader">Меню</div>
            <ul>
                <li><a href="/">Главная страница</a></li>
                <li><a href="/author/">Author</a></li>
                <li><a href="/news/">News</a></li>
            </ul>
        </td>
    </tr>

</table>
<?php echo $pagination; ?>
</body>
</html>
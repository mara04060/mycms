<?php

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>News</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>

<table class="layout">
    <tr>
        <td colspan="2" class="header">
            Hot News
        </td>
    </tr>
    <tr>
        <td>
            <?php foreach ($data as $item): ?>
           <br />
                <?php print($item->getName()); ?> <a href="#" class="button" data-id="<?=$item->getId() ?>"> Del </a>
            <p>
                <?php print ($item->getText()); ?>
                <br /><?php print($item->getAuthor()); ?>
                <br /><a href="/news/<?=$item->getId() ?>/" >Next</a>
            </p>

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
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>


    $(".button").click(function(){
        var id = $(this).attr('data-id');
        $.post("/news/delete/"+id+"/",
            { id },
            function(data, status){
                alert("Удалена запись: " + data + "\nStatus: " + status);
            });

    });


</script>
</body>
</html>

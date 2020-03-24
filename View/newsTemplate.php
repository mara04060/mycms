<?php
$menu = "<a href=\"/\" class=\"blog-nav-item\">Главная страница</a>
            <a href=\"/news/\" class=\"blog-nav-item active\">News</a>
            <a href=\"/author/\" class=\"blog-nav-item\">Author</a>";

$small_menu = "<li><a href=\"/\">Главная страница</a></li>
                    <li><a class=\"active\" href=\"/author/\">Author</a></li>
                    <li><a href=\"/news/\">News</a></li>";

$title = "Новости из Блога";
$blog_title = "Новости из Блога";
$blog_description = "Новости из Блога";
$javascript = '<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>


    $(".button").click(function(){
        var id = $(this).attr(\'data-id\');
        $.post("/news/delete/"+id+"/",
            { id },
            function(data, status){
                alert("Удалена запись \nStatus: " + status);
            });

    });


</script>';

include_once ('indexTemplate.php');
?>


        <div class="col-sm-8 blog-main">
            <?php foreach ($data as $item): ?>
            <div class="blog-post">

                <h2 class="blog-post-title"><?php print($item->getName()); ?></h2>
                <p class="blog-post-meta"><?php print($data[0]->getDate()); ?> by <a href="#" class="button" data-id="<?=$item->getId() ?>"> Del </a></p>


                <p></p><?php print ($item->getText()); ?></p>
                <br /><?php print($item->getAuthor()); ?>
                <br /><a href="/news/<?=$item->getId() ?>/" >Подробнее ...</a>

            </div><!-- /.blog-post -->
        <?php endforeach; ?>


            <nav>
                <ul class="pager">
                    <?php echo $pagination; ?>
                </ul>
            </nav>

        </div><!-- /.blog-main -->
<?php
include_once ('footerTemplate.php');
?>
<?php
$menu = "<a href=\"/\" class=\"blog-nav-item\">Главная страница</a>
            <a href=\"/news/\" class=\"blog-nav-item\">News</a>
            <a href=\"/author/\" class=\"blog-nav-item active\">Author</a>";

$small_menu = "<li><a href=\"/\">Главная страница</a></li>
                    <li><a href=\"/author/\">Author</a></li>
                    <li><a href=\"/news/\">News</a></li>";

$title = "Блог перечень Авторов.";
$blog_title = "Блог перечень Авторов.";
$blog_description = "Перечень авторов в блоге";
$javascript = '';

include_once ('indexTemplate.php');
?>
    <div class="row">

        <div class="col-sm-8 blog-main">
            <?php foreach ($data as $item): ?>
                <div class="blog-post">

                    <h2 class="blog-post-title"><?php print($item->getName()); ?></h2>

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
<?php
$menu = "<a href=\"/\" class=\"blog-nav-item\">Главная страница</a>
            <a href=\"/news/\" class=\"blog-nav-item active\">News</a>
            <a href=\"/author/\" class=\"blog-nav-item\">Author</a>";

$small_menu = "<li><a href=\"/\">Главная страница</a></li>
                    <li><a class=\"active\" href=\"/author/\">Author</a></li>
                    <li><a href=\"/news/\">News</a></li>";

$title = "Выбранная Вами новость из Блога";
$blog_title = "Выбранная Вами новость из Блога";
$blog_description = "Выбранная Вами новость из Блога";
$javascript = '';

include_once ('indexTemplate.php');
?>
        <div class="col-sm-8 blog-main">

                <div class="blog-post">
                    <h2 class="blog-title"><?php print($data[0]->getName()); ?></h2>
                    <p class="lead blog-description"><?php print($data[0]->getAuthor()); ?></p>
                    <p class="blog-post-meta"><?php print($data[0]->getDate()); ?></p>
                    <p><?php print ($data[0]->getText()); ?></p>
                </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->
<?php
include_once ('footerTemplate.php');
?>

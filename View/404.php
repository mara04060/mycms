<?php
$menu = "<a href=\"/\" class=\"blog-nav-item active\">Главная страница</a>
            <a href=\"/news/\" class=\"blog-nav-item\">News</a>
            <a href=\"/author/\" class=\"blog-nav-item\">Author</a>";

$small_menu = "<li><a href=\"/\">Главная страница</a></li>
                    <li><a class=\"active\" href=\"/author/\">Author</a></li>
                    <li><a href=\"/news/\">News</a></li>";

$title = "Error 404";
$blog_title = "Error 404";
$blog_description = "Error 404";
$javascript = '';

include_once ('indexTemplate.php');
?>


<div class="col-sm-8 blog-main">
    <h1>404</h1>
</div><!-- /.blog-main -->
<?php
include_once ('footerTemplate.php');
?>

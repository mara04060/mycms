<?php

namespace Controllers;

use View\Template;
use Models\News;

class newsController
{
    use PaginationTrait;
    /** @var Template */
    private $view;

    /**
     * newsController constructor.
     */
    public function __construct()
    {
        $this->view = new Template(__DIR__.'/../View/');
    }

    /**
     * @param int $page
     */
    public function news(int $page=1)
    {
        return $this->pagesInSite(News::class, 'newsTemplate.php', 'news', $page);
    }



    /**
     * @param int $id
     */
    public function onePage(int $id)
    {
        $start = 0;
        $news = News::getById($id);
        if(!empty($news))
        {
            $path = 'onenewsTemplate.php';
            $this->view->renderHtml($path, ['data' => $news, 'pagination'=>'']);
        } else {
            header("HTTP/1.0 404 Not Found");
            $this->view->renderHtml('404.php', ['data' => '404', 'pagination'=>[]]);
        }

    }

    /**
     * @param int $id
     */
    public function delete(int $id)
    {
        $news = News::delete($id);
        if($news)
        {
            echo $id;
        } else {
            echo 0;
        }
    }

}
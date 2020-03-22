<?php

namespace Controllers;

use Services\Settings;

trait PaginationTrait
{
    /**
     * @param int $start  //Номер текущей страницы
     * @param int $count_all //Количество всего страниц
     * @param int $count_in_page  //Количество элементов на странице
     * @param string $url //часть URl где производиться пагинация
     * @return string  //Сформированный HTML код пагинации
     */
    public function listHTML(int $start, int $count_all, int $count_in_page, string $url = 'news' )
    {
        if($count_in_page > 0)
        {
            $count_page = ceil($count_all/$count_in_page);
        } else {
            $count_page = 1;
        }
        if($start > $count_page)
        {
            $start = $count_page;
        }

        $html_page_middle = '';
        for($i=1; $i<=$count_page; $i++)
        {
            $active = '';
            if($i==$start)
            {
                $active = ' active';
            }
            $html_page_middle .= '<li> <a href="/'.$url.'/page_'.$i.'/" class="page-link'.$active.'"> '. $i .'</a> </li>'.PHP_EOL;
        }
        return $html_page_middle;
    }


    /**
     * @param string $name_model
     * @param string $name_template
     * @param string $url
     * @param int $page
     */
    public function pagesInSite(string $name_model, string $name_template, string $url, int $page=1)
    {

        $count_news =  $name_model::countAll();
        $start = 0;
        if(!empty (--$page))
        {
            $start = (int)$page;
        }
        $count_in_page = Settings::getInstance()->setting['count_in_page'];
        $data_page = $name_model::findAll($page, $count_in_page);

        if(!empty($data_page)) {
            $pagination_html = $this->listHTML($start, $count_news, $count_in_page, $url);
            $this->view->renderHtml($name_template, ['data' => $data_page, 'pagination'=>$pagination_html]);
        } else {
//            echo '404 Страница не найдена!';
            header("HTTP/1.0 404 Not Found");
            $this->view->renderHtml('404.php', ['data' => '404', 'pagination'=>[]]);
        }
    }
}


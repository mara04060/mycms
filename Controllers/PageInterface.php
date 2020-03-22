<?php
namespace  Controllers;

interface PageInterface
{

    /**
     * @param int $start
     * @param int $count_all
     * @param int $count_in_page
     * @param string $url
     * @return string
     */
    public function listHTML(int $start, int $count_all, int $count_in_page, string $url):string;

    /**
     * @param string $name_model
     * @param string $name_template
     * @param string $url
     * @param int $page
     * @return void
     */
    public function pagesInSite(string $name_model, string $name_template, string $url, int $page);

}
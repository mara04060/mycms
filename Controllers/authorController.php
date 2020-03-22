<?php

namespace Controllers;

use Models\Author;
use Services\Settings;
use View\Template;

class authorController
{
    use PaginationTrait;

    /**
     * @var Template
     */
    protected $view;

    public function __construct()
    {
        $this->view = new Template(__DIR__.'/../View/');
    }

    /**
     * @param int $page
     */
    public function index(int $page=1)
    {
        return $this->pagesInSite(Author::class, 'authorTemplate.php', 'author', $page);
    }

}
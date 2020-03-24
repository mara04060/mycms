<?php

namespace Models;

use Services\Db;

class News
{
//    use PaginationTrait;

    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $text;

    /** @var int */
    private $author_id;

    /** @var string */
    private $datetime;

    private $db;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->datetime;
    }


    /**
     * @param string $name
     * @param string $value
     */
    public function __set(string $name, string $value)
    {
        $this->$name = $value;
    }

    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * @param int $start
     * @param int $count_in_page
     * @return array|null
     */
    public static function findAll(int $start,int $limit_page)
    {
        $db = Db::getInstance();
        if(empty($start))
        {
            $start = 0;
        }
        $offset = $start * $limit_page;

        $result = $db->query('SELECT  x.id, x.name, x.text, x.datetime, y.name as author
        FROM news as x INNER JOIN authors as y ON (y.id = x.author_id) LIMIT '.(int)$offset.', '.(int)$limit_page.' ;',
            [], static::class);

        return $result;
    }

    /**
     * @param int $id
     * @return array|null
     */
    public static function getById(int $id)
    {
        $db = Db::getInstance();

        $result = $db->query('SELECT  x.id, x.name, x.text, x.datetime, y.name as author
        FROM news as x INNER JOIN authors as y ON (y.id = x.author_id) WHERE x.id = :id;',
            [':id'=>$id], static::class);

        return $result;
    }

    /**
     * @return int
     */
    public static function countAll()
    {
        $db = Db::getInstance();
        $result = $db->query('SELECT count(*) as row_count FROM news;', [], static::class);
        if(!empty($result))
        {
            return $result[0]->row_count;
        } else {
            return 0;
        }
    }

    /**
     * @param int $id
     * @return array|null
     */
    public static function delete(int $id)
    {
        $db = Db::getInstance();
        $result = $db->query('DELETE FROM news WHERE id = :id;', [':id'=>$id], static::class);
        return $result;
    }

}
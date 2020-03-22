<?php

namespace Models;

use Services\Db;

class Author
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

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
     * @return integer
     */
    public static function countAll()
    {
        $db = Db::getInstance();
        $result = $db->query('SELECT count(*) as row_count FROM authors;', [], static::class);

        if(!empty($result))
        {
            return $result[0]->row_count;
        } else {
            return 0;
        }

    }

    /**
     * @param int $start
     * @param int $limit_page
     * @return array|null
     */
    public static function findAll(int $start,int $limit_page)
    {
        $db = Db::getInstance();
        if(empty ($start))
        {
            $start = 0;
        }
        $offset = $start * $limit_page;

        $result = $db->query('SELECT id, name FROM authors LIMIT '.(int)$offset.', '.(int)$limit_page.' ;',
            [], static::class);
        return $result;
    }

    /**
     * @param int $id
     * @return array
     */
    public static function getAuthorById(int $id): array
    {
        $db = Db::getInstance();
        if(!empty($id))
        {
            return $db->query('SELECT * FROM author where id = :id;',['id'=>$id]);
        }

        return [];
    }
}
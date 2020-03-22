<?php
namespace Services;

use PDO;

class Db
{
    /**
     * @var PDO
     */
    private $pdo;
    /**
     * @var
     */
    private static $instance;

    /**
     * Db constructor.
     */
    public function __construct()
    {
        $file_require = '' . __DIR__ . '/database.php';
        if (file_exists($file_require)) {
            $dbOptions = (require_once $file_require)['db'];
            try {
                $this->pdo = new PDO(
                    'mysql:host=' . $dbOptions['host'] . ';dbname=' . $dbOptions['dbname'],
                    $dbOptions['user'],
                    $dbOptions['password']
                );
            } catch (PDOException $e) {
                echo 'Подключение не удалось: ' . $e->getMessage();
            }
            $this->pdo->exec('SET NAMES UTF8');
        }
    }

    /**
     * @return static
     */
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @param $sql
     * @param array $params
     * @param string $className
     * @return array|null
     */
    public function query($sql, $params = [], $className = 'stdClass')
    {

        $sth = $this->pdo->prepare($sql);

        if($params[':limit']>0)
        {
            $sth->bindValue(':start', (int)$params[':start'], PDO::PARAM_INT);
            $sth->bindValue(':limit', (int)$params[':limit'], PDO::PARAM_INT);
            $sth->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
        }

        $result = $sth->execute($params);

        if (false === $result) {
            return null;
        }

        return $sth->fetchAll(PDO::FETCH_CLASS, $className);
    }

}
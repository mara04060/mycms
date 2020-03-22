<?php

namespace Services;

class Settings
{
    /**
     * @var
     */
    private static $instance;

    public $setting;

    /**
     * Db constructor.
     */
    public function __construct()
    {
        $file_require = '' . __DIR__ . '/../settings.php';
        if (file_exists($file_require))
        {
            $this->setting = (require_once $file_require);
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
}
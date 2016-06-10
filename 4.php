<?php
#4
//Написать абстрактный класс кеширования и одну реализацию на базе файлов или sqllite. Интерфейс класса:
interface I
{
    public function put($key, $value, $expire = null);

    public function get($key);
}

//SQL
//Базируется на PostgreSQL, успешное выполнение будет плюсом.
abstract class DataBaseCache implements I
{
    protected $user;
    protected $password;
    protected $database;
    protected $pdo;

    public function __construct()
    {
        $this->database = new PDO($this->user, $this->password, $this->pdo);
    }

    public function put($key, $value, $expire = null)
    {
        if ($key && $value) {
            if ($this->get($key)) {
                $query = $this->database->exec("UPDATE cache SET value = '{$value}'" . $expire . " WHERE key = '{$key}'");
            } else {
                $query = $this->database->exec("INSERT INTO cache (key, value, expire) VALUES ('{$key}','{$value}','{$expire}')");
            }
        } else {
            $query = false;
        }
        return $query;
    }

    public function get($key)
    {
        if ($key) {
            return $query = $this->database->query("SELECT * FROM cache WHERE key = '{$key}'")->fetch();
        } else {
            return false;
        }
    }
}

class DataCache extends DataBaseCache
{
    public function __construct()
    {
        $this->pdo = 'sqlite:' . dirname(__FILE__) . DIRECTORY_SEPARATOR . 'database_name';
        parent::__construct();
    }
}

$cache = new DataCache();
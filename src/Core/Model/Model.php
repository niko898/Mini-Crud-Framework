<?php

namespace Akimov\Crud\Core\Model;

use PDO;

class Model 
{
    private static PDO $pdo;
    
    public function __construct()
    {
        if (empty(static::$pdo)) {
            self::connect();
        } 
    }

    private static function connect()
    {
        $dsn = sprintf(
            'mysql:host=%s;dbname=%s;port=%s',
            DB_HOSTNAME,
            DB_DATABASE,
            DB_PORT
        );
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        try {
            self::$pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public static function get(): PDO
    {
        if (empty(static::$pdo)) {
            self::connect();
        }
        return static::$pdo;
    }
}
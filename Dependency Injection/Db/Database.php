<?php

namespace Db;

use Contracts\DatabaseConfigInterface;
use PDO;

class Database
{
    private $config;

    /**
     * Database constructor.
     *
     * @param DatabaseConfigInterface $config
     */
    public function __construct(DatabaseConfigInterface $config)
    {
        $this->config = $config;
    }

    /**
     * Connect to the database and return PDO object
     *
     * @return PDO
     */
    public function connect()
    {
        $dsn = sprintf(
            'mysql:host=%s;dbname=%s;charset=utf8',
            $this->config->getHost(),
            $this->config->getDatabase()
        );

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        return new PDO(
            $dsn,
            $this->config->getUsername(),
            $this->config->getPassword(),
            $options
        );
    }
}

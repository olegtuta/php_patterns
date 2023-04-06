<?php

namespace Db;

use Contracts\DatabaseConfigInterface;

class MySQLConfig implements DatabaseConfigInterface
{
    private $host;
    private $database;
    private $username;
    private $password;

    /**
     * MySQLConfig constructor.
     * @param $host
     * @param $database
     * @param $username
     * @param $password
     */
    public function __construct(
        $host,
        $database,
        $username,
        $password
    ) {
        $this->host     = $host;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Get host
     *
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Get database name
     *
     * @return mixed
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Get username
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get password
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
}

<?php

namespace Contracts;

interface DatabaseConfigInterface {
    public function getHost();
    public function getDatabase();
    public function getUsername();
    public function getPassword();
}

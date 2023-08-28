<?php

namespace database;

class Cart
{
    public $db = null;

    public function __construct()
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
}
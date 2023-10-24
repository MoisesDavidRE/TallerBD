<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use DateTime;

class DumpController extends BaseController
{
    // public function index()
    // {

    //     $db= \Config\Database::connect();
    // }


    public function index()
    {
        $db = \Config\Database::connect();
        exec("mysqldump -u david -p1234 -h localhost -d blog > dumpBlog.sql");
    }
}
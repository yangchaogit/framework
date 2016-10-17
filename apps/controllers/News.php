<?php

namespace App\Controller;
use Swoole;

class News extends Swoole\Controller
{
    public function report() {
        print_r($_POST);
    }
}
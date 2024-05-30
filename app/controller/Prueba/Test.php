<?php

namespace controller;

use config\View;

require_once realpath(".../../vendor/autoload.php");

class Test extends View
{
    public function index()
    {

    }
}

$controlador = new Test();
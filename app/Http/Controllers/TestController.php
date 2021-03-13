<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testAction()
    {
        $name = 'asdasd';

        return $name;
    }
}

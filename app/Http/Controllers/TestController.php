<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rats\Zkteco\Lib\ZKTeco;

class TestController extends Controller
{
    public function index()
    {
        $zk = new ZKTeco('192.168.1.201');
        $zk->connect();
        $zk->testVoice();
        $users = $zk->getUser();
        dd($users);
    }
}

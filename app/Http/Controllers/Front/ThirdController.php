<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class ThirdController extends Controller implements HasMiddleware

{
    public static function middleware(): array
    {
        return [
            // 'auth',
            // new Middleware('log', only: ['index']),
            new Middleware('auth', except: ['show1']),
        ];
    }

    public function show1()
    {
        return 'Static String1';
    }

    public function show2()
    {
        return 'Static String2';
    }

    public function show3()
    {
        return 'Static String3';
    }

    public function show4()
    {
        return 'Static String4';
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Joe
 * Date: 2019/12/10
 * Time: 13:55
 */
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function getApp()
    {
        return view('app');
    }

    public function getLogin()
    {
        return view('login');
    }
}
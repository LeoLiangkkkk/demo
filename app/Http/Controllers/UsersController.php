<?php
/**
 * Created by PhpStorm.
 * User: leoliang
 * Date: 2020/4/2
 * Time: 16:29
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }
}
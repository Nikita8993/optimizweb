<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // $tag = new Tag();
        // $tag->title = 'Курица';
        // $tag->save();
        return view ('admin.index');
    }
}
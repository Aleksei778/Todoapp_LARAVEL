<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class MainController extends Controller
{
    public function home_page() {
        return view('welcome');
    }
    public function form_page() {
        return view('form');
    }
    public function tasks_page() {
        $tasks = new Tasks;
        return view('task', ['tasks'=>$tasks->all()]);
    }
}

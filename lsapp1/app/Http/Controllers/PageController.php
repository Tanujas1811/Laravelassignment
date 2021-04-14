<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return  view('pages.index');
    }
    public function assignment1(){
        return  view('pages.assignment1');
    }
    public function carousel(){
        return  view('pages.carousel');
    }
    public function page2(){
        return  view('pages.page2');
    }
    public function form(){
        return  view('pages.form');
    }
    public function img1(){
        return  view('pages.img1');
    }
    public function img2(){
        return  view('pages.img2');
    }
    public function img3(){
        return  view('pages.img3');
    }
    public function img4(){
        return  view('pages.img4');
    }
    public function list(){
        return  view('pages.list');
    }
    public function navbar(){
        return  view('pages.navbar');
    }
    public function progress(){
        return  view('pages.progress');
    }
    public function table(){
        return  view('pages.table');
    }
    public function validation(){
        return  view('pages.validation');
    }
}

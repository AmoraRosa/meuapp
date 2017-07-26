<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title = 'Bem vindo a Laravel';
      return view('pages.index', compact('title'));
    }
    public function about(){
      $title = 'Sobre o App';
      return view('pages.about')->with('title', $title);
    }

    public function services(){
      $data = array(
        'title' => 'Serviços',
        'services' => ['Web Design', 'Programming', 'SEO']
      );
      return view('pages.services')->with($data);
    }
}

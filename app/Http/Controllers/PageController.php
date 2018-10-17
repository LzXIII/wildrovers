<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class PageController extends Controller
{
    function magazine()
    {
      return view ('magazine');
    }

    function news()
    {
      $article=News::pluck('id')->get();
      foreach ($article as $a)
      {
        dd($a);
      }
    }
}

<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleByCategoryController extends Controller
{
      public function index($slug)
      {
            return view('website::pages.view-by-cate.index');
      }
}

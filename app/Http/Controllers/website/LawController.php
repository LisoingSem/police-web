<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LawController extends Controller
{
      public function index()
      {
            return view('website::pages.law.index');
      }

      public function detail($slug)
      {
            return view('website::pages.law.details');
      }
}

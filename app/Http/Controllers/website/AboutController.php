<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
      public function leader()
      {
            return view('website::pages.about-us.leader.index');
      }

      public function structure()
      {
            return view('website::pages.about-us.structure.index');
      }

}

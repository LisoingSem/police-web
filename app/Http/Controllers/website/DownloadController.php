<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
      public function index()
      {
            return view('website::pages.download.index');
      }

      public function detail($slug)
      {
            return view('website::pages.download.details');
      }
}

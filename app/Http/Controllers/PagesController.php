<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PagesController extends Controller
{
    /**
     * Return the index page
     *
     * @return Response
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * Return the impressum page
     *
     * @return Response
     */
    public function impressum()
    {
        return view('pages.impressum');
    }
}

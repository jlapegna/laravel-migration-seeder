<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicsController extends Controller
{
    //

    public function index() {

        $comics = Comic::all();

        return view("pages.comics", compact("comics"));
    }

}

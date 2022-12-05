<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Superhero;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class SuperheroController extends Controller
{
    #[NoReturn]
    public function index (Request $request)
    {
//        dd($request->filter);
        return Superhero::all();
    }
}

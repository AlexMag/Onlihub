<?php

namespace App\Http\Controllers;

use App\Models\Article as B;
use App\Models\BlogEvents as E;
use Illuminate\Http\Request;

class Blog extends Controller
{
    public function index(){

        return view('blog',
            [
                'articles' => B::paginate(9)
            ]);
    }


    public function show($id){

        // increment
        E::incrementView($id);

        return view('article',
            [
                'article' => B::find($id)
            ]);
    }


    /**
     * Get a user
     **/
    public function like(Request $request)
    {
        E::incrementLike($request->input('id'));
    }
}

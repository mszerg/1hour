<?php

namespace App\Http\Controllers\Front\MarketingDogovor;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    //
    public function __invoke()
        {
            // TODO: Implement __invoke() method.
            $posts = Post::where('Arhiv',false)->get(); //для выпадающего списка поставщиков
            //dd($posts);
            return view('front.marketingdogovor.create',compact('posts'));
            //dd(111111);
        }
}

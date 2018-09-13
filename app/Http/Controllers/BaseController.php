<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //

    function  index(){
        return view('bright.index');
//        return view('base');
    }
    function page(){
//        $page = Page::where('local-')
        $url =url()->current();
        $array =explode('/',$url);
        $pieceUrl=$array[3];
        $page=Page::where('local_url', $pieceUrl)->get()->toArray();
        $category=Category::where('local_url', $pieceUrl)->get()->toArray();
        if($category){
            $category=$category[0];
            return view('bright.category', compact('category'));
        }elseif($page){
            $page=$page[0];
//            echo '<pre>';
//            var_dump($page);
//            echo '</pre>';
            return view('bright.review', compact('page'));
        }else{
            abort(404);
        }
    }
    function review(){

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Retorna lista com produtos
     *  
     * @param NULL
     * @return Object 
     *
    */ 
    public function list(){
        $list = file_get_contents(storage_path() . "/app/productList.json");
        //$list = json_decode($list, true);

        return view('pages.list', [ "list" => $list ]);
    }

    
    /**
     * Retorna produto conforme o Slug
     *  
     * @param String slug
     * @return Object 
     *
    */    
    public function details($slug){
        $list = file_get_contents(storage_path() . "/app/productList.json");
        $list = json_decode($list, true);

        $key = array_search($slug, array_column($list, 'Slug'));

        if( $key === false )
            abort(404);

        $product = json_encode($list[$key]);

        return view('pages.details', [ "product" => $product ]);
    }


}//class ProductController

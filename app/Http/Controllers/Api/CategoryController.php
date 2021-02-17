<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends ApiResponseController
{
    //
    public function all(){
        return $this->succesResponse(Category::all());
    }

    public function index(){
        return $this->succesResponse(Category::paginate(10));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Category as CategoryResource;
use App\Http\Resources\CategoryCollection;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(15);
        return CategoryResource::collection($categories);
    }

    public function store()
    {
        //
    }


    public function edit()
    {
        //
    }
}

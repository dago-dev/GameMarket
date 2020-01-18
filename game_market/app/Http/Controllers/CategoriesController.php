<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Product;

class CategoriesController extends Controller
{
  public function show($category_name) { //引数の中身は変数名はわかりやすいものにする。
    // dd($category_name);
    $category = Category::where('category', $category_name)->get()->first();
    $products = Category::find($category->id)->products()->get();
    return view('categories.show')->with('products',$products);
  }
  public function category(){
    $categories =Category::all();
    return view('categories.category')->with('categories',$categories);
  }
}

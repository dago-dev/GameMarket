<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use Image;
use App\Category;

class TweetsController extends Controller
{
  // public function __construct()
  // {
  //   $this->middleware('auth',array('except' =>'index'));
  // }
  public function index()
  {
    $products =Product::all();

    return view('tweets.index')->with('products',$products);
  }
  public function create()
  {
    $categories = Category::all();
    return view('tweets.create')->with('categories', $categories);
  }
  public function show($id) {
    $product = Product::find($id);
    return view('tweets.show')->with('product',$product);
  }
  public function store(Request $request) {
    $fileName = $request['product_image']->getClientOriginalName();
    Image::make($request['product_image'])->save(public_path() . '/images/' . $fileName);
    Product::create(
      array(
        'title' =>$request->title,
        'price' =>$request->price,
        'detail'=>$request->detail,
        'category_id'=>$request->category_id,
        'product_image'=>$fileName
      )
    );
    return view('tweets.store');
  }
  public function contact()
  {
    return view('tweets.contact');
  }
  public function serch(Request $request)
  {
    $products =Product::where('title', 'LIKE', "%{$request->keyword}%")->take(1)->get();
    return view('tweets.serch')->with('products', $products);
  }
}

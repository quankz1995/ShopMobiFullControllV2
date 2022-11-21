<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function indexlayout()
    {
        $categorys= Category::where('status','0')->get();
        return view('layouts.index',compact('categorys'));
    }
    public function indexHomePage()
    {
        $categorys = Category::where('status','0')->get();
        $products = Product::all();
        
        $sliders = Slider::where('status','0')->get();
        return view('frontend.Home',compact('sliders','categorys','products'));
    }

    public function categories()
    {
        $products = Product::all();
       
        $categorys = Category::where('status','0')->get();
        $sliders = Slider::where('status','0')->get();
        return view('frontend.Collection',compact('sliders','categorys','products'));
    }
    
    public function products($category_slug)
    {
       

        $category = Category::where('slug',$category_slug)->first();
        if($category)
        {
             $categorys = Category::where('status','0')->get();
             $products = $category->products_in_category()->get();
             $products =Product::orderBy('id','DESC')->paginate(10);
             return view('frontend.Product',['products'=>$products],compact('category','products','categorys'));          
        }
        else
        {
            return redirect()->back();
        }
        
    }
}
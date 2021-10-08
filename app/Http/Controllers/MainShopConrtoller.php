<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class MainShopConrtoller extends Controller
{
     public function dashbord_page()
     {
         return view('back-end.dashbord.dashbord');
     }
public function home_page(Request $request)
{
     $popularCategory = Category::where('publication_status',1)->orderBy('clickCount','desc')->take(1)->first();  
     $popularCategoryId = $popularCategory->id;  

     return view('front-end.home.home',[
          'products'                 => Product::where('publication_status',1)->orderBy('clickCount','desc')->take(6)->get(),
          'sliders'                  => Slider::where('sliderType',0)->get(),
          'firstSlider'              => Slider::where('sliderType',1)->first(),
          'sliderBottomActiv'        => Product::where('publication_status',1)->orderBy('id','desc')->take(3)->get(),
          'sliderBottomItem'         => Product::where('publication_status',1)->take(3)->get(),
          'popularCategoryProduct'   => Product::where('category_id',$popularCategoryId)->orderBy('clickCount','desc')->take(8)->get(),
          // 'menus'                    => Menu::where('activationStatus',1)->get(),
     ]);
}

public function allProducts()
{
     return view('front-end.home.all-products',[
          'products'   => Product::where('publication_status',1)->paginate(12), 
     ]);
}
public function categoryProduct($id)
{
     return view('front-end.shop.category-products',[
          'products'   => Product::where('category_id',$id)->paginate(15),  
     ]);
}

public function brandProducts($id)
{
     return view('front-end.shop.brand-products',[
          'products'   => Product::where('brand_id',$id)->paginate(15),  
     ]);
}












}//Controller

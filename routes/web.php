<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
 


  
 

//admin Panel routes 

Route::group(['middleware'=>'userLogoutMiddleware'],function(){
    Route::get('user/register',[
        'uses'   =>'App\Http\Controllers\myUserController@register',
        'as'     =>'register'
    ]);
    Route::post('user/userRegisterInfoSubmit',[
        'uses'   =>'App\Http\Controllers\myUserController@userRegisterInfoSubmit',
        'as'     =>'userRegisterInfoSubmit'
    ]);
    
    Route::post('user/loginInfoSubmit',[
        'uses'   =>'App\Http\Controllers\myUserController@loginInfoSubmit',
        'as'     =>'loginInfoSubmit'
    ]); 
});


Route::group(['middleware'=>'userLoginMiddleware'],function(){
    Route::get('dashbord',[
        'uses'   =>'App\Http\Controllers\MainShopConrtoller@dashbord_page',
        'as'     =>'dashbord'
    ]);
    Route::get('category/add-category-page',[
        'uses'   =>'App\Http\Controllers\CategoryController@add_category_page',
        'as'     =>'add-category-page'
    ]);
    Route::post('category/categeoy_info_save',[
        'uses'   =>'App\Http\Controllers\CategoryController@categeoy_info_save',
        'as'     =>'categeoy_info_save'
    ]);
    
    Route::get('category/manage-category-page',[
        'uses'   =>'App\Http\Controllers\CategoryController@manage_category_page',
        'as'     =>'manage-category-page'
    ]);
    Route::get('category/edit-category-page/{id}',[
        'uses'   =>'App\Http\Controllers\CategoryController@edit_category_page',
        'as'     =>'edit-category-page'
    ]);
    Route::post('category/category-update',[
        'uses'   =>'App\Http\Controllers\CategoryController@category_update',
        'as'     =>'category-update'
    ]);
    Route::post('category/delete-category',[
        'uses'   =>'App\Http\Controllers\CategoryController@delete_category',
        'as'     =>'delete-category'
    ]);
    Route::get('brand/add-brand-page',[
        'uses'   =>'App\Http\Controllers\BrandController@add_brand_page',
        'as'     =>'add-brand-page'
    ]);
    Route::post('brand/band-save',[
        'uses'   =>'App\Http\Controllers\BrandController@band_info_save',
        'as'     =>'band-save'
    ]);
    Route::get('brand/manage-brand-page',[
        'uses'   =>'App\Http\Controllers\BrandController@manage_brand_page',
        'as'     =>'manage-brand-page'
    ]);
    Route::get('brand/edit-brand-page/{id}',[
        'uses'   =>'App\Http\Controllers\BrandController@edit_brand_page',
        'as'     =>'edit-brand-page'
    ]);
    Route::post('brand/band-update',[
        'uses'   =>'App\Http\Controllers\BrandController@band_update',
        'as'     =>'band-update'
    ]);
    Route::post('brand/delete-brand',[
        'uses'   =>'App\Http\Controllers\BrandController@delete_brand',
        'as'     =>'delete-brand'
    ]);
    Route::get('color/add-color-page',[
        'uses'   =>'App\Http\Controllers\ColorController@add_color_page',
        'as'     =>'add-color-page'
    ]);
    Route::post('color/save-color',[
        'uses'   =>'App\Http\Controllers\ColorController@save_color',
        'as'     =>'save-color'
    ]);
    Route::get('color/manage-color-page',[
        'uses'   =>'App\Http\Controllers\ColorController@manage_color_page',
        'as'     =>'manage-color-page'
    ]);
    Route::get('color/edit-color-page/{id}',[
        'uses'   =>'App\Http\Controllers\ColorController@edit_color_page',
        'as'     =>'edit-color-page'
    ]);
    Route::post('color/color-update',[
        'uses'   =>'App\Http\Controllers\ColorController@color_update',
        'as'     =>'color-update'
    ]);
    Route::post('color/delete-color',[
        'uses'   =>'App\Http\Controllers\ColorController@color_delete',
        'as'     =>'delete-color'
    ]);
    Route::get('size/add-size-page',[
        'uses'   =>'App\Http\Controllers\SizeController@add_size_page',
        'as'     =>'add-size-page'
    ]);
    Route::post('size/save_size_info',[
        'uses'   =>'App\Http\Controllers\SizeController@save_size_info',
        'as'     =>'save_size_info'
    ]);
    Route::get('size/manage-size-page',[
        'uses'   =>'App\Http\Controllers\SizeController@manage_size_page',
        'as'     =>'manage-size-page'
    ]);
    Route::get('size/edit-size-page/{id}',[
        'uses'   =>'App\Http\Controllers\SizeController@edit_size_page',
        'as'     =>'edit-size-page'
    ]);
    Route::post('size/update_size_info',[
        'uses'   =>'App\Http\Controllers\SizeController@update_size_info',
        'as'     =>'update_size_info'
    ]);
    Route::post('size/delete-size',[
        'uses'   =>'App\Http\Controllers\SizeController@delete_size',
        'as'     =>'delete-size'
    ]);
    Route::get('product/add-product-page',[
        'uses'   =>'App\Http\Controllers\ProductController@add_product_page',
        'as'     =>'add-product-page'
    ]);
    Route::post('product/add_product_info',[
        'uses'   =>'App\Http\Controllers\ProductController@add_product_info',
        'as'     =>'add_product_info'
    ]);
    Route::get('product/manage-product-page',[
        'uses'   =>'App\Http\Controllers\ProductController@manage_product_page',
        'as'     =>'manage-product-page'
    ]);
    Route::get('product/edit-product-page/{id}',[
        'uses'   =>'App\Http\Controllers\ProductController@edit_product_page',
        'as'     =>'edit-product-page'
    ]);
    Route::post('product/update_product_info',[
        'uses'   =>'App\Http\Controllers\ProductController@update_product_info',
        'as'     =>'update_product_info'
    ]);
    Route::post('product/delete-product',[
        'uses'   =>'App\Http\Controllers\ProductController@delete_product',
        'as'     =>'delete-product'
    ]);
    Route::get('district/add-distric-page',[
        'uses'   =>'App\Http\Controllers\DistrictController@add_district_page',
        'as'     =>'add-distric-page'
    ]);
    Route::post('district/saveDistrictInfo',[
        'uses'   =>'App\Http\Controllers\DistrictController@saveDistrictInfo',
        'as'     =>'saveDistrictInfo'
    ]);
    Route::get('district/deleteDistrict/{id}',[
        'uses'   =>'App\Http\Controllers\DistrictController@deleteDistrict',
        'as'     =>'deleteDistrict'
    ]);
    Route::get('area/addAndManageAreaPage',[
        'uses'   =>'App\Http\Controllers\AreaController@addAndManageAreaPage',
        'as'     =>'addAndManageAreaPage'
    ]);
    Route::post('area/saveAreaInfo',[
        'uses'   =>'App\Http\Controllers\AreaController@saveAreaInfo',
        'as'     =>'saveAreaInfo'
    ]);
    Route::get('area/deleteArea/{id}',[
        'uses'   =>'App\Http\Controllers\AreaController@deleteArea',
        'as'     =>'deleteArea'
    ]);
    Route::get('slider/addSlidersPage',[
        'uses'   =>'App\Http\Controllers\SliderController@addSlidersPage',
        'as'     =>'addSlidersPage'
    ]);
    Route::post('slider/saveSlider',[
        'uses'   =>'App\Http\Controllers\SliderController@saveSlider',
        'as'     =>'saveSlider'
    ]);
    Route::get('slider/manageSlider',[
        'uses'   =>'App\Http\Controllers\SliderController@manageSlider',
        'as'     =>'manageSlider'
    ]);
    Route::get('slider/sliderDelete/{id}',[
        'uses'   =>'App\Http\Controllers\SliderController@sliderDelete',
        'as'     =>'sliderDelete'
    ]);
    Route::get('slider/makeFirstSlider/{id}',[
        'uses'   =>'App\Http\Controllers\SliderController@makeFirstSlider',
        'as'     =>'makeFirstSlider'
    ]);
    
    Route::get('orders/ordersShow',[
        'uses'   =>'App\Http\Controllers\OrderController@ordersShow',
        'as'     =>'ordersShow'
    ]);
    Route::get('orders/orderDetails/{id}',[
        'uses'   =>'App\Http\Controllers\OrderController@orderDetails',
        'as'     =>'orderDetails'
    ]);
    Route::get('Invoice/invoicePdf/{id}',[
        'uses'   =>'App\Http\Controllers\OrderController@invoicePdf',
        'as'     =>'invoicePdf'
    ]);
    
    Route::get('menu/addMenuPage',[
        'uses'   =>'App\Http\Controllers\menuController@addMenuPage',
        'as'     =>'addMenuPage'
    ]);
    Route::post('menu/saveMenuInfo',[
        'uses'   =>'App\Http\Controllers\menuController@saveMenuInfo',
        'as'     =>'saveMenuInfo'
    ]);
    Route::get('menu/inactiveMenu/{id}',[
        'uses'   =>'App\Http\Controllers\menuController@inactiveMenu',
        'as'     =>'inactiveMenu'
    ]);
    Route::get('menu/activeMenu/{id}',[
        'uses'   =>'App\Http\Controllers\menuController@activeMenu',
        'as'     =>'activeMenu'
    ]); 
    Route::get('menu/deleteMenu/{id}',[
        'uses'   =>'App\Http\Controllers\menuController@deleteMenu',
        'as'     =>'deleteMenu'
    ]); 
    Route::get('menu/nonDropdownMenu/{id}',[
        'uses'   =>'App\Http\Controllers\menuController@nonDropdownMenu',
        'as'     =>'nonDropdownMenu'
    ]); 
    Route::get('menu/dropdownableMenu/{id}',[
        'uses'   =>'App\Http\Controllers\menuController@dropdownableMenu',
        'as'     =>'dropdownableMenu'
    ]); 
    Route::get('menu/editMenuPage/{id}',[
        'uses'   =>'App\Http\Controllers\menuController@editMenuPage',
        'as'     =>'editMenuPage'
    ]); 
    Route::post('menu/updateMenuInfo',[
        'uses'   =>'App\Http\Controllers\menuController@updateMenuInfo',
        'as'     =>'updateMenuInfo'
    ]);
    Route::get('menu/addDropdownPage',[
        'uses'   =>'App\Http\Controllers\DropdownController@addDropdownPage',
        'as'     =>'addDropdownPage'
    ]);
    Route::post('menu/saveDropdownInfo',[
        'uses'   =>'App\Http\Controllers\DropdownController@saveDropdownInfo',
        'as'     =>'saveDropdownInfo'
    ]); 
    Route::get('menu/inactiveDropdown/{id}',[
        'uses'   =>'App\Http\Controllers\DropdownController@inactiveDropdown',
        'as'     =>'inactiveDropdown'
    ]);
    Route::get('menu/activeDropdown/{id}',[
        'uses'   =>'App\Http\Controllers\DropdownController@activeDropdown',
        'as'     =>'activeDropdown'
    ]);
    
    Route::get('menu/deleteDropdown/{id}',[
        'uses'   =>'App\Http\Controllers\DropdownController@deleteDropdown',
        'as'     =>'deleteDropdown'
    ]);
    Route::get('menu/editDropdown/{id}',[
        'uses'   =>'App\Http\Controllers\DropdownController@editDropdown',
        'as'     =>'editDropdown'
    ]);
    
    Route::post('menu/updateDropdownInfo',[
        'uses'   =>'App\Http\Controllers\DropdownController@updateDropdownInfo',
        'as'     =>'updateDropdownInfo'
    ]);
      
    Route::get('user/userLogout',[
        'uses'   =>'App\Http\Controllers\myUserController@userLogout',
        'as'     =>'userLogout'
    ]);
    Route::get('reseller/reSellerManage',[
        'uses'   =>'App\Http\Controllers\reSellerController@reSellerManage',
        'as'     =>'reSellerManage'
    ]);
    Route::get('reseller/approvingReSeller/{id}',[
        'uses'   =>'App\Http\Controllers\reSellerController@approvingReSeller',
        'as'     =>'approvingReSeller'
    ]);




 Route::get('user/userManage',[
        'uses'   =>'App\Http\Controllers\myUserController@userManage',
        'as'     =>'userManage'
    ]);










});//End userLoginMiddleware

 

// Reseller Router 
Route::group(['middleware'=>'reSellerAlreadyLoginCheckMiddleware'],function(){
    Route::get('reSeller/register',[
        'uses'   =>'App\Http\Controllers\reSellercontroller@register',
        'as'     =>'reSeller/register'
    ]);
    Route::post('reSeller/reSellerSingUpInfoSubmit',[
        'uses'   =>'App\Http\Controllers\reSellercontroller@reSellerSingUpInfoSubmit',
        'as'     =>'reSellerSingUpInfoSubmit'
    ]);
    Route::get('reSeller/login',[
        'uses'   =>'App\Http\Controllers\reSellercontroller@login',
        'as'     =>'reSeller/login'
    ]);
    Route::post('reSeller/reSellerLogin',[
        'uses'   =>'App\Http\Controllers\reSellercontroller@reSellerLogin',
        'as'     =>'reSellerLogin'
    ]);
});// Re-seller Already login middleware







route::group(['middleware'=>'reSellerMiddleware'],function(){
    Route::get('reSeller/dashbord',[
        'uses'   =>'App\Http\Controllers\reSellercontroller@dashbord',
        'as'     =>'reSeller/dashbord'
    ]);

    Route::get('reSeller/reSellerLogout',[
        'uses'   =>'App\Http\Controllers\reSellercontroller@reSellerLogout',
        'as'     =>'reSellerLogout'
    ]);

});// Re-seller login middleware
















//Font End Routes


Route::get('/',[
    'uses'   =>'App\Http\Controllers\MainShopConrtoller@home_page',
    'as'     =>'/'
]);
Route::get('product/single_product_page/{id}',[
    'uses'   =>'App\Http\Controllers\ProductController@single_product_page',
    'as'     =>'single_product_page'
]);
Route::post('product/add-to-cart',[
    'uses'   =>'App\Http\Controllers\CartController@add_to_cart',
    'as'     =>'add-to-cart'
]);
Route::get('cart/add-to-cart/{id}',[
    'uses'   =>'App\Http\Controllers\CartController@add_to_cart_by_get_method',
    'as'     =>'add-to-cart-by-get-method'
]);
Route::get('cart/show',[
    'uses'   =>'App\Http\Controllers\CartController@cart_show',
    'as'     =>'cart-show'
]);
Route::post('cart/update-cart/{id}',[
    'uses'   =>'App\Http\Controllers\CartController@update_cart',
    'as'     =>'update-cart'
]);
Route::get('cart/item-delete/{id}',[
    'uses'   =>'App\Http\Controllers\CartController@cart_item_delete',
    'as'     =>'item-delete'
]);
Route::get('cart/clear-cart',[
    'uses'   =>'App\Http\Controllers\CartController@clear_cart',
    'as'     =>'clear-cart'
]);
Route::get('customer/register_page',[
    'uses'   =>'App\Http\Controllers\CustomerController@register_page',
    'as'     =>'register_page'
]);
Route::get('customer/register_page_home',[
    'uses'   =>'App\Http\Controllers\CustomerController@register_page_home',
    'as'     =>'register_page_home'
]);
Route::post('customer/customer-register-info-submit',[
    'uses'   =>'App\Http\Controllers\CustomerController@customer_register_info_submit',
    'as'     =>'customer-register-info-submit'
]);
Route::post('customer/customer-login',[
    'uses'   =>'App\Http\Controllers\CustomerController@customer_login',
    'as'     =>'customer-login'
]);
Route::post('customer/customer-login-home',[
    'uses'   =>'App\Http\Controllers\CustomerController@customer_login_home',
    'as'     =>'customer-login-home'
]);
Route::get('customer/logout',[
    'uses'   =>'App\Http\Controllers\CustomerController@logout',
    'as'     =>'logout'
]);
Route::get('customer/shipping-address-page',[
    'uses'   =>'App\Http\Controllers\ShippingController@shipping_address_page',
    'as'     =>'shipping-address-page'
]);
Route::post('customer/saveShippingAddress',[
    'uses'   =>'App\Http\Controllers\ShippingController@saveShippingAddress',
    'as'     =>'saveShippingAddress'
]);
Route::get('customer/payment-method',[
    'uses'   =>'App\Http\Controllers\ShippingController@payment_method',
    'as'     =>'payment-method'
]);
Route::post('order/submitOrder',[
    'uses'   =>'App\Http\Controllers\OrderController@submitOrder',
    'as'     =>'submitOrder'
]);
Route::get('shop/allProducts',[
    'uses'   =>'App\Http\Controllers\MainShopConrtoller@allProducts',
    'as'     =>'allProducts'
]);
Route::get('shop/categoryProduct/{id}',[
    'uses'   =>'App\Http\Controllers\MainShopConrtoller@categoryProduct',
    'as'     =>'categoryProduct'
]); 
Route::get('shop/brandProducts/{id}',[
    'uses'   =>'App\Http\Controllers\MainShopConrtoller@brandProducts',
    'as'     =>'brandProducts'
]);









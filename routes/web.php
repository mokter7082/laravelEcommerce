<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/','HomeController@index');









//ADMIN CONTROL Here
//SUPER CONTROLLER CONTROL HERE
Route::get('/admin','AdminController@adminLogin');
Route::get('/dashboard','AdminController@adminDashboard');
Route::get('logout','SuperAdminController@logout')->name('logout');
Route::get('customar-logout','SuperAdminController@customarLogout')->name('customar-logout');
//CATEGORY CONTROL HERE

Route::post('/admin-dashboard','AdminController@dashboard')->name('admin-dashboard');
Route::get('/add-category','AddCategoryController@addCategory')->name('add-category');
Route::post('/save-category','AddCategoryController@saveCategory')->name('save-category');
Route::get('/all-category','AddCategoryController@allCategory')->name('all-category');
Route::get('/category-unactive/{caregory_id}','AddCategoryController@categoryUnactive')->name('category-unactive');
Route::get('/category-active/{caregory_id}','AddCategoryController@categoryActive')->name('category-active');
Route::get('/edite-category/{caregory_id}','AddCategoryController@editeCategory')->name('edite-category');
Route::post('/update-category/{caregory_id}','AddCategoryController@UpdateCategory')->name('update-category');
Route::get('/delete-category/{caregory_id}','AddCategoryController@deleteCategory')->name('delete-category');

// MANUFACTURE CONTROL HERE

Route::get('/add-manufacture','ManufactureController@addManufacture')->name('add-manufacture');
Route::post('/save-manufacture','ManufactureController@saveManufacture')->name('save-manufacture');
Route::get('/all-manufacture','ManufactureController@allManufacture')->name('all-manufacture');
Route::get('/manufacture-inactive/{manufacture_id}','ManufactureController@manufactureInactive')->name('manufacture-inactive');
Route::get('/manufacture-active/{manufacture_id}','ManufactureController@manufactureActive')->name('manufacture-active');



//PRODUCT CONTROL HERE
Route::get('/add-product','ProductController@addProduct')->name('add-product');
Route::post('/save-product','ProductController@savepPoduct')->name('save-product');
Route::get('/all-product','ProductController@allProduct')->name('all-product');
Route::get('/product-inactive/{product_id}','ProductController@productInactive')->name('product-inactive');
Route::get('/product-active/{product_id}','ProductController@productActive')->name('product-active');





//SLIDER CONTROL HERE
Route::get('/add-slider','SliderController@addSlider')->name('add-slider');
Route::post('/save-slider','SliderController@saveSlider')->name('save-slider');
Route::get('/all-slider','SliderController@allSlider')->name('all-slider');
Route::get('/slider-inactive/{slider_id}','SliderController@sliderInactive')->name('slider-inactive');
Route::get('/slider-active/{slider_id}','SliderController@sliderActive')->name('slider-active');




//PRODUCT 2nd TIME  CONTROL HERE
Route::get('/product-by-category/{id}','CategoryAndProduct@categoryWiseProduct')->name('category-wise-product');
Route::get('/product-details/{product_id}','CategoryAndProduct@productDetail')->name('product-details');

//CARD CONTROL HERE
//Route::post('/add-to-cart','CartController@addToCart')->name('add-to-cart');
Route::post('/add-to-cart','CartController@addtoCart')->name('add-to-cart');
Route::get('/show-cart','CartController@showCart')->name('show-cart');
Route::get('/order-cancel/{rowId}','CartController@orderCancel')->name('order-cancel');
Route::post('/qty-update','CartController@qtyUpdate')->name('qty-update');
Route::get('/checkout-login','CheckoutController@checkoutLogin')->name('checkout-login');
Route::post('/customar-save','CheckoutController@customarSave')->name('customar-save');
Route::get('/checkout','CheckoutController@checkOut')->name('checkout');
Route::post('/shiping-save','CheckoutController@shipingSave')->name('shiping-save');
Route::get('/payment','CheckoutController@Payment')->name('payment');
Route::post('/payment','CheckoutController@logPayment')->name('log-payment');
Route::post('/payment-method','paymentController@paymentMethod')->name('payment-method');
 





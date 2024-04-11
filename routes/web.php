<?php

use App\Http\Controllers\AdminBooksController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCouponController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoteBookController;
use App\Http\Controllers\ShopComponentsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('account/verify/{token}', [AuthController::class, 'verifyAccount'])->name('user.verify');
Route::get('search', [SearchController::class, 'search'])->name('search');

Auth::routes();
//                 ------User MIDDLEWARE-------
Route::group(['prefix'=>'', 'middleware'=>['isUser','auth']],function(){
//                         -----Home Page-----
Route::get('/home', [HomeController::class, 'index'])->name('home');


//                         -----Shop Components-----
Route::get('/checkout', [ShopComponentsController::class, 'checkout'])->name('checkout');
Route::get('/contact-us', [ShopComponentsController::class, 'contactus'])->name('contact-us');
Route::get('/about-us', [ShopComponentsController::class, 'aboutus'])->name('about-us');

//                        -----Orders-----
Route::get('/orders', [OrderController::class, 'orders'])->name('orders');
Route::match(['GET', 'POST'], '/track-order/{order_id}', [OrderController::class, 'track_order'])->name('track-order');

//                         -----Cart-----
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}/{quantity?}', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::post('saveMe',[CartController::class, 'saveMe'])->name('saveMe');
Route::get('remove-from-cart/{id}', [CartController::class, 'remove'])->name('remove_from_cart');


Route::match(['GET', 'POST'], '/shipping-info', [CheckoutController::class, 'shipping'])->name('shipping-info');
Route::match(['GET', 'POST'], '/payment', [CheckoutController::class, 'payment'])->name('payment');
Route::match(['GET', 'POST'], '/success', [CheckoutController::class, 'success'])->name('success');


//                         -----Wishlist-----
Route::get('/wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');
Route::get('/add-wishlist', [WishlistController::class, 'add_wishlist'])->name('add-wishlist');


//                         -----Profile-----
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::match(['put', 'patch'],'profileUpdate/{id}', [ProfileController::class, 'updateProfile'])->name('update-profile');


//                         -----Products-----
Route::get('/our-books/{id?}', [ProductsController::class, 'ourproducts'])->name('ourproducts');
Route::get('/list-books', [ProductsController::class, 'listedproducts'])->name('list-books');
Route::get('book-details/{id}', [ProductsController::class, 'book_details'])->name('book_details');


//                          ---Chats---
Route::get('/chat', [ChatController::class, 'chat'])->name('users.chat');


//                         -----Listing-----
Route::get('/add-listing', [ListingController::class, 'addlisting'])->name('add-listing');
Route::get('/my-listings', [ListingController::class, 'mylistings'])->name('my-listings');
Route::post('/add', [ListingController::class, 'store'])->name('list.store');
Route::get('soldoutl/update/{id}',[ListingController::class,'SoldOut'])->name('lsold.update');
});



//                 ------ADMIN MIDDLEWARE-------
Route::group(['prefix'=>'/admin', 'middleware'=>['isAdmin','auth']],function(){

//                         -----Admin-----
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/payments', [AdminController::class, 'payments'])->name('admin.payments');

Route::get('/order-list', [AdminController::class, 'orders'])->name('admin.admin-orders');
Route::get('/order-details/{id}',[AdminController::class, 'orderDetails'])->name('order.details');
Route::get('/packed/{id}',[AdminController::class, 'packed'])->name('order.packed');
Route::get('/shipped/{id}',[AdminController::class, 'shipped'])->name('order.shipped');
Route::get('/delivered/{id}',[AdminController::class, 'delivered'])->name('order.delivered');

Route::get('/coupons', [AdminCouponController::class, 'coupon'])->name('admin.coupon');
Route::post('/coupon-add', [AdminCouponController::class, 'addCoupon'])->name('coupon.add');
Route::match(['put', 'patch'],'coupon-update/{id}',[AdminCouponController::class,'updateCoupon'])->name('coupon.update');
Route::get('/coupon-delete/{id}', [AdminCouponController::class, 'destroyCoupon'])->name('coupon.destroy');

Route::get('/promote-book',[PromoteBookController::class, 'index'])->name('admin.promote-book');
Route::post('/promotion/save', [PromoteBookController::class, 'store'])->name('promotion.save');
Route::get('/promotion/edit/{id}', [PromoteBookController::class, 'update'])->name('promotion.edit');
Route::delete('/promotion/delete/{id}', [PromoteBookController::class, 'destroy'])->name('promotion.delete');


//                         -----Users-----
Route::get('/users', [UserController::class, 'userlist'])->name('admin.userlist');
Route::get('/user-details', [UserController::class, 'userdetails'])->name('admin.user-details');
Route::get('/our-books', [AdminBooksController::class, 'ourbooks'])->name('admin.our-books');
Route::get('/listed-books', [AdminBooksController::class, 'listedbooks'])->name('admin.listed-books');
Route::get('/add-books', [AdminBooksController::class, 'addbooks'])->name('admin.add-books');
Route::post('/add', [AdminBooksController::class, 'store'])->name('adminbook.store');
Route::post('/add-category', [AdminBooksController::class, 'addcategory'])->name('admin.category');
Route::match(['put', 'patch'],'updates/{books}',[AdminBooksController::class,'update'])->name('adminbooks.update');
Route::delete('delete/{product}',[AdminBooksController::class,'destroy'])->name('products.destroy');
Route::delete('deletelb/{product}',[AdminBooksController::class,'destroylb'])->name('products.destroylb');

Route::get('instock/update/{id}',[AdminBooksController::class,'InStock'])->name('stock.update');
Route::get('soldout/update/{id}',[AdminBooksController::class,'SoldOut'])->name('sold.update');
});




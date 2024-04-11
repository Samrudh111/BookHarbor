<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\CartItems;
use App\Models\Coupon;
use App\Models\OurBook;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $product_globe = OurBook::where('status', 'In Stock')->limit(10)->get();
            $products_offer = OurBook::where('status', 'In Stock')
                ->whereNotNull('book_original_price')
                ->get();
            $product_featured = OurBook::where('status','In Stock')->whereNotNull('book_original_price')
                ->inRandomOrder()
                ->limit(5)->get();
            
            $discountPercentage = 0; // Declare and initialize the variable outside the loop
            
            if (!$products_offer->isEmpty()) {
                foreach ($products_offer as $product) {
                    $regularPrice = $product->book_original_price; // Regular price
                    $sellingPrice = $product->book_selling_price; // Selling price
    
                    if ($regularPrice > 0) {
                        $discountPercentage = 100 - (($sellingPrice / $regularPrice) * 100);
                        $discountPercentage = round($discountPercentage);
                    } else {
                        $discountPercentage = 0;
                    }
    
                    $product->discountPercentage = $discountPercentage;
                }
            }
    
            $category = $product_globe->pluck('category')->unique()->values();
            $coupons = Coupon::get();
    
            $cartCount = Auth::check() ? $this->getCartCount() : null;
    
            $view->with('product_globe', $product_globe)
                 ->with('product_featured', $product_featured)
                 ->with('products_offer', $products_offer)
                 ->with('category', $category)
                 ->with('coupons', $coupons)
                 ->with('discountPercentage', $discountPercentage)
                 ->with('cartCount', $cartCount);
        });
    }
    


public function getCartCount()
    {
        $user = Auth::user();
        $cartCount = CartItem::whereHas('cart', function ($query) use ($user) {
                $query->where('is_paid', false)->where('user_id', $user->id);
            })
            ->count();
    
        return $cartCount;
    }
}

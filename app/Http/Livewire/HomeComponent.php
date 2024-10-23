<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Category;
use App\Models\HomeCategory;
use App\Models\Sale;
use Cart;


class HomeComponent extends Component
{
    public function render()
{
    $sliders = HomeSlider::where('status', 1)->get();
    $lproducts = Product::orderBy('created_at', 'DESC')->take(10)->get();
    $category = HomeCategory::find(1);

    if ($category) {
        $cats = explode(',', $category->sel_categories);
        $categories = Category::whereIn('id', $cats)->get();
        $no_of_products = $category->no_of_products;
    } else {
        // Set default values if HomeCategory is null
        $categories = collect();  // Empty collection
        $no_of_products = 0;      // Default to 0 products
    }

    $sproducts = Product::where('sale_price', '>', 0)->inRandomOrder()->take(8)->get();
    $sale = Sale::find(1);

    if (!$sale) {
        $sale = new Sale();  // Default values to avoid null errors
    }

    if (Auth::check()) {
        try {
            Cart::instance('cart')->restore(Auth::user()->email);
            Cart::instance('wishlist')->restore(Auth::user()->email);
        } catch (\Exception $e) {
            // Log or handle the exception for cart/wishlist restore
            \Log::error($e->getMessage());
        }
    }

    return view('livewire.home-component', [
        'sliders' => $sliders,
        'lproducts' => $lproducts,
        'categories' => $categories,
        'no_of_products' => $no_of_products,
        'sproducts' => $sproducts,
        'sale' => $sale,
    ])->layout('layouts.base');
}

}

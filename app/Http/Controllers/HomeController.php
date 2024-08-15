<?php

namespace App\Http\Controllers;

use App\Http\Resources\Categories\CategoriesResources;
use App\Http\Resources\Products\ProductsResources;
use App\Models\Category;
use App\Models\Product;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        $popular = Product::where('is_active', true)
            ->orderBy('id', 'DESC')
            ->offset(0)
            ->limit(10);

        $categories = Category::all();

        return Inertia::render('Index', [
            'popular' => new ProductsResources($popular->get()),
            'categories' => new CategoriesResources($categories)
        ]);
    }
}

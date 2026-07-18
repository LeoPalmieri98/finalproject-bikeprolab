<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'brand'       => 'required|string|max:255',
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'size'        => 'nullable|string|max:255',
            'wheel'       => 'nullable|string|max:255',
            'material'    => 'nullable|string|max:255',
            'color'       => 'nullable|string|max:255',
            'brakes'      => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|',
        ]);

        $newProduct = new Product();

        $newProduct->category_id = $data["category_id"];
        $newProduct->brand = $data["brand"];
        $newProduct->name = $data["name"];
        $newProduct->price = $data["price"];
        $newProduct->size = $data["size"] ?? "N/D";
        $newProduct->wheel = $data["wheel"] ?? "N/D";
        $newProduct->material = $data["material"] ?? "N/D";
        $newProduct->color = $data["color"] ?? "N/D";
        $newProduct->brakes = $data["brakes"] ?? "N/D";
        $newProduct->description = $data["description"] ?? "Nessuna Descrizione";


        if (array_key_exists("image", $data)) {
            $img_url = Storage::disk('public')->putFile("uploads", $data["image"]);
            $newProduct->image = $img_url;
        }

        $newProduct->save();

        return redirect()->route('admin.products.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {


        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'brand'       => 'required|string|max:255',
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'size'        => 'nullable|string|max:255',
            'wheel'       => 'nullable|string|max:255',
            'material'    => 'nullable|string|max:255',
            'color'       => 'nullable|string|max:255',
            'brakes'      => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|',
        ]);

        $product->category_id = $data["category_id"];
        $product->brand = $data["brand"];
        $product->name = $data["name"];
        $product->price = $data["price"];
        $product->size = $data["size"] ?? "N/D";
        $product->wheel = $data["wheel"] ?? "N/D";
        $product->material = $data["material"] ?? "N/D";
        $product->color = $data["color"] ?? "N/D";
        $product->brakes = $data["brakes"] ?? "N/D";
        $product->description = $data["description"] ?? "Nessuna Descrizione";


        if (array_key_exists("image", $data)) {
            if ($product->image) {
                Storage::disk("public")->delete($product->image);
            }
            $img_url = Storage::disk('public')->putFile("uploads", $data["image"]);
            $product->image = $img_url;
        }

        $product->update();

        return redirect()->route('admin.products.show', $product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {

        if ($product->image) {
            Storage::disk("public")->delete($product->image);
        }
        $product->delete();

        return redirect()->route('admin.products.index');
    }
}

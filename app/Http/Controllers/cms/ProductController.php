<?php

namespace App\Http\Controllers\cms;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('backend.products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.products.show', compact('product'));
    }

    public function create()
    {
        return view('backend.products.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:190|min:3|string|unique:products,title',
            'description' => 'nullable|max:1500000|min:3',
            'image' => 'nullable|mimes:jpeg,png,jpg|max:1024',
        ]);

        $product = new Product();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = storage_path('app/public/images/products/');
            $filename = saveFile($file, $destinationPath);
            $product->image = $filename;
        }
        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->description = json_encode($request->description);
        if ($product->save()) {
            return redirect()->route('cms.product.index')->with(toast("Product Added Successfully", 'success'));
        } else {
            return redirect()->back()->with([
                "message" => "Something went wrong",
                "alert-type" => "error"
            ]);
        }
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:190|min:3|string|unique:products,title,' . $id,
            'description' => 'nullable|min:3|max:50000',
            'image' => 'nullable|mimes:jpeg,png,jpg|max:1024',
        ]);

        $product = Product::findOrFail($id);
        if ($request->hasFile('image')) {
            if (!Storage::exists('images/products/' . $product->image)) {
                Storage::disk('public')->delete('images/products/' . $product->image);
            }
            $file = $request->file('image');
            $destinationPath = storage_path('app/public/images/products/');
            $filename = saveFile($file, $destinationPath);
            $product->image = $filename;
        }
        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->description = json_encode($request->description);
        if ($product->save()) {
            return redirect()->route('cms.product.index')->with(
                [
                    "message" => "Product Updated Successfully",
                    "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->back()->with([
                "message" => "Something went wrong",
                "alert-type" => "error"
            ]);
        }
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        optional(Storage::disk('public')->delete('images/products/' . $product->image));
        if ($product->delete()) {
            return redirect()->route('cms.product.index')->with(
                [
                    "message" => "Product Deleted Successfully",
                    "alert-type" => "success"
                ]
            );
        } else {
            return redirect()->route('cms.product.index')->with(
                [
                    "message" => "Something Went Wrong",
                    "alert-type" => "error"
                ]
            );
        }
    }
}

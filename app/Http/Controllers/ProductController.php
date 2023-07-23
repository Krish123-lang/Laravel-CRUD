<?php

namespace App\Http\Controllers;

// importing something
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // return view('products.index');
        // For displaying Data in Table (INDEX PAGE) and get the latest item first
        return view('products.index', ['products' => Product::latest()->paginate(5)]);
    }

    public function create()
    {
        return view('products.create');
    }

    // Handling form data (image)
    public function store(Request $request)
    {
        // validate Data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        // dd($request->all()); => To get output in array

        // Moving image to public folder
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('products'), $imageName);
        // dd($imageName);

        // To insert into database
        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        return back()->withSuccess('Product Created !!!');
    }

    // For Editing
    public function edit($id)
    {
        // dd($id);
        $product = Product::where('id', $id)->first();
        return view('products.edit', ['product' => $product]);
    }

    // FOR UPDATING
    public function update(Request $request, $id)
    {
        // dd($request->all()); // Only for testing

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        $product = Product::where('id', $id)->first();

        if (isset($request->image)) {
            // Moving image to public folder
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }

        // To insert into database
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        // return back()->withSuccess('Product Updated !!!');

        // Redirect back to the index page with a success message
        return redirect()->route('index')->withSuccess('Product Updated !!!');
    }

    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();
        $product->delete();
        return back()->withSuccess('Product Deleted !!!');
    }

    // FOR SHOWING DETAILS
    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        return view('products.show', ['product' => $product]);
    }
}

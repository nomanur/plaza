<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        $input = [];

        $input = $request->except('image');

        if ($image = $request->file('image')) {
            $name = time() . '_' . $image->getClientOriginalName();

            $image->move('img', $name);
        }

        $input['image'] = $name;

        Product::create($input);

        return 'Product created successfully';
    }
}

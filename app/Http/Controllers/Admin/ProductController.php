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

        $input = $request->except('image', 'productimage1', 'productimage2', 'productimage3', 'productimage4', 'productimage5');

        if ($image = $request->file('image')) {
            $name = time() . '_' . $image->getClientOriginalName();

            $image->move('img', $name);
        }

        if ($image = $request->file('productimage1')) {
            $productimage1 = time() . '_' . $image->getClientOriginalName();

            $image->move('img', $productimage1);
        }

        if ($image = $request->file('productimage2')) {
            $productimage2 = time() . '_' . $image->getClientOriginalName();

            $image->move('img', $productimage2);
        }

        if ($image = $request->file('productimage3')) {
            $productimage3 = time() . '_' . $image->getClientOriginalName();

            $image->move('img', $name);
        }

        if ($image = $request->file('productimage4')) {
            $productimage4 = time() . '_' . $image->getClientOriginalName();

            $image->move('img', $name);
        }

        if ($image = $request->file('productimage5')) {
            $productimage5 = time() . '_' . $image->getClientOriginalName();

            $image->move('img', $name);
        }

        $input['image'] = $name;
        $input['productimage1'] = $productimage1;
        $input['productimage2'] = $productimage2;
        $input['productimage3'] = $productimage3;
        $input['productimage4'] = $productimage4;
        $input['productimage5'] = $productimage5;

        Product::create($input);

        return 'Product created successfully';
    }
}

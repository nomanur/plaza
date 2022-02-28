<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('front.home', compact('products'));
    }

    public function singleproduct($id)
    {
        $product = Product::findOrFail($id);

        return view('front.singleproduct', compact('product'));
    }

    public function addtocart($id)
    {
        if (Cart::where('product_id', $id)->where('user_id', auth()->user()->id)->exists()) {
            return 'Product already added to cart';
        }

        Cart::create([
            'product_id' => $id,
            'user_id' => auth()->user()->id
        ]);

        return back();
    }

    public function cart()
    {
        $cart = auth()->user()->cart;

        return view('front.cart', compact('cart'));
    }

    public function updatecart(Request $request)
    {
        foreach ($request->id as $i => $id) {
            $cart = Cart::findOrFail($id);
            $cart->update([
                'qty' => $request->qty[$i]
            ]);
        }

        return back();
    }

    public function clearcart(Request $request)
    {
        $cart = Cart::where('user_id', auth()->user()->id)->delete();

        return back();
    }

    public function api()
    {
        return User::all();
    }

    public function pay()
    {
        $stripe = new \Stripe\StripeClient('sk_test_w0lhFcBbRyKnGElG30vdZdsW');

        $pi = $stripe->paymentIntents->create([
            'amount' => 100.50 * 100,
            'currency' => 'bdt'
        ]);

        dd($pi);

        //pi_3KQrchAZAiR36FBd1ozMuB1G
    }

    public function confirmpayment()
    {
        $stripe = new \Stripe\StripeClient(
            'sk_test_w0lhFcBbRyKnGElG30vdZdsW'
        );
        $confirm = $stripe->paymentIntents->confirm(
            'pi_3KQrpCAZAiR36FBd3Gi8pos7',
            ['payment_method' => 'pm_card_visa']
        );

        dd($confirm);
        return 'payment success';
    }
}

<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function index()
    {
        // return view('index');
         return Inertia::render('Welcome');
    }
    public function checkout()
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Doname',
                    ],
                    'unit_amount' => 1000,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('success'),
        ]);

        return redirect()->away($session->url);
    }
    public function success()
    {
        return Inertia::render('Welcome');
    }
}

<?php

namespace App\Http\Controllers;


use App\Models\Price;
use App\Models\Contact;
use App\Models\PriceContent;
use Illuminate\Http\Request;


class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::all();
        $priceContent = PriceContent::all();
        return view('welcome', compact(
            [
                'prices',
                'priceContent'
            ]
        ));
    }
    public function submitOrder(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'pesan' => 'required|string|max:1000',
        ]);
        Contact::create($validated);
        return redirect()->to('/#contact')->with('success', 'Pesan berhasil dikirim!');
    }
}

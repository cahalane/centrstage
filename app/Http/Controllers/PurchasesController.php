<?php

namespace App\Http\Controllers;

use App\Stream;
use Illuminate\Http\Request;
use Stripe\{Charge, Customer};

class PurchasesController extends Controller
{
    public function store()
    {
        $stream = Stream::findOrFail(request('streamId'));

        $customer = Customer::create([
            'email' => request('stripeEmail'),
            'source' => request('stripeToken')
        ]);

        try {
         $charge = Charge::create([
            'customer' => $customer->id,
            'amount' => request('amount')*100,
            'currency' => 'eur',
            'description' => 'Donation to '.$stream->title.'.'
        ]);
        } catch (\Exception $e) {
            return response()->json(['status' => $e->getMessage()], 422);
        };
        
    }
}

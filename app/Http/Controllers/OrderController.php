<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function checkout(Request $request)
    {

        $validatedData = $request->validate([
            'qty_product' => 'required',
            'phone' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['user_id'] = 4;
        if ($request->type_tiket == '5000') {
            $validatedData['tipe_tiket'] = 'wisata';
        } else {
            $validatedData['tipe_tiket'] = '+kolamrenang';
        }
        $validatedData['total_price'] = $request->qty_product * $request->type_tiket;
        $validatedData['order_id'] = 'ORDER-' . uniqid();
        $validatedData['status'] = 'Unpaid';


        $order = Order::create($validatedData);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->order_id, // Menghasilkan ID pesanan yang unik
                'gross_amount' => $order->total_price,
            ),
            'customer_details' => array(
                'first_name' => auth()->user()->name,
                'last_name' => '',
                'phone' => $request->phone,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('order.checkout', [
            'snapToken' => $snapToken,
            'order' => $order,
            'title' => 'Wisata',
        ]);
    }

    public function midtransCallback(Request $request)
    {
        $server_key = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $server_key);

        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture' || $request->transaction_status == 'settlement') {
                $order = Order::where('order_id', $request->order_id)->first();

                if ($order) {
                    $order->update(['status' => 'Paid']);
                    $order->update(['published_at' => now()]);
                }
            }
        }
    }


    public function invoice(Order $invoice)
    {

        return view('order.invoice', [
            'invoice' => $invoice,
            'title' => 'Wisata',
        ]);
    }
}

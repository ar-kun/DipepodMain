<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function index()
    {
        if (!auth()->user()->is_admin) {

            $order = Order::where('user_id', auth()->user()->id)->first();

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
                    'phone' => $order->phone,
                ),
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);
            return view('dashboard', [
                // 'order'=> auth()->user()->orders()->where('status', '!=', 'success')->get()->where('status', '!=', 'success')->
                'orders' => Order::where('user_id', auth()->user()->id)->get(),
                'pengajuan' => Umkm::where('user_id', auth()->user()->id)->get(),
                'snapToken' => $snapToken,
            ]);
        }

        return view('dashboard', [
            'orders' => Order::where('user_id', auth()->user()->id)->get(),
            'pengajuan' => Umkm::where('user_id', auth()->user()->id)->get(),
        ]);
    }
}

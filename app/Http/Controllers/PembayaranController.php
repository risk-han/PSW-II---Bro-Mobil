<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;


class PembayaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        return view('pembayaran.index');
    }

    public function create()
    {
        return view('pembayaran.create');
    }

    public function store(Request $request, Payment $payment, Product $product)
    {
        $request->validate([
            'name' => 'required|min:3|max:155',
            'email' => 'required|email:rfc,dns',
            'lokasiawal' => 'required|min:3|max:40',
            'pesan'        => 'required',
            'lokasiakhir' => 'required|min:3|max:40',
            'tanggalawal' => 'required',
            'tanggalakhir' => 'required',
        ],
        [
            'name.required'             => 'Mohon isi nama anda',
            'name.min'                  => 'Jumlah karakter minimal untuk nama adalah 3',
            'name.max'                  => 'Jumlah karakter maksimal untuk nama adalah 155',
            'email.required'            => 'Mohon isi email anda',
            'email.email'               => 'Mohon isi email anda dengan format yang benar',
            'lokasiawal.required'      => 'Mohon tentukan lokasi penjemputan anda',
            'pesan.required'            => 'Mohon isi detail pesan anda',
            'lokasiawal.min'           => 'Mohon input lokasi penjemputan dengan benar',
            'lokasiawal.max'           => 'Mohon input lokasi penjemputan anda dengan benar',
            'lokasiakhir.min'           => 'Mohon input lokasi pengembalian anda dengan benar',
            'lokasiakhir.required'      => 'Mohon input lokasi pengembalian anda dengan benar',
            'lokasiakhir.max'           => 'Mohon input lokasi pengembalian anda dengan benar',
            'tanggalakhir.required'     => 'Mohon input tanggal peminjaman anda',
            'tanggalawal.required'     => 'Mohon input tanggal pengembalian anda',

        ]);

        $input = $request->all();
        $success = 'Pembayaran anda sudah disimpan';
        Payment::create($input);
        $payment = DB::table('payments')->latest('id')->first();
        return view('pembayaran.index', compact('product','payment', 'success'));
    }

    public function show(Payment $payment, Product $product)
    {
        $product = DB::table('products')->latest('id')->first();
        $payment = DB::table('payments')->latest('id')->first();
        return view('pembayaran.show', compact('product', 'payment'));
    }

    public function createPDF()
    {
        $product = DB::table('products')->latest('id')->first();
        $payment = DB::table('payments')->latest('id')->first();
        // return view()->share('pembayaran.show', compact('product', 'payment'));

        $pdf = PDF::loadView('pembayaran.pdf', compact(['product', 'payment']));
        // $pdf->stream();
        return $pdf->download('Detail-Pembayaran-BroMobil.pdf');
    }

}

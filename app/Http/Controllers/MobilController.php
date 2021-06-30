<?php
  
namespace App\Http\Controllers;
  
use App\Models\Product;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Product::sortable()->paginate(6);

        return view('mobils.index', compact('mobil'));
    }
    
    public function show(Product $mobil)
    {
        return view('mobils.show', compact('mobil'));
    }
}

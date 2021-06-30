<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\UserExport;
use Excel;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::sortable()->paginate(10);
        return view('users.index', compact('users'))
        ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
        ->with('success', 'User berhasil dihapus');
    }

    public function Search(Request $request)
    {
        $inputSearch = $request['inputSearch'];
        $keyResult = DB::table('users')
        ->where('name', 'LIKE', '%'.$inputSearch.'%')
        ->orWhere('email', 'LIKE', '%' .$inputSearch.'%')
        ->get(['name', 'email']);
        echo $keyResult;
    }

    public function exportIntoExcel()
    {
        return Excel::download(new UserExport, 'Daftar-User-Bromobil.xlsx');
    }
}

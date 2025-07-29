<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suplier;

class SuplierController extends Controller
{
    public function index()
    {
        $supliers = Suplier::all();
        return view('suplier.index', compact('supliers'));
    }

    public function create()
    {
        return view('suplier.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_suplier' => 'required',
            'nama_suplier' => 'required',
            'alamat_suplier' => 'required',
            'no_telp_suplier' => 'required',
        ]);

        Suplier::create($request->all());

        return redirect()->route('supliers.index')->with('success', 'Suplier created successfully.');
    }
}
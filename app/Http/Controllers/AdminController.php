<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Lapangan;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Tambah Data Lapangan
    public function tambahlapangan(){
        return view('admin.crud.createlapangan', [
        'lapangans' => Lapangan::all()
        ]);
    }
    public function storelapangan(Request $request){
        // Validate Input
        $validateData = $request->validate([
        'no_lap' => 'required|integer',
        'harga' => 'required|integer',
        ]);
        Lapangan::create($validateData);
        return redirect()->route('admin.lapangan')->with('success','Data
        Lapangan Berhasil Ditambahkan');
    }

    // Edit Data Lapangan
    public function editlapangan($id){
        return view('admin.crud.updatelapangan',[
        'lapangans' => Lapangan::all()->where('id', $id)->first(),
        ]);
    }
    public function updatelapangan(Request $request, $id){
        $request->validate([
            'no_lap' => 'required|integer',
            'harga' => 'required|integer',
        ]);
        $lapangan = Lapangan::findOrFail($id);
        $lapangan->update([
            'no_lap' => $request->no_lap,
            'harga' => $request->harga,
        ]);
        return redirect()->route('admin.lapangan')->with('success','Data Lapangan
        Berhasil Diubah');
    }

    // Hapus Data Lapangan
    public function deletelapangan($id){
        $lapangan = Lapangan::findOrFail($id);
        $lapangan->order()->delete();
        $lapangan->delete();
        return redirect()->route('admin.lapangan')->with('success','Data Lapangan
        Berhasil Dihapus');
    }

    // Tambah Data Order
    public function tambahorder(){
        return view('admin.crud.createorder', [
        'lapangans' => Lapangan::all(),
        'penggunas' => Pengguna::all()
        ]);
    }
    public function storeorder(Request $request){
        // Validate Input
        $validateData = $request->validate([
        'jam' => 'required|integer',
        'hari' => 'required|string',
        'durasi' => 'required|integer',
        'lapangan_id' => 'required',
        'pengguna_id' => 'required',
        ]);
        Order::create($validateData);
        return redirect()->route('admin.lapangan')->with('success','Data
        Order Berhasil Ditambahkan');
    }

    // Edit Data Order
    public function editorder($id){
        return view('admin.crud.updatelapangan',[
        'lapangans' => Order::all()->where('id', $id)->first(),
        ]);
    }
    public function updateorder(Request $request, $id){
        $request->validate([
            'no_lap' => 'required|integer',
            'harga' => 'required|integer',
        ]);
        $lapangan = Order::findOrFail($id);
        $lapangan->update([
            'no_lap' => $request->no_lap,
            'harga' => $request->harga,
        ]);
        return redirect()->route('admin.lapangan')->with('success','Data Order
        Berhasil Diubah');
    }

    // Hapus Data Order
    public function deleteorder($id){
        $lapangan = Order::findOrFail($id);
        $lapangan->order()->delete();
        $lapangan->delete();
        return redirect()->route('admin.lapangan')->with('success','Data Order
        Berhasil Dihapus');
    }
}

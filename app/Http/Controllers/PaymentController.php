<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {
        $pay = session()->get('id_akun');
        $beli = DB::table('membeli')
        ->join('barang', 'membeli.barang_id', '=', 'barang.id')
            ->join('akun', 'membeli.akun_id', '=', 'akun.id')
            ->where('akun_id','=', $id_akun)
            ->select('membeli.*', 'barang.harga_barang', 'barang.stok', 'barang.nama_barang')
            ->get();
        // dd($beli);
        $data = [
            'title' => 'Keranjang',
            'beli' => $beli,
        ];
        return view('/pages/keranjang', $data);
    }

    public function store(Request $request)
    {
        $id_space = $request->id_space;
        $space = Space::all()->find($id_space);
        DB::table('spaces')->where('id', $id_barang)->update(['stok' => $barang['stok'] - $jumlah]);

        Transaction::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->notelp,
            'tipe_durasi' => $request->tipe_durasi,
            'durasi' => $request->durasi,
            'tanggal' => $request->tanggal,
            'jumlah_orang' => $request->jumlah,
            'jenis_kegiatan' => $request->jenis,
        ]);
        return redirect('/booking')->with('success', 'Berhasil memesan');
    }
}

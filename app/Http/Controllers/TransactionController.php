<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\Space;
use App\Models\Payment;
use App\Models\Vouchers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
    	return redirect('booking');
    }

    public function trans(Request $request)
    {	$transaction=DB::table('transactions')->insertGetId([
            'id_space' => $request->id_space,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'tipe_durasi' => $request->tipe_durasi,
            'durasi' => $request->durasi,
            'tanggal' => $request->tanggal,
            'jumlah_orang' => $request->jumlah_orang,
            'jenis_kegiatan' => $request->jenis_kegiatan,
        ]);
        return redirect('/payment/'.$transaction);
    }

    public function paymentGet($id){
        // $payment = DB::table('payments')->where('id',$id)->first();
        // $transaction = DB::table('transactions')->where('id',$id)->first();
        // $space = DB::table('spaces')->where('id',$transaction->id_space)->first();
        // if($transaction->tipe_durasi === 'Jam'){
        //     $payment->harga = ($space->harga_jam)*($transaction->durasi);
        // } else if($transaction->tipe_durasi === 'Hari'){
        //     $payment->harga = ($space->harga_hari)*($transaction->durasi);
        // } else if($transaction->tipe_durasi === 'Minggu'){
        //     $payment->harga = ($space->harga_minggu)*($transaction->durasi);
        // }
        return view('pembayaran',['id_transaksi' => $id, '']);
    }

    public function payment($id)
    {
        $payment = DB::table('payments')->where('id',$id)->first();
        $transaction = DB::table('transactions')->where('id',$id)->first();
        $space = DB::table('spaces')->where('id',$transaction->id_space)->first();
        if(empty($cek_payment))
    	{
    		$payment = new Payment;
            $payment->id_transaction = $transaction->id;
            //$payment->id_voucher = $voucher->id;
            $payment->tipe_durasi = $transaction->tipe_durasi;
            $payment->durasi = $transaction->durasi;
            $payment->harga = $transaction->durasi;
            $payment->bukti_pembayaran = request()->input;
	    	$payment->save();
    	} 

        //$cek_voucher = Payment::where('id_voucher', $voucher->id);
    	//if($cek_voucher)
    	//{
    	//	$payment->harga = $voucher->voucher*$request->harga;
	    //	$payment->save();
    	//}
        //return view('payment/',['transactions' => $payment]);
        //input["namenya"]
        //input["bukti"]
        return redirect('/fin');
    }
}

<?php

namespace App\Http\Controllers;


use Midtrans;
use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class TransaksiController extends Controller
{
    
    public function index(){
       

        
        return view ('dashboard.index',[
            
            'title'=>'Dashboard | User'
            
        ]);
    }
    public function send(Request $request){
       
         
        return view ('dashboard.send.index',[
        
            'title'=>'Send | User'
            
        ]);
      
    }

    public function send_post(Request $request){
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-pnxT7mVr1WuOjMn05c7Py4SK';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;


        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $request->get('gross_ammout'),
            ),

            'item_details' =>array(

                [
                    'id'=>'a1',
                    'price'=>$request->get('gross_ammout'),
                    'quantity'=>'1',
                    'name'=>$request->get('nama'),
                ]
                ),

            'customer_details' => array(
                'first_name' =>Auth::user()->name,
                'email' => Auth::user()->email,
                
      ),
      
  );
  $snapToken=\Midtrans\Snap::getSnapToken($params);

  return view ('dashboard.send_post',[
        
    'snap_token'=>$snapToken,
    'title'=>'Bayar | User'
    
]);}
    public function pay_post(Request $request){
      
        $json = json_decode($request->get('json'));
        
        if(@$json->payment_type=='bank_transfer'){
            if($json->va_numbers){
                foreach($json->va_numbers as $row){
                    $bank = $row->bank;
                    $va_number = $row->va_number;
                    $billerCode = '';
  
                }
            }else{
                $bank = 'permata';
                $va_number = $json->permata_va_number;
                $billerCode = '';
            }
        }elseif ($json->payment_type == 'echannel'){
                $bank = 'mandiri';
                $va_number = $json->bill_key;
                $billerCode = $json->biller_code;
        }else{
            $bank = 'alfamart/indomart';
            $va_number = $json->payment_code;
            $billerCode = '';
        }
        
        $Transaksis = [
            'order_id'=> $json->order_id,
            'gross_amount'=>$json->gross_amount,
            'payment_type' =>$json->payment_type,
            'bank'=>$bank,
            'va_number'=>$va_number,
            'biller_code' =>$billerCode,
            'transaction_status'=>$json->transaction_status,
            'transaction_time' =>$json->transaction_time,
            'pdf_url' => $json->pdf_url,
            'name'=>Auth::user()->name,
            'email'=>Auth::user()->email,
            'id_user'=>Auth::user()->id,
            'status_code'=>$json->status_code
        ];
       
        Transaksi::create($Transaksis);
        $request->session()->flash('success','Pembayaran Berhasil di Input Silahkan Selesailkan Pembayaran !');
        return redirect('/dashboard/transaksi');
        }
    }

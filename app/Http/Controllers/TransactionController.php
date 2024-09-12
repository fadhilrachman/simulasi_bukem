<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //
    public function buyTicket(Request $request){
        $request->validate([
            'count' => 'required',
            'date' => 'required',
        ]);
        $user = Auth::user();
        $price=$request->count*10000;
        $data = new Transaction();
        $data->user_id = $user->id;
        $data->price=$price;
        $data->count=$request->count;
        $data->date=$request->date;

        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $price,
            )
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $data->snap_token=$snapToken;
        $data->save();
        return redirect()->route('checkout-ticket', ['id' => $data->id]);

    }

    public function getTicketById($id){
        $data = Transaction::find($id);
     
        return view('profile.checkout-transction',["data"=>$data]);
    }

    public function transactionSuccess($id){
        $user_id = Auth::user()->id;

        $data = Transaction::find($id);
        $data->status='success';
        $ticket = new Ticket();
        $ticket->date=$data->date;
        $ticket->count=$data->count;
        $ticket->user_id=$user_id;
        $ticket->qrcode=bin2hex(random_bytes(10)); ;

        $ticket->save();
        $data->save();
        return view('profile.transaction-success',["data"=>$data]);
    }

    public function getListTransaction(){
        $user_id=Auth::user()->id;
        $data = Transaction::where('user_id', $user_id)->get();
        return view('profile.transaction',["data"=>$data]);
    }

    public function getListTransactionAdmin(){
        $data = Transaction::paginate(10);
        return view('dashboard.transaction',["data"=>$data]);
    }
}

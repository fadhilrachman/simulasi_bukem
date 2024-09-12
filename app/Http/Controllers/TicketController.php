<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
class TicketController extends Controller
{
    //
    public function getListVisit(){
        $user_id=Auth::user()->id;

        $data= Ticket::where('user_id',$user_id)->orderBy('updated_at', 'desc')->paginate(10);
        return view('profile.history-visit',["data"=>$data]);
    }

    public function getListVisitAdmin(){

        $data= Ticket::orderBy('updated_at', 'desc')->paginate(10);
        return view('dashboard.visit',["data"=>$data]);
    }

    public function getQrcode($id){
        $data = Ticket::find($id);
        // dd($data);
        return view('profile.qrcode-ticket',['id'=>$id,'data'=>$data]);
    }
    
    public function downloadTicket($id)
    {
        $data = Ticket::findOrFail($id);

          // Generate QR Code dalam bentuk PNG
          $qrCodeImage = QrCode::format('png')->size(300)->generate($data->qrcode);

          // Mengirimkan QR code sebagai file download
          return Response::make($qrCodeImage, 200, [
              'Content-Type' => 'image/png',
              'Content-Disposition' => 'attachment; filename="qrcode-tiket-' . $id . '.png"'
          ]);
    }

    public function scanQr(Request $request){
        $data = Ticket::where('qrcode',$request->qr_code)->first();

        $target_date = Carbon::parse($data->date);
        $today = Carbon::today('Asia/Jakarta');

        $now = Carbon::now('Asia/Jakarta');
        $hours = $now->format('H:i'); // Jam dalam format 24 jam

        // dd($hours);
        // dd($today->format('H:i'));
        if($data->status=='non_active') return 'Tiket ini sudah digunakan dan tidak lagi aktif';
        if($target_date->isPast($today)) return 'Tiket ini sudah kedaluwarsa, tidak dapat menggunakan tiket ini lagi';
        // if($target_date->greaterThan($today)) return 'Tiket ini hanya dapat digunakan pada tanggal yang telah ditentukan, Silakan tunggu hingga tanggal yang sesuai';

        $data->status = 'non_active';
        $data->entry_time=$hours;
        $data->save();

        return 200;

    }
}

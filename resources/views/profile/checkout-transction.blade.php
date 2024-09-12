<x-layout-detail>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <div class="container mt-4">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card border-light shadow-sm">
            <div class="card-body text-center">
              <h5 class="card-title mb-4">Detail Transaksi</h5>
              <p class="card-text mb-2">Jumlah Tiket: <strong>{{ $data->count }}</strong></p>
              <p class="card-text mb-2">Total Harga: <strong>{{ $data->count * $data->price }}</strong></p>
              <p class="card-text mb-4">Tanggal: <strong>{{ \Carbon\Carbon::parse($data->date)->format('d F Y') }}</strong></p>
              <div class="d-flex justify-content-center">
                <button type="button" id="pay-button" class="btn btn-warning ">Bayar Sekarang</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
      
       {{-- SNAP MIDTRANS --}}
       <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
       <script type="text/javascript">
           document.getElementById('pay-button').onclick = function(){
             // SnapToken acquired from previous step
             snap.pay('{{ $data->snap_token }}', {
               // Optional
               onSuccess: function(result){
                console.log('SUKSES TRANSAKSI');
                window.location.href='{{ route('success.transaction',['id'=>$data->id]) }}';
                
                 /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
               },
               // Optional
               onPending: function(result){
                 /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
               },
               // Optional
               onError: function(result){
                 /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
               }
             });
           };
         </script>
   
</x-layout-detail>
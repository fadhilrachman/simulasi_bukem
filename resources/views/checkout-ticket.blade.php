<x-landing-page>
    <div class="site-section px-5">
        {{-- <form action="transaction/process" method="POST">
            @csrf
            <input type="number" class="form-control" name="count"/>
        </form> --}}
        <button  class="btn btn-primary" id="pay-button">Bayar</button>

    </div>

       {{-- SNAP MIDTRANS --}}
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
   
</x-landing-page>   
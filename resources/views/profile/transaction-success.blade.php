<x-layout-profile>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <x-title>Detail Transaksi</x-title>
    <div class="alert alert-primary" role="alert">
        Transaksi Berhasil
      </div>
    <div class="container mt-4">
        <div class="card  border mx-auto" style="box-shadow: none; max-width: 300px;">
          <div class="card-body align-center">
            <h5 class="card-title">Detail Transaksi</h5>
            <p class="card-text">Jumlah Tiket: <strong>{{ $data->count }}</strong></p>
            <p class="card-text">Total Harga: <strong>{{ $data->count*$data->price }}</strong></p>
            <p class="card-text">Tanggal: <strong>11 September 2024</strong></p>
          
          </div>
        </div>
      </div>
      
   
</x-layout-profile>
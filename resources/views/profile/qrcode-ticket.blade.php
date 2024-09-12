<x-layout-detail>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card text-center shadow-lg p-2">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Tiket Wisata Buken</h5>
                        <p class="card-text">Ini adalah tiketmu untuk masuk Wisata Buken pada tanggal:</p>
                        <p class="font-weight-bold text-primary">{{ \Carbon\Carbon::parse($data->date)->format('d F Y') }}</p>
                        <div class="my-4">
                            <!-- Menambahkan class img-fluid agar QR code responsive -->
                            <div style="max-width: 300px; margin: 0 auto;">
                                {!! SimpleSoftwareIO\QrCode\Facades\QrCode::size(130)->generate($data->qrcode) !!}
                            </div>
                        </div>
                        <p class="text-muted">Tunjukkan QR code ini saat memasuki area wisata.</p>
                        <a href="{{ route('download.ticket', $data->id) }}" class="btn btn-primary mt-3">Unduh Tiket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-detail>

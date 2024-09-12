<x-landing-page>
    <div class="site-section px-5 py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0 text-center">Pembelian Tiket</h4>
                        </div>
                        <div class="card-body">
                            <form action="transaction/process" method="POST">
                                @csrf
                                <!-- Input Jumlah Tiket -->
                                <div class="form-group">
                                    <label for="count">Jumlah Tiket</label>
                                    <input type="number" id="count" name="count" class="form-control" placeholder="Masukkan jumlah tiket" required>
                                    @error('count')
                                    <p style="color: red">{{ $message }}</p>
                                  @enderror
                                </div>

                                <!-- Input Tanggal -->
                                <div class="form-group">
                                    <label for="date">Tanggal Pemesanan</label>
                                    <input type="date" id="date" name="date" class="form-control" required>
                                    @error('date')
                                    <p style="color: red">{{ $message }}</p>
                                  @enderror
                                </div>

                                <!-- Tombol Submit -->
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Beli Tiket</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-landing-page>

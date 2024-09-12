<x-layout-admin>
  <div class="d-flex justify-content-between align-items-center w-full">
    <x-title>History Kunjungan</x-title>
  <a class="btn btn-primary" href="/scan">Scan Qr</a>

  </div>
  <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Tanggal</th>
            <th>Jam Masuk</th>
            <th>Jumlah Tiket</th>
            <th>Status</th>
            {{-- <th>Aksi</th> --}}
          </tr>
        </thead>
        <tbody>
          @foreach ($data  as $no=> $val )
              
        
          <tr>
            <td>{{ $no+1 }}</td>
            <td>
              {{ \Carbon\Carbon::parse($val->date)->format('d F Y') }}
            </td>
            <td>{{ $val->entry_time }}</td>
            <td>{{ $val->count }}</td>
            <td>   @if($val->status == 'non_active')
              <label class="badge badge-success">Sudah Berkunjung</label>
          @else
              <label class="badge badge-warning">Belum Berkunjung</label>
          @endif</td>
            {{-- <td>  
              <a class="btn btn-primary" href="qrcode/{{ $val->id }}">Lihat Qrcode</a>
          </td> --}}
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-end mt-2">
        {{ $data->links() }}
      
            </div>
    </div>
</x-layout-admin>
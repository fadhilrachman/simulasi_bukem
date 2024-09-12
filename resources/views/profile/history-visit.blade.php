<x-layout-profile>
    <x-title>History Visit</x-title>
    <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Tanggal</th>
              <th>Jam Masuk</th>
              <th>Jumlah Tiket</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data  as $no=> $data )
                
          
            <tr>
              <td>{{ $no+1 }}</td>
              <td>
                {{ \Carbon\Carbon::parse($data->date)->format('d F Y') }}
              </td>
              <td>{{ $data->entry_time }}</td>
              <td>{{ $data->count }}</td>
              <td>   @if($data->status == 'non_active')
                <label class="badge badge-warning">Sudah Dipakai</label>
            @else
                <label class="badge badge-success">Belum Dipakai</label>
            @endif</td>
              <td>  
                <a class="btn btn-primary" href="qrcode/{{ $data->id }}">Lihat Qrcode</a>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</x-layout-profile>
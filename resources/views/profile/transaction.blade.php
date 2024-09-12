<x-layout-profile>
    <x-title>List Transaksi</x-title>
    <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Tanggal</th>
              <th>Jumlah Tiket</th>
              <th>Total Harga</th>
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
              <td>{{ $data->count }}</td>
              <td>{{ $data->count*$data->price }}</td>
              <td>   @if($data->status == 'pending')
                <label class="badge badge-warning">{{ $data->status }}</label>
            @else
                <label class="badge badge-success">{{ $data->status }}</label>
            @endif</td>
              <td>   @if($data->status == 'pending')
                <a class="btn btn-warning" href="/transaction/checkout/{{ $data->id }}">
                    Bayar
                </a>
                @else
              -
            @endif</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</x-layout-profile>
<x-layout-admin>
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
          </tr>
        </thead>
        <tbody>
          @foreach ($data  as $no=> $val )
              
        
          <tr>
            <td>{{ $no+1 }}</td>
            <td>
              {{ \Carbon\Carbon::parse($val->date)->format('d F Y') }}
            </td>
            <td>{{ $val->count }}</td>
            <td>{{ $val->count*$val->price }}</td>
            <td>   @if($val->status == 'pending')
              <label class="badge badge-warning">{{ $val->status }}</label>
          @else
              <label class="badge badge-success">{{ $val->status }}</label>
          @endif</td>
            {{-- <td>   @if($data->status == 'pending')
              <a class="btn btn-warning" href="/transaction/checkout/{{ $data->id }}">
                  Bayar
              </a>
              @else
            -
          @endif</td> --}}
          </tr>
          @endforeach
        </tbody>
      </table>
       
      <div class="d-flex justify-content-end mt-2">
  {{ $data->links() }}

      </div>
    </div>
</x-layout-admin>
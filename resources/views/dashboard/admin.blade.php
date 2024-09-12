
<x-layout-admin>
    <div class="d-flex justify-content-between align-items-center w-full">
        <x-title>Admin</x-title>
      <a class="btn btn-primary" href="/admin-create">Create Admin</a>
  
      </div>
    <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data  as $no=> $data )
                
          
            <tr>
              <td>{{ $no+1 }}</td>
              <td>{{ $data->name }}</td>
              <td>{{ $data->email }}</td>
              <td><label class="badge badge-danger">Pending</label></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</x-layout-admin>
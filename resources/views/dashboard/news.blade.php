<x-layout-admin>
  <div class="d-flex justify-content-between align-items-center w-full mb-4">
      <x-title>Berita</x-title>
      <a class="btn btn-primary" href="/dashboard/news-create">Buat Berita</a>
  </div>

  <div class="container">
    <div class="row">
      <!-- Artikel 1 -->
      @foreach ($data as $val )
      <div class="col-md-4 mb-4">
        <div class="card" >
          <div class="card-body">
            <h5 class="card-title">{{ $val->title }}</h5>
            <p class="card-text text-muted">Tanggal: {{ \Carbon\Carbon::parse($val->created_at)->format('d F Y') }}</p>
            <p class="card-text"> {!! Str::limit(strip_tags($val->news), 150, '...')  !!}</p>
            <a href="/dashboard/news/{{ $val->id }}" class="btn btn-warning btn-sm">Edit</a>
            <a href="/news/1" class="btn btn-danger btn-sm">Hapus</a>
          </div>
        </div>
      </div>
      @endforeach
 

     

    </div>
  </div>
</x-layout-admin>

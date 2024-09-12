<x-landing-page>
<div class="site-section">
    <div class="container">
        <h2>{{ $data->title }}</h2>
        <span class="meta d-inline-block mb-3">{{ \Carbon\Carbon::parse($data->created_at)->format('d F Y') }}<span class="mx-2">by</span> <a href="#">Admin</a></span>
        <p> {!! Str::limit(strip_tags($data->news), 150, '...')  !!}</p>
    </div>

</div>
</x-landing-page>
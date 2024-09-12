<x-layout-admin>
  <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.css" />
    <x-title>Edit Berita</x-title>
    <form class="container " method="POST" action="{{ route('news.createNews') }}" style="">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Judul Berita</label>
            <input type="text" value="{{ $data->title }}" class="form-control" name="title" >
          </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Berita</label>
        {{-- <input type="text" class="form-control" name="news"> --}}
        <textarea name="news"  id="editor" cols="30" rows="10">{{ $data->news }}</textarea>
      </div>
    
    
      <button class="btn btn-primary">Submit</button>
    </form>


    <script src="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.umd.js"></script>
    <script>
      const {
          ClassicEditor,
          Essentials,
          Bold,
          Italic,
          Font,
          Paragraph
      } = CKEDITOR;
  
      ClassicEditor
          .create( document.querySelector( '#editor' ), {
              plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
              toolbar: [
                  'undo', 'redo', '|', 'bold', 'italic', '|',
                  'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
              ]
          } )
          .then( /* ... */ )
          .catch( /* ... */ );
  </script>
</x-layout-admin>
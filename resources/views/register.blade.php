<x-layout-auth>
  <form class="container card card-body"
  style="max-width: 400px; margin: auto; margin-top: 150px" 
  action="register" method="POST"
  style="margin-top: 80px">
  @csrf
    <h3>Buat Akun</h3>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('name')
        <p style="color: red">{{ $message }}</p>
      @enderror
      </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat email</label>
    <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
        <p style="color: red">{{ $message }}</p>
      @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"name="password" id="exampleInputPassword1">
    @error('password')
        <p style="color: red">{{ $message }}</p>
      @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Konfirmasi Password</label>
    <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1">
    @error('password_confirmation')
        <p style="color: red">{{ $message }}</p>
      @enderror
  </div>
  <p>Sudah Punya Akun? <a href="/login">Masuk</a></p>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-layout-auth>
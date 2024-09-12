<x-layout-auth>
  <form class=" card card-body ;" style="max-width: 400px; margin: auto; margin-top: 200px" action="/login" method="POST" style="margin-top: 80px;">
    @csrf
    <h3>Masuk</h3>
   
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
    <p style="color: red">{{ $message }}</p>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    @error('password')
    <p style="color: red">{{ $message }}</p>
  @enderror
  </div>
  <p>Belum Punya Akun? <a href="/register">Daftar</a></p>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-layout-auth>
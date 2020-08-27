<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar" style="background-color: #ffc400;">
        <div class="container text-center" style="color: white;">
          <a href="/">Crud Akrademy</a>
        </div>
    </nav>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container">
        <form method="POST" action="{{ route('upload') }}">
            @csrf
            <div class="row my-3">
              <div class="col">
                <input type="text" class="form-control" placeholder="Nama Produk" name="nama_produk" value="{{ old('nama_produk') }}">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" value="{{ old('keterangan') }}">
              </div>
            </div>
            <div class="row">
                <div class="col">
                  <input type="number" class="form-control" placeholder="Harga" name="harga" value="{{ old('harga') }}">
                </div>
                <div class="col">
                  <input type="number" class="form-control" placeholder="Jumlah" name="jumlah" value="{{ old('jumlah') }}">
                </div>
              </div>
              <div class="text-right my-2">
                <button class="col-sm-2 btn btn-primary" type="submit">Apply</button>
              </div>
          </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
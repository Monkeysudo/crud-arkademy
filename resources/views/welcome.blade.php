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
    <div class="container">
        <a href="{{ route('create') }}" class="btn btn-primary text-center my-3">Tambah Produk</a>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
                @forelse ($items as $item)
                 <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>
                       <a href="{{ route('edit', $item->id) }}" class="btn btn-info">
                         Edit
                       </a>
       
                       <form action="{{ route('delete', $item->id) }}" method="POST" class="d-inline">
                         @csrf
                         @method('delete')
                         <button class="btn btn-danger">
                           Delete
                         </button>
                       </form>
                     </td>
                 </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            <a href="{{ route('create') }}" class="btn btn-primary text-center">Tambah Produk</a>
                        </td>
                    </tr>
                @endforelse
        </table>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
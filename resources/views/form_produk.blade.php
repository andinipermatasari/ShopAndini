<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-mb-3">
                <label for="" class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="{{ $produks->nama_produk }}" placeholder="Masukkan Nama Produk">
            </div>
            <div class="col-mb-3">
                <label for="" class="form-label">Harga Produk</label>
                <input type="text" name="harga_produk" id="harga_produk" class="form-control" value="{{ $produks->harga_produk }}" placeholder="Masukkan Harga Produk">
            </div>
            <div class="col-mb-3">
                <label for="" class="form-label">Foto</label>
                <input type="file" name="foto" id="foto" placeholder="Masukan Foto">
            </div>
            <div class="col-mb-3">
                <label for="" class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $produks->deskripsi }}" placeholder="Masukan Deskripsi">
            </div>
            <div class="pt-3">
                <input type="submit" value="{{ $tombol }}" class="form-control btn text-white" style="background-color:#748DA6;">
            </div>
        </div>
    </form>  
</body>
</html>
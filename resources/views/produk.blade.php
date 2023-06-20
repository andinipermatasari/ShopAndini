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
    <form action="{{ url('/produk/cari') }}" method="get">
        <input type="search" name="cari" id="cari" value="{{$cari}}">
        <input type="submit" value="cari">
    </form>
    @csrf
    <a href="{{ url('/produk/add') }}">Tambah Produk</a>
    <table class="table table-hover table-bordered table-striped">
        <tr>
            <td>NO</td>
            <td>NAMA PRODUK</td>
            <td>HARGA PRODUK</td>
            <td>FOTO</td>
            <td>DESKRIPSI</td>
            <td>AKSI</td>
        </tr>
        @foreach ($produks as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->nama_produk }}</td>
                <td>{{ $item->harga_produk }}</td>
                <td>
                    <img src="storage/{{ $item->foto }}" alt="" width="100">
                </td>
                <td>{{ $item->deskripsi }}</td>
                <td>
                    <a href="/produk/hapus/{{ $item->id_produk }}"onclick="return window.confirm('hapus data ini?')">HAPUS</a>
                    <a href="/produk/edit/{{ $item->id_produk }}">EDIT</a>
                </td>
            </tr>
        @endforeach
    </table>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
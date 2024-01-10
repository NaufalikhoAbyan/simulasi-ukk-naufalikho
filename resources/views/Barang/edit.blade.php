<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Simulasi UKK</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/kategori">Kategori</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/barang">Barang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/barangmasuk">Barang Masuk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/barangkeluar">Barang Keluar</a>
            </li>
        </ul>
    </div>
</nav>
<form action={{route('barang.update', $data->id)}} method="POST">
    @csrf
    @method('put')
    @if ($errors->any())
        <div class="text-red-500">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <label for="merk">Merk</label>
    <input type="text" name="merk" id="merk" class="form-control" value="{{$data->merk}}">

    <label for="seri">Seri</label>
    <input type="text" name="seri" id="seri" class="form-control" value="{{$data->seri}}">

    <label for="spesifikasi">Spesifikasi</label>
    <input type="text" name="spesifikasi" id="spesifikasi" class="form-control" value="{{$data->spesifikasi}}">

    <label for="stok">Stok</label>
    <input type="text" name="stok" id="stok" class="form-control" value="{{$data->stok}}">

    <label for="kategori_id">Kategori</label>
    <select name="kategori_id" id="kategori_id" class="form-control">
        @foreach ($pilihan as $item)
            <option value={{$item->id}} {{$data->kategori_id == $item->id ? 'selected' : ''}}>{{$item->deskripsi}} ({{$item->kategori}})</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

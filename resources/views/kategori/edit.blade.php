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
<form action={{route('kategori.update', $data->id)}} method="POST">
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
    <div class="form-group">
        <label for="Deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{$data->deskripsi}}">
    </div>
    <label for="kategori">Kategori</label>
    <select name="kategori" id="kategori" class="form-control form-control">
        <option value="M" {{$data->kategori == "M" ? 'selected' : ''}}>Modal</option>
        <option value="A" {{$data->kategori == "A" ? 'selected' : ''}}>Alat</option>
        <option value="BHP" {{$data->kategori == "BHP" ? 'selected' : ''}}>Bahan Habis Pakai</option>
        <option value="BTHP" {{$data->kategori == "BTHP" ? 'selected' : ''}}>Bahan Tidak Habis Pakai</option>
    </select>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

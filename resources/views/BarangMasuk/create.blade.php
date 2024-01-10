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
<form action={{route('barangmasuk.store')}} method="POST">
    @csrf
    @if ($errors->any())
        <div class="text-red-500">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <input type="text" name="tgl_masuk" class="border rounded p-1 w-full" style="display:none" value={{now()}}>

    <label for="qty_masuk">Kuantitas Masuk</label>
    <input type="text" name="qty_masuk" id="qty_masuk" class="form-control" >

    <label for="barang_id">Barang</label>
    <select name="barang_id" id="barang_id" class="form-control">
        @foreach ($barang as $item)
            <option value={{$item->id}}>{{$item->merk}} ({{$item->seri}})</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

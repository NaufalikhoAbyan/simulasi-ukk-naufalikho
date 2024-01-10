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
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Tanggal Keluar</th>
        <th scope="col">Kuantitas Keluar</th>
        <th scope="col">Barang</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->tgl_keluar}}</td>
            <td>{{$item->qty_keluar}}</td>
            <td>
                @foreach ($barang as $barangItem)
                    {{$barangItem->id == $item->barang_id ? $barangItem->merk. " " .$barangItem->seri : ''}}
                @endforeach
            </td>
            <td><a href="/barangkeluar/{{$item->id}}">Show</a> <a href="/barangkeluar/{{$item->id}}/edit">Edit</a>
                <form action={{route('barangkeluar.destroy', $item->id)}} method='POST'>
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="/barangkeluar/create">Tambah Data</a>
</body>
</html>

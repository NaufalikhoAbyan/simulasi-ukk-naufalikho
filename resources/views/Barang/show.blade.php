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
        <th scope="col">Merk</th>
        <th scope="col">Seri</th>
        <th scope="col">Spesifikasi</th>
        <th scope="col">Stok</th>
        <th scope="col">Kategori ID</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->merk}}</td>
            <td>{{$data->seri}}</td>
            <td>{{$data->spesifikasi}}</td>
            <td>{{$data->stok}}</td>
            <td>{{$data->kategori_id}}</td>
        </tr>
    </tbody>
</table>
</body>
</html>

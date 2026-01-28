<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - Sistem Inventaris Aset</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand">Dashboard Admin</span>

        <form action="/logout" method="POST">
            @csrf
            <button class="btn btn-light btn-sm">Logout</button>
        </form>
    </div>
</nav>

<div class="container mt-4">

    <h4 class="mb-4">Ringkasan Inventaris Aset</h4>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h6>Total Aset</h6>
                    <h2>{{ $totalAset }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h6>Aset Kondisi Baik</h6>
                    <h2 class="text-success">{{ $asetBaik }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h6>Aset Rusak</h6>
                    <h2 class="text-danger">{{ $asetRusak }}</h2>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <div class="d-flex gap-2">
        <a href="/aset" class="btn btn-primary">Kelola Aset</a>
        <a href="#" class="btn btn-secondary">Laporan Inventaris</a>
    </div>

</div>

</body>
</html>


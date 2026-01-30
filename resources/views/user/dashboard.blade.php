<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Pimpinan</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }
        header {
            background-color: #1e3a8a;
            color: white;
            padding: 16px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .container {
            padding: 30px;
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }
        .card {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,.1);
        }
        .card h2 {
            margin: 0;
            font-size: 32px;
            color: #1e3a8a;
        }
        .card p {
            margin-top: 10px;
            color: #555;
        }
        button {
            background: #ef4444;
            border: none;
            padding: 8px 14px;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<header>
    <strong>Dashboard Pimpinan</strong>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</header>

<div class="container">
    <div class="cards">
        <div class="card">
            <h2>{{ $totalAset }}</h2>
            <p>Total Aset Perusahaan</p>
        </div>

        <div class="card">
            <h2>{{ $asetBaik }}</h2>
            <p>Aset Kondisi Baik</p>
        </div>

        <div class="card">
            <h2>{{ $asetRusak }}</h2>
            <p>Aset Kondisi Rusak</p>
        </div>
    </div>
</div>

</body>
</html>


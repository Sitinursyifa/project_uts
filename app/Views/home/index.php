<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            background-color: #f9f9f9; /* Ubah warna latar belakang */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Ubah font */
            padding-top: 50px;
            margin: 0;
            width: 100%;
            overflow-x: hidden; /* Mengatasi scroll horizontal */
        }

        h1 {
            color: #4CAF50; /* Ubah warna judul */
        }

        .info {
            background-color: #4CAF50;
            color: white;
            padding: 10px; /* Ubah padding */
            text-align: center;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .info h2 {
            font-size: 24px; /* Ubah ukuran font */
            margin-bottom: 10px; /* Tambah jarak ke bawah */
        }

        .info p {
            font-size: 16px; /* Ubah ukuran font */
            margin: 0; /* Hapus margin */
        }

        .dashboard {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .btn {
            background-color: #4CAF50; 
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 10px;
            transition: background-color 0.3s, box-shadow 0.3s; /* Efek transisi */
        }

        .btn:hover {
            background-color: #45a049; /* Ubah warna saat dihover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambah bayangan */
        }

        .btn-dosen {
            background-color: #4CAF50;
        }

        .btn-petugas {
            background-color: #008CBA;
        }
    </style>
</head>
<body>
    <div class="info">
        <h2> Universitas Syifa</h2>
        <p>Universitas Syifa adalah sebuah institusi pendidikan tinggi. Kami menawarkan berbagai program studi berkualitas untuk mempersiapkan mahasiswa menjadi pemimpin masa depan.</p>
    </div>
    
    <div class="dashboard">
        <div class="card">
            <h2> Dosen</h2>
            <p>Data Dosen Universitas Syifa</p>
            <a href="<?= base_url('dosen') ?>" class="btn btn-dosen">Lihat Data Dosen</a>
        </div>
        <div class="card">
            <h2> Petugas</h2>
            <p>Data Staff Universitas Syifa.</p>
            <a href="<?= base_url('petugas') ?>" class="btn btn-petugas">Lihat Data Petugas</a>
        </div>
    </div>
</body>
</html>

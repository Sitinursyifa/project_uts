<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Petugas Universitas</title>
    <style>
        body {
            background-color: #f0f0f0; /* Ubah warna latar belakang */
            color: #333; /* Ubah warna teks */
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; /* Tengahkan konten vertikal */
            min-height: 100vh; /* Buat konten penuh tinggi layar */
        }

        h1 {
            color: #4caf50; /* Ubah warna judul */
            margin-bottom: 20px; /* Ubah margin */
            font-size: 24px; /* Ubah ukuran font */
        }

        .dashboard {
            width: 90%; /* Lebar dashboard */
            max-width: 800px; /* Batasi lebar maksimum */
            background-color: #fff; /* Warna latar belakang dashboard */
            border-radius: 10px; /* Tambah sudut bulat */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambah bayangan */
            padding: 20px; /* Tambah padding */
            overflow-x: auto; /* Aktifkan scroll horizontal jika perlu */
        }

        table {
            width: 100%; /* Buat tabel penuh lebar */
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd; /* Ubah warna border */
            padding: 12px; /* Tambah padding */
            text-align: center;
        }

        th {
            background-color: #4caf50; /* Ubah warna latar belakang header */
            color: #fff; 
            border-radius: 4px 4px 0 0; /* Tambah sudut bulat pada header */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #4caf50; /* Ubah warna tautan */
        }

        .btn {
            background-color: #4caf50; 
            color: #fff; 
            padding: 8px 16px; /* Ubah padding */
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            margin-right: 5px; /* Ubah margin */
            display: inline-block;
            font-size: 14px; /* Ubah ukuran font */
        }

        .btn:hover {
            background-color: #45a049; 
        }
        
        .btnhome {
            background-color: #333; 
            color: #fff; 
            padding: 8px 16px; /* Ubah padding */
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block; 
            font-size: 14px; /* Ubah ukuran font */
        }
        
        .btnhome:hover {
            background-color: #555; 
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Petugas Universitas</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($petugas as $item): ?>
                <tr>
                    <td><?= $item['nama'] ?></td>
                    <td><?= $item['posisi'] ?></td>
                    <td><?= $item['alamat'] ?></td>
                    <td>
                        <a href="<?= base_url('petugas/edit/'.$item['id_petugas']) ?>">Edit</a>
                        <a href="<?= base_url('petugas/delete/'.$item['id_petugas']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="btn-container">
            <a href="<?= base_url('petugas/create') ?>" class="btn">Tambah Petugas</a><br>
            <!-- Tombol menuju halaman Home -->
            <a href="<?= base_url() ?>" class="btnhome">Home</a>
        </div>
    </div>
</body>
</html>

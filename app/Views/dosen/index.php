<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Dosen</title>
    <style>
        body {
            background-color: #f5f5f5; 
            color: #333; 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            margin-top: 20px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white; 
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            margin-right: 10px;
        }

        .btn {
            background-color: #4CAF50; 
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        
        .btnhome {
            background-color: #FFC107; 
            color: #333;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn:hover, .btnhome:hover {
            background-color: #45a049; 
        }

        .btnhome:hover {
            background-color: #FFD740; 
        }

        .btn-container {
            margin-top: 20px;
        }

        .container {
            width: 80%;
            max-width: 1200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>List Dosen</h1>
        <table>
            <thead>
                <tr>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Mata Kuliah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dosen as $item): ?>
                <tr>
                    <td><?= $item['nidn'] ?></td>
                    <td><?= $item['nama'] ?></td>
                    <td><?= $item['alamat'] ?></td>
                    <td><?= $item['matkul'] ?></td>
                    <td>
                        <a href="<?= base_url('dosen/edit/'.$item['id_dosen']) ?>">Edit</a>
                        <a href="<?= base_url('dosen/delete/'.$item['id_dosen']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="btn-container">
            <a href="<?= base_url('dosen/create') ?>" class="btn">Tambah Dosen</a>
            <!-- Link to Home -->
            <a href="<?= base_url('index.php') ?>" class="btnhome">Home</a>
        </div>
    </div>
</body>
</html>

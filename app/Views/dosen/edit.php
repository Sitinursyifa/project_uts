<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f0f0f0;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"],
        .btn-batal {
            width: 48%;
            padding: 10px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            display: inline-block;
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        input[type="submit"] {
            background-color: #4CAF50;
        }

        .btn-batal {
            background-color: #f44336;
        }

        input[type="submit"]:hover,
        .btn-batal:hover {
            background-color: #45a049;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Edit Dosen</h1>
    <?php if (session()->has('errors')) : ?>
        <div style="color: red;">
            <?php foreach (session('errors') as $error) : ?>
                <?= $error ?><br>
            <?php endforeach ?>
        </div>
    <?php endif ?>

    <?php if (session()->has('success')) : ?>
        <div style="color: green;">
            <?= session('success') ?>
        </div>
    <?php endif ?>

    <?php if (session()->has('error')) : ?>
        <div style="color: red;">
            <?= session('error') ?>
        </div>
    <?php endif ?>

    <form action="<?= base_url('dosen/update/' . $dosen['id_dosen']) ?>" method="post"> <!-- Menambahkan ID dosen ke URL -->
        <label for="nidn">NIDN:</label>
        <input type="text" id="nidn" name="nidn" value="<?= $dosen['nidn'] ?>" required>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?= $dosen['nama'] ?>" required>
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="<?= $dosen['alamat'] ?>" required>
        <label for="matkul">Mata Kuliah:</label>
        <input type="text" id="matkul" name="matkul" value="<?= $dosen['matkul'] ?>" required>
        <div class="btn-container">
            <input type="submit" value="Simpan">
            <a href="<?= base_url('/dosen') ?>" class="btn-batal">Batal</a>
        </div>
    </form>
</body>
</html>

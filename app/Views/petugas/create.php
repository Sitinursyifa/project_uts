<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah petugas kampus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9; /* Warna latar belakang lebih cerah */
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #ffffff; /* Warna latar belakang kontainer */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Lebih menonjolkan bayangan */
        }
        
        h1 {
            text-align: center;
            color: #333333; /* Warna teks yang lebih gelap */
        }
        
        form {
            margin-top: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555555; /* Warna teks label yang lebih lembut */
        }
        
        input[type="text"] {
            width: calc(100% - 12px);
            padding: 8px;
            border: 1px solid #cccccc; /* Warna border input yang lebih lembut */
            border-radius: 4px;
            color: #333333; /* Warna teks input yang lebih gelap */
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .btn-batal {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #ff3333; /* Warna tombol batal yang lebih terang */
            color: #ffffff;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-batal:hover {
            background-color: #dd3333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah petugas universitas</h1>
        <form action="<?= base_url('petugas/store') ?>" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <label for="posisi">posisi:</label>
            <input type="text" id="posisi" name="posisi">
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat">
            <input type="submit" value="Simpan">
            <a href="<?= base_url('/petugas') ?>" class="btn-batal">Batal</a>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .container {
            width: 100%;
            max-width: 400px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
        }
        
        form {
            margin-top: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555555;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            color: #333333;
            margin-bottom: 20px;
            box-sizing: border-box;
        }
        
        input[type="submit"],
        .btn-batal {
            width: 49%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
            display: inline-block;
            text-decoration: none;
            color: white;
            font-weight: bold;
            margin-top: 10px;
        }
        
        input[type="submit"] {
            background-color: #4caf50;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .btn-batal {
            background-color: #ff3333;
        }

        .btn-batal:hover {
            background-color: #dd3333;
        }

        /* Clearfix to ensure proper alignment */
        .btn-container::after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah dosen</h1>
        <form action="<?= base_url('dosen/store') ?>" method="post">
            <label for="nidn">NIDN:</label>
            <input type="text" id="nidn" name="nidn" required>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>
            <label for="matkul">Mata Kuliah:</label>
            <input type="text" id="matkul" name="matkul" required>
            <div class="btn-container">
                <input type="submit" value="Simpan">
                <a href="<?= base_url('/dosen') ?>" class="btn-batal">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>

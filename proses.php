<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input Formulir</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffeef6;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            color: #e75480;
            margin-top: 30px;
        }
        .container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            padding: 25px 35px;
            width: 90%;
            max-width: 400px;
            margin-top: 20px;
            text-align: left;
            animation: fadeIn 0.7s ease-in-out;
        }
        .container p {
            font-size: 16px;
            margin: 10px 0;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        .back-btn {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background-color: #e75480;
            padding: 10px 20px;
            border-radius: 25px;
            transition: background 0.3s;
        }
        .back-btn:hover {
            background-color: #ff8ba0;
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>
    <h1>Hasil Input Formulir</h1>

    <div class="container">
        <?php
        // Ambil data dari form
        $nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
        $alamat = isset($_POST['alamat']) ? htmlspecialchars($_POST['alamat']) : '';
        $tanggal_lahir = isset($_POST['tanggal_lahir']) ? htmlspecialchars($_POST['tanggal_lahir']) : '';
        $jenis_kelamin = isset($_POST['jenis_kelamin']) ? htmlspecialchars($_POST['jenis_kelamin']) : '';

        if (empty($nama) || empty($alamat) || empty($tanggal_lahir) || empty($jenis_kelamin)) {
            echo "<p class='error'>Semua data harus diisi!</p>";
        } else {
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>Alamat:</strong> $alamat</p>";
            echo "<p><strong>Tanggal Lahir:</strong> $tanggal_lahir</p>";
            echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
        }
        ?>
        <a href="form.html" class="back-btn"> Kembali ke Formulir</a>
    </div>
</body>
</html>

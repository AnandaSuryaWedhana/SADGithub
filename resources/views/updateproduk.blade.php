<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/entryproduk.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="title">Update Produk</div>
        <form action="#">
            <div class="produk">
                 <div class="input-box">
                     <span class="details">Id Produk</span>
                     <input type="text" placeholder="auto-fill" disabled>
                 </div>
                 <div class="input-box">
                    <span class="details">Nama Produk</span>
                    <input type="text" placeholder="Lemari Kecil" required>
                </div>
                <div class="input-box">
                    <span class="details">Deskripsi Produk</span>
                    <input type="text" placeholder="deskripsi lemari kecil" required>
                </div>
                <div class="input-box">
                    <span class="details">Harga Produk</span>
                    <input type="text" placeholder="50000000" required>
                </div>
                <div class="input-box">
                    <span class="details">Jumlah Pembelian</span>
                    <input type="number" placeholder="3" required>
                </div>
                <div class="input-box">
                    <span class="details">Foto Produk</span>
                    <input type="file" placeholder="15.png" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>

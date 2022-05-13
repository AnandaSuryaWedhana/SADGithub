<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/entrytransaksi.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="title">Entry Produk</div><!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="entrytransaksi.css">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>

            <div class="container">
                <div class="title">Update Transaksi</div>
                <form action="#">
                    <div class="pembelian">
                         <div class="input-box">
                             <span class="details">Id Transaksi</span>
                             <input type="text" placeholder="auto-fill" disabled>
                         </div>
                         <div class="input-box">
                            <span class="details">Id Pembeli</span>
                            <input type="text" placeholder="pravangasta" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Tanggal Transaksi</span>
                            <input type="date" value="26-09-2022" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Produk</span>
                            <input type="text" placeholder="Kitchen Set" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Deskripsi Produk</span>
                            <input type="" placeholder="Deskripsi Kitchen set" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Jumlah Produk</span>
                            <input type="number" placeholder="3" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Harga</span>
                            <input type="text" placeholder="10000000" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Jumlah Total Produk</span>
                            <input type="text" placeholder="3" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Total Transaksi</span>
                            <input type="text" placeholder="30000000" required>
                        </div>
                        <div class="pembayaran-details">
                            <span class="status-pembayaran">Status Pembayaran</span>
                             <div class="category">
                                <div class="label">
                                    Status Pembayaran
                                 </div>
                                 <select>
                                    <option>Sudah Lunas</option>
                                    <option>Belum Lunas</option>

                                 </select>
                                <!-- <label for="">
                                    <span class="dot one"></span>
                                    <span class="status-sekarang">Lunas</span>
                                </label>
                                <label for="">
                                    <span class="dot one"></span>
                                    <span class="status-sekarang">Belum Lunas</span>
                                </label>  -->
                            </div>
                        </div>

                    </div>
                    <div class="button">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </body>
        </html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container1 {
            width: 45%;
        }
        .slide{
            width: 100%
        }
    </style>
</head>
<body>
    @include('partials.partialnavbarmarketing')
    <div class="container mt-4" style="display: flex">
            <div class="container1">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="photo/nakasphoto.jpg" class="d-block rounded" style="width : 100%" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="photo/nakasphoto.jpg" class="d-block rounded" style="width : 100%" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="photo/nakasphoto.jpg" class="d-block rounded" style="width : 100%" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="space" style="width:5%"></div>
            <div class="container2" style="width: 50%">
                <div class="col-12">
                    <label for="inputName" class="form-label">Nama Produk : </label>
                    <input type="text" class="form-control" value="Nakas 70 X 50 X 50" aria-label="readonly input example" readonly/>
                </div>
                <div class="mb-3 mt-2">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk : </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="8" aria-label="readonly input example" readonly></textarea>
                </div>
                <div class="col-12">
                    <label for="inputName" class="form-label">Harga Produk : </label>
                    <input type="text" class="form-control" value="8" aria-label="readonly input example" readonly/>
                </div>
                <div class="col-12 mt-3">
                    <label for="inputName" class="form-label">Jumlah Transaksi Produk : </label>
                    <input type="text"  class="form-control" value="8" aria-label="readonly input example" readonly/>
                </div>
            </div>
    </div>
</body>
</html>

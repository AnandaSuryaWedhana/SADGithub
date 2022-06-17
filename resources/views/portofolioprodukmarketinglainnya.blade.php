<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    @include('partials.partialnavbarmarketing')
    <div class="container mt-4">
        <h1 class="text-center">{{ $name }}</h1>
        <form method="get">
            <div class="separatediv" style="display: flex; width:100%">
                <input class="form-control" name="cariproduk" type="text" placeholder="Mencari Nama Produk" aria-label="default input example">
            </div>
        </form>
    </div>
    <div class="container1 mt-4 mb-4">
        <div class="container row" style="width: 90%; margin:auto">
                @foreach ($list as $d)
                <div class="card rounded" style="width: 18rem; margin:10px">
                    <img src="\{{ $d->FOTO_PRODUK }}" class="card-img-top" alt="Nakas">
                    <div class="card-body">
                    <h5 class="card-title">{{ $d->NAMA_PRODUK }}</h5>
                    <p class="card-text">{{ $d->DESKRIPSI_PRODUK }}</p>
                    <a href="/detailportofolioprodukmarketing/{{ $d->ID_PRODUK }}" class="btn btn-primary">Lebih Lengkap</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center">{!! $list->appends(Request::except('page'))->render() !!}</div>
</body>
</html>

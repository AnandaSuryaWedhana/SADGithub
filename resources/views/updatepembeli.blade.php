<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title }} </title>
    <link rel="stylesheet" href="css/entrypembeli.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>
<body>
    @include('partials.partialnavbar')
    <div class="container bg-light" style="padding:20px; border-radius:10px; border:0.1px solid rgb(201, 201, 201)">
        <h1 class="text-center">Ubah Pembeli</h1>
    <form action="" method="post">
      <label for="exampleFormControlInput1" class="form-label">Nama Pembeli :</label>
      <input class="form-control" value="mickey" type="text" placeholder="Nama Customer" aria-label="default input example" required/>
      <div class="col-12" style="padding-top: 10px">
        <label for="inputAddress" class="form-label">Alamat : </label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required/>
      </div>
      <div class="seperatediv" style="margin-top: 10px">
        <div class="col-md-6" style="width: 70%">
          <label for="inputAddress" class="form-label">Nomor Telpon :</label>
          <input type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
        </div>
        <div class="space" style="width: 5%"></div>
        <div class="mb-3" style="width: 25%">
          <label for="exampleFormControlInput1" class="form-label">Jumlah Transaksi :</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" required/>
        </div>
      </div>
      <div class="col-12 text-center">
        <button class="btn btn-primary" type="submit">Ubah!</button>
      </div>
    </form>
    </div>
</body>
</html>

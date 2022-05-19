<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="updatedeletetransaksi.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>{{ $title }}</title>
  </head>
  <body>
      @include('partials.partialnavbar')
      <div class="container-fluid mt-5" style="width: 100%">
        <h1 class="text-center">Update & Delete Produk</h1>
      <div class="table-responsive mt-4">

        <!--Table-->
        <table class="table table-striped table-hover ">

          <!--Table head-->
          <thead>
            <tr class="text-center">
              <th>Number</th>
              <th class="th-lg">Id Produk</th>
              <th class="th-lg">Nama Produk</th>
              <th class="th-lg">Kategori</th>
              <th class="th-lg">Deskripsi Produk</th>
              <th class="th-lg">Harga Produk</th>
              <th class="th-lg">Link Foto Produk</th>
              <th class="th-lg">Jumlah Produk Transaksi</th>
              <th class="th-lg">Edit Produk</th>
              </th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
            <tr class="align-middle text-center">
                <th scope="row">1</th>
                <td>PD001</td>
                <td>Dipan : 180 X 30 X 200</td>
                <td>Dipan</td>
                <td> Dipan : 180 X 30 X 200 Menggunakan bahan multipleks</td>
                <td>5000000</td>
                <td>-</td>
                <td>1</td>
                <td>
                  <a href="/updateproduk"><button type="button" class="btn btn-info">Edit</button></a>
                  <a href="/deleteproduk"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            <tr class="align-middle text-center">
                <th scope="row">2</th>
                <td>PD001</td>
                <td>Dipan : 180 X 30 X 200</td>
                <td>Dipan</td>
                <td> Dipan : 180 X 30 X 200 Menggunakan bahan multipleks</td>
                <td>5000000</td>
                <td>-</td>
                <td>1</td>
                <td>
                  <a href="/updateproduk"><button type="button" class="btn btn-info">Edit</button></a>
                  <a href="/deleteproduk"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            <tr class="align-middle text-center">
                <th scope="row">3</th>
                <td>PD001</td>
                <td>Dipan : 180 X 30 X 200</td>
                <td>Dipan</td>
                <td> Dipan : 180 X 30 X 200 Menggunakan bahan multipleks</td>
                <td>5000000</td>
                <td>-</td>
                <td>1</td>
                <td>
                  <a href="/updateproduk"><button type="button" class="btn btn-info">Edit</button></a>
                  <a href="/deleteproduk"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            <tr class="align-middle text-center">
                <th scope="row">4</th>
                <td>PD001</td>
                <td>Dipan : 180 X 30 X 200</td>
                <td>Dipan</td>
                <td> Dipan : 180 X 30 X 200 Menggunakan bahan multipleks</td>
                <td>5000000</td>
                <td>-</td>
                <td>1</td>
                <td>
                  <a href="/updateproduk"><button type="button" class="btn btn-info">Edit</button></a>
                  <a href="/deleteproduk"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            <tr class="align-middle text-center">
                <th scope="row">5</th>
                <td>PD001</td>
                <td>Dipan : 180 X 30 X 200</td>
                <td>Dipan</td>
                <td> Dipan : 180 X 30 X 200 Menggunakan bahan multipleks</td>
                <td>5000000</td>
                <td>-</td>
                <td>1</td>
                <td>
                  <a href="/updateproduk"><button type="button" class="btn btn-info">Edit</button></a>
                  <a href="/deleteproduk"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            <tr class="align-middle text-center">
                <th scope="row">6</th>
                <td>PD001</td>
                <td>Dipan : 180 X 30 X 200</td>
                <td>Dipan</td>
                <td> Dipan : 180 X 30 X 200 Menggunakan bahan multipleks</td>
                <td>5000000</td>
                <td>-</td>
                <td>1</td>
                <td>
                  <a href="/updateproduk"><button type="button" class="btn btn-info">Edit</button></a>
                  <a href="/deleteproduk"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
          </tbody>


        </table>


      </div>
    </div>
  </body>
</html>

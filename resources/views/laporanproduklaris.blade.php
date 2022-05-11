<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    @include('partials.partialnavbar')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Laporan Produk Laris</h1>

        <!--Table-->
        <table class="table table-striped table-hover ">

          <!--Table head-->
          <thead>
            <tr class="text-center">
              <th>ID Produk</th>
              <th class="th-lg">Kategori</th>
              <th class="th-lg">Nama Produk</th>
              <th class="th-lg">Deskripsi Produk</th>
              <th class="th-lg">Harga Produk</th>
              <th class="th-lg">Jumlah Transaksi</th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
            <tr class="align-middle text-center">
              <th scope="row">1</th>
              <td>Lorem ipsum dolor</td>
              <td >xxx</td>
              <td >xxx</td>
              <td >xxx</td>
              <td >xxx</td>
            </tr>
            <tr class="align-middle text-center">
                <th scope="row">2</th>
                <td>Lorem ipsum dolor</td>
                <td >xxx</td>
                <td >xxx</td>
                <td >xxx</td>
                <td >xxx</td>
              </tr>
              <tr class="align-middle text-center">
                <th scope="row">3</th>
                <td>Lorem ipsum dolor</td>
                <td >xxx</td>
                <td >xxx</td>
                <td >xxx</td>
                <td >xxx</td>
              </tr>
              <tr class="align-middle text-center">
                <th scope="row">4</th>
                <td>Lorem ipsum dolor</td>
                <td >xxx</td>
                <td >xxx</td>
                <td >xxx</td>
                <td >xxx</td>
              </tr>
              <tr class="align-middle text-center">
                <th scope="row">5</th>
                <td>Lorem ipsum dolor</td>
                <td >xxx</td>
                <td >xxx</td>
                <td >xxx</td>
                <td >xxx</td>
              </tr>
          </tbody>


        </table>
      </div>
    </div>
  </body>
</html>

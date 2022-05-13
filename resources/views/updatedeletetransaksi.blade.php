<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/updatedeletetransaksi.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>{{ $title }}</title>
  </head>
  <body>
      @include('partials.partialnavbar')
    <div class="container mt-5">
        <h1 class="text-center">Update & Delete Transaksi</h1>
      <div class="table-responsive mt-4">

        <!--Table-->
        <table class="table table-striped table-hover ">

          <!--Table head-->
          <thead>
            <tr class="text-center">
              <th>Number</th>
              <th class="th-lg">Id Transaksi</th>
              <th class="th-lg">Tanggal Transaksi</th>
              <th class="th-lg">Nama Pembeli</th>
              <th class="th-lg">Total Transaksi
              <th class="th-lg">Status Transaksi</th>
              <th class="th-lg">Edit Transaksi</th>
              </th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
            <tr class="align-middle text-center">
                <th scope="row">1</th>
                <td>T130422001</td>
                <td>2022-04-13</td>
                <td>Brama Andika</td>
                <td>1500000</td>
                <td >SUDAH LUNAS</a></td>
                <td>
                  <a href="/updatetransaksi"><button type="button" class="btn btn-info">Edit</button></a>
                  <a href="/deletetransaksi"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
            <tr class="align-middle text-center">
              <th scope="row">2</th>
              <td>T140422006</td>
              <td>2022-04-14</td>
              <td>PRAVANGASTA SUIHANGYA</td>
              <td>14750000</td>
              <td >SUDAH LUNAS</td>
              <td>
                <a href="/updatetransaksi"><button type="button" class="btn btn-info">Edit</button></a>
                <a href="/deletetransaksi"><button type="button" class="btn btn-danger">Delete</button></a>
              </td>
            </tr>
            <tr class="align-middle text-center">
                <th scope="row">3</th>
                <td>Lorem ipsum dolor</td>
                <td>Lorem ipsum dolor</td>
                <td>Lorem ipsum dolor</td>
                <td>Lorem ipsum dolor</td>
                <td >Lor</td>
                <td>
                  <a href="/updatetransaksi"><button type="button" class="btn btn-info">Edit</button></a>
                  <a href="/deletetransaksi"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
              <tr class="align-middle text-center">
                <th scope="row">4</th>
                <td>Lorem ipsum dolor</td>
                <td>Lorem ipsum dolor</td>
                <td>Lorem ipsum dolor</td>
                <td>Lorem ipsum dolor</td>
                <td >Lor</td>
                <td>
                  <a href="/updatetransaksi"><button type="button" class="btn btn-info">Edit</button></a>
                  <a href="/deletetransaksi"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
              <tr class="align-middle text-center">
                <th scope="row">5</th>
                <td>Lorem ipsum dolor</td>
                <td>Lorem ipsum dolor</td>
                <td>Lorem ipsum dolor</td>
                <td>Lorem ipsum dolor</td>
                <td >Lor</td>
                <td>
                  <a href="/updatetransaksi"><button type="button" class="btn btn-info">Edit</button></a>
                  <a href="/deletetransaksi"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
              <tr class="align-middle text-center">
                <th scope="row">6</th>
                <td>Lorem ipsum dolor</td>
                <td>Lorem ipsum dolor</td>
                <td>Lorem ipsum dolor</td>
                <td>Lorem ipsum dolor</td>
                <td >Lor</td>
                <td>
                  <a href="/updatetransaksi"><button type="button" class="btn btn-info">Edit</button></a>
                  <a href="/deletetransaksi"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
          </tbody>


        </table>


      </div>
    </div>
  </body>
</html>

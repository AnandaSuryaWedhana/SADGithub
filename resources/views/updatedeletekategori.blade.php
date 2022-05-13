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
    <div class="container mt-5">
        <h1 class="text-center">Update & Delete Kategori</h1>
      <div class="table-responsive mt-4">

        <!--Table-->
        <table class="table table-striped table-hover ">

          <!--Table head-->
          <thead>
            <tr class="text-center">
              <th>Number</th>
              <th class="th-lg">Id Kategori</th>
              <th class="th-lg">Nama Kategori</th>
              <th class="th-lg">Deskripsi Kategori</th>
              <th class="th-lg">Edit Transaksi</th>
              </th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
            <tr class="align-middle text-center">
                <th scope="row">1</th>
                <td>KP001</td>
                <td>Kitchen Set</td>
                <td>Peralatan dapur dengan desain yang cantik dan elegan</td>
                <td>
                  <a href="/updatekategori"><button type="button" class="btn btn-info">Edit</button></a>
                  <a href="/deletekategori"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            <tr class="align-middle text-center">
                <th scope="row">2</th>
                <td>KP001</td>
                <td>Kitchen Set</td>
                <td>Peralatan dapur dengan desain yang cantik dan elegan</td>
                <td>
                    <a href="/updatekategori"><button type="button" class="btn btn-info">Edit</button></a>
                    <a href="/deletekategori"><button type="button" class="btn btn-danger">Delete</button></a>
                  </td>
              </tr>
              <tr class="align-middle text-center">
                <th scope="row">3</th>
                <td>KP001</td>
                <td>Kitchen Set</td>
                <td>Peralatan dapur dengan desain yang cantik dan elegan</td>
                <td>
                    <a href="/updatekategori"><button type="button" class="btn btn-info">Edit</button></a>
                    <a href="/deletekategori"><button type="button" class="btn btn-danger">Delete</button></a>
                  </td>
              </tr>
              <tr class="align-middle text-center">
                <th scope="row">4</th>
                <td>KP001</td>
                <td>Kitchen Set</td>
                <td>Peralatan dapur dengan desain yang cantik dan elegan</td>
                <td>
                    <a href="/updatekategori"><button type="button" class="btn btn-info">Edit</button></a>
                    <a href="/deletekategori"><button type="button" class="btn btn-danger">Delete</button></a>
                  </td>
              </tr>
              <tr class="align-middle text-center">
                <th scope="row">5</th>
                <td>KP001</td>
                <td>Kitchen Set</td>
                <td>Peralatan dapur dengan desain yang cantik dan elegan</td>
                <td>
                    <a href="/updatekategori"><button type="button" class="btn btn-info">Edit</button></a>
                    <a href="/deletekategori"><button type="button" class="btn btn-danger">Delete</button></a>
                  </td>
              </tr>
              <tr class="align-middle text-center">
                <th scope="row">6</th>
                <td>KP001</td>
                <td>Kitchen Set</td>
                <td>Peralatan dapur dengan desain yang cantik dan elegan</td>
                <td>
                    <a href="/updatekategori"><button type="button" class="btn btn-info">Edit</button></a>
                    <a href="/deletekategori"><button type="button" class="btn btn-danger">Delete</button></a>
                  </td>
              </tr>

          </tbody>


        </table>


      </div>
    </div>
  </body>
</html>

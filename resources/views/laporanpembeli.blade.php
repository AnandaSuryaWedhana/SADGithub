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
        <h1 class="text-center">laporan pembeli</h1>
      <div class="table-responsive mt-4">

        <!--Table-->
        <table class="table table-striped table-hover ">

          <!--Table head-->
          <thead>
            <tr class="text-center">
              <th>Number</th>
              <th class="th-lg">Id Pembeli</th>
              <th class="th-lg">Nama Pembeli</th>
              <th class="th-lg">Alamat Pembeli</th>
              <th class="th-lg">Telepon Pembeli</th>
              <th class="th-lg">Jumlah Produk Transaksi</th>
              
              
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
            <tr class="align-middle text-center">
                <th scope="row">1</th>
                <td>CA0001</td>
                <td>A. A. N Wedhana</td>
                <td>Green Hill j1-07</td>
                <td>081216810126</td>
                <td>0</td>
                
            </tr>
            <tr class="align-middle text-center">
                <th scope="row">2</th>
                <td>CA0001</td>
                <td>A. A. N Wedhana</td>
                <td>Green Hill j1-07</td>
                <td>081216810126</td>
                <td>0</td>
                
            </tr>
            <tr class="align-middle text-center">
                <th scope="row">3</th>
                <td>CA0001</td>
                <td>A. A. N Wedhana</td>
                <td>Green Hill j1-07</td>
                <td>081216810126</td>
                <td>0</td>
                
            </tr>
            <tr class="align-middle text-center">
                <th scope="row">4</th>
                <td>CA0001</td>
                <td>A. A. N Wedhana</td>
                <td>Green Hill j1-07</td>
                <td>081216810126</td>
                <td>0</td>
                
            </tr>
            <tr class="align-middle text-center">
                <th scope="row">5</th>
                <td>CA0001</td>
                <td>A. A. N Wedhana</td>
                <td>Green Hill j1-07</td>
                <td>081216810126</td>
                <td>0</td>
                
            </tr>
            <tr class="align-middle text-center">
                <th scope="row">6</th>
                <td>CA0001</td>
                <td>A. A. N Wedhana</td>
                <td>Green Hill j1-07</td>
                <td>081216810126</td>
                <td>0</td>
                
            </tr>
            
          </tbody>


        </table>


      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

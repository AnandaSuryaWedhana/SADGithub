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
    <div class="container">
      <div class="table-responsive">

        <!--Table-->
        <table class="table table-striped table-hover ">

          <!--Table head-->
          <thead>
            <tr class="text-center">
              <th>Number</th>
              <th class="th-lg">Username</th>
              <th class="th-lg">Password</th>
              <th class="th-lg">Action</th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
            <tr class="align-middle text-center">
              <th scope="row">1</th>
              <td>Lorem ipsum dolor</td>
              <td >Lor</td>
              <td>
                <a href="#"><button type="button" class="btn btn-info">Edit</button></a>
                <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
              </td>
            </tr>
            <tr class="align-middle text-center">
              <th scope="row">1</th>
              <td>Lorem ipsum dolor</td>
              <td >Lor</td>
              <td>
                <button type="button" class="btn btn-info">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
              </td>
            </tr>
            <tr class="align-middle text-center">
              <th scope="row">1</th>
              <td>Lorem ipsum dolor</td>
              <td >Lor</td>
              <td>
                <button type="button" class="btn btn-info">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
              </td>
            </tr>
          </tbody>


        </table>


      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

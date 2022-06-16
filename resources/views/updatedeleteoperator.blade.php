<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <title>{{ $title }}</title>
  </head>
  <body>
      @include('partials.partialnavbar')
    <div class="container mt-5">
        <h1 class="text-center">Update & Delete Operator</h1>
        @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (Session::get('successupdate'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('successupdate') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (Session::get('fail'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('fail') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
        {{-- <form method="get">
            <div class="form-group row mb-4 mt-4">
              <label for="exampleDataList" class="col-sm-2 col-form-label">Cari Data :</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="searchside" autofocus="true" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." value="{{ $inputdata }}">
              </div>
            </div>
          </form> --}}
      <div class="table-responsive mt-4">

        <!--Table-->
        <table class="table table-striped table-hover" id="operatortable">

          <!--Table head-->
          <thead>
            <tr>
              <th>ID Operator</th>
              <th class="th-lg">Username</th>
              <th class="th-lg">Role</th>
              <th class="th-lg align-middle text-center" >Action</th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
            @foreach ($list as $item)
            <tr>
                <th scope="row">{{ $item->ID_USER }}</th>
                <td>{{ $item->USERNAME }}</td>
                <td >{{ $item->ROLE }}</td>
                <td class="align-middle text-center">
                  <a href="/editoperator/{{ $item->ID_USER }}"><button type="button" class="btn btn-info">Edit</button></a>
                  <a href="/deleteoperator/{{ $item->ID_USER }}"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{-- <div class="d-flex justify-content-center">{!! $list->appends(Request::except('page'))->render() !!}</div> --}}
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
   <script>
       $(document).ready( function () {
        $('#operatortable').DataTable();
        } );
   </script>
  </body>
</html>

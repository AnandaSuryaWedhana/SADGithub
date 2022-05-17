<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> {{ $title }} </title>
    <link rel="stylesheet" href="signup.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  </head>
  <body>
    @include('partials.partialnavbar')
    <div class="container bg-light" style="padding:20px; border-radius:10px; border:0.1px solid rgb(201, 201, 201); margin-top:10px">
        <h1 class="text-center">Ubah Operator</h1>

      <form action="" method="post">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Username</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $data[0]->USERNAME }}"/>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Kata Sandi</label>
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" value="{{ $data[0]->PASSWORD }}"/>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Role</label>
          <select class="form-select" aria-label="Default select example">
            <option value="{{ $data[0]->ROLE }}" disabled selected>{{ $data[0]->ROLE }}</option>
            <option value="Marketing">Marketing</option>
            <option value="Pemilik">Accountant</option>
            <option value="Admin">Admin</option>
            <option></option>
          </select>
        </div>
        <div class="col-12 text-center">
          <button class="btn btn-primary" type="submit">Ubah!</button>
        </div>
      </form>
    </div>
  </body>
</html>

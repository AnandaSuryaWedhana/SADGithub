<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="signup.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  </head>
  <body style="background: linear-gradient(120deg,rgb(248, 233, 166),#fcb462);">
    @include('partials.partialnavbar')
    <div class="container bg-light" style="padding:20px; border-radius:10px; border:0.1px solid rgb(201, 201, 201); margin-top:10px">
        <h1 class="text-center">Menambah Operator</h1>
        @if (Session::get('fail'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ Session::get('fail') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
      <form action="/entryoperator" method="post">
          @csrf
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Username</label>
          <input type="text" name="Username" class="form-control" id="exampleFormControlInput1"  value="{{ old('Username') }}"/>
          <span style="color: red">@error('Username'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Kata Sandi</label>
          <input type="password" name="Password" class="form-control" id="floatingPassword" placeholder="Password"  value="{{ old('Password') }}"/>
          <span style="color: red">@error('Password'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Role</label>
          <select class="form-select" name="role" aria-label="Default select example">
            <option value="Marketing">Marketing</option>
            <option value="Accountant">Accountant</option>
            <option value="Receptionist">Receptionist</option>
          </select>
        </div>
        <div class="col-12 text-center">
          <button class="btn btn-primary" type="submit">Simpan!</button>
        </div>
      </form>
    </div>
  </body>
</html>

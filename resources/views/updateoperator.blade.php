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

      <form action="/updateoperator/{{ $data->ID_USER }}" method="post">
        @csrf
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Username</label>
          <input type="text" name="Username" class="form-control" id="exampleFormControlInput1" value="{{ $data->USERNAME }}"/>
          <span style="color: red">@error('Username'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Kata Sandi</label>
          <input type="password" name="Password" class="form-control" id="floatingPassword" placeholder="Password" value="{{ $data->PASSWORD }}"/>
          <span style="color: red">@error('Password'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Konfirmasi Kata Sandi</label>
        <input type="password" name="PasswordConfirmation" class="form-control" id="floatingPassword" placeholder="Konfirmasi Password"/>
        <span style="color: red">@error('PasswordConfirmation'){{ $message }}@enderror</span>
          </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Role</label>
          <select class="form-select" name="role" aria-label="Default select example">
            <option value="{{ $data->ROLE }}" selected>{{ $data->ROLE }}</option>
            @foreach ($role as $d)
                <option value="{{ $d->ROLE }}">{{ $d->ROLE }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-12 text-center">
          <button class="btn btn-primary" type="submit">Ubah!</button>
        </div>
      </form>
    </div>
  </body>
</html>

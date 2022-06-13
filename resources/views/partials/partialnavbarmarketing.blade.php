<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(189, 156, 116)">
        <div class="container-fluid">
          <a class="navbar-brand align-middle" href="/">Eling Furniture</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ ($title === "portofolioprodukmarketing" or $title === "detailportofolioprodukmarketing" or $title === "portofolioprodukmarketinglainnya") ? "active" : "" }}" style="margin-right : 10px" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Produk
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="/portofolioprodukmarketing">Produk lengkap</a></li>
                          <li><a class="dropdown-item" href="/portofolioprodukmarketinglainnya/nakas">Nakas</a></li>
                          <li><a class="dropdown-item" href="/portofolioprodukmarketinglainnya/dipan">Dipan</a></li>
                          <li><a class="dropdown-item" href="/portofolioprodukmarketinglainnya/kitchenset">Kitchen Set</a></li>
                          <li><a class="dropdown-item" href="/portofolioprodukmarketinglainnya/mejabelajar">Meja Belajar</a></li>
                          <li><a class="dropdown-item" href="/portofolioprodukmarketinglainnya/lemari">Lemari</a></li>
                          <li><a class="dropdown-item" href="/portofolioprodukmarketinglainnya/displaytv">Display TV</a></li>
                          <li><a class="dropdown-item" href="/portofolioprodukmarketinglainnya/mejarias">Meja Rias</a></li>
                          <li><a class="dropdown-item" href="/portofolioprodukmarketinglainnya/cermin">Cermin</a></li>
                        </ul>
                    </li>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link disabled" style="color: whitesmoke">Hai, {{ session('user') }}</a>
            </li>
                <li class="nav-item">
                    <button class="btn btn-outline-warning me-2" type="button">Log Out</button>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

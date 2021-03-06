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
          <a class="navbar-brand align-middle" href="/laporanproduklaris">Eling Furniture</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ ($title === "laporantransaksi" or $title === "laporanproduklaris") ? 'active' : '' }}" style="margin-right : 10px" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Laporan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="/laporantransaksi">Laporan Transkasi</a></li>
                          <li><a class="dropdown-item" href="/laporanproduklaris">Laporan Produk Terlaris</a></li>
                        </ul>
                      </li>
                </li>
              <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ ($title === "entrypembeli" or $title === "updatedeletepembeli" or $title === "updatepembeli") ? 'active' : '' }}" style="margin-right : 10px" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Pembeli
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/entrypembeli">Entry Pembeli</a></li>
                      <li><a class="dropdown-item" href="/updatedeletepembeli">Update & Delete Pembeli</a></li>
                    </ul>
                  </li>
              </li>
              <li class="nav-item">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle {{ ($title === "entryproduk" or $title === "updatedeletekategori" or $title === "updatedeleteproduk" or $title === "entrykategori") ? 'active' : '' }}" style="margin-right : 10px" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Kategori & Produk
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/entrykategori">Entry Kategori</a></li>
                      <li><a class="dropdown-item" href="/entryproduk">Entry Produk</a></li>
                      <li><a class="dropdown-item" href="/updatedeletekategori">Update & Delete kategori</a></li>
                      <li><a class="dropdown-item" href="/updatedeleteproduk">Update & Delete produk</a></li>
                  </ul>
                </li>
              </li>
              <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ ($title === "Entry operator" or $title === "updatedeleteoperator" or $title === "updateoperator") ? 'active' : '' }}" style="margin-right : 10px" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Operator
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/entryoperator">Entry Operator</a></li>
                      <li><a class="dropdown-item" href="/updatedeleteoperator">Update  & Delete Operator</a></li>
                    </ul>
                  </li>
            </li>
            <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ ($title === "entrytransaksi" or $title === "updatedeletetransaksi") ? 'active' : '' }}" style="margin-right : 10px" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Transaksi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/entrytransaksi">Entry Transkasi</a></li>
                      <li><a class="dropdown-item" href="/updatedeletetransaksi">Update & Delete Transaksi</a></li>
                    </ul>
                  </li>
            </li>
        </ul>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link disabled" style="color: whitesmoke">Hi, {{ session('user') }}!</a>
              </li>
              <li class="nav-item">
                <a href="/logout"><button class="btn btn-outline-warning me-2" type="button">Log Out</button></a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
@yield('script')
</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <title>Laporan Transaksi</title>
  </head>
  <body>
    @include('partials.partialnavbar')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Laporan Transaksi</h1>
        <form action="filterdata" method="get">
            <div class="containerfilter mt-4 mb-3 position-relative" style="display: flex; width:70%">
                <select class="form-select" name="bulan" aria-label="Default select example" style="width: 90%">
                    <option selected="">Pilih Bulan Transaksi</option>
                    @if ($bulantransaksi == "01")
                    <option selected= "selected" value="01">Januari</option>
                    @else
                    <option value="01">Januari</option>
                    @endif
                    @if ($bulantransaksi == "02")
                    <option selected= "selected" value="02">Februari</option>
                    @else
                    <option value="02">Februari</option>
                    @endif
                    @if ($bulantransaksi == "03")
                    <option selected= "selected" value="03">Maret</option>
                    @else
                    <option value="03">Maret</option>
                    @endif
                    @if ($bulantransaksi == "04")
                    <option selected= "selected" value="04">April</option>
                    @else
                    <option value="04">April</option>
                    @endif
                    @if ($bulantransaksi == "05")
                    <option selected= "selected" value="05">Mei</option>
                    @else
                    <option value="05">Mei</option>
                    @endif
                    @if ($bulantransaksi == "06")
                    <option selected= "selected" value="06">Juni</option>
                    @else
                    <option value="06">Juni</option>
                    @endif
                    @if ($bulantransaksi == "07")
                    <option selected= "selected" value="07">Juli</option>
                    @else
                    <option value="07">Juli</option>
                    @endif
                    @if ($bulantransaksi == "08")
                    <option selected= "selected" value="08">Agustus</option>
                    @else
                    <option value="08">Agustus</option>
                    @endif
                    @if ($bulantransaksi == "09")
                    <option selected= "selected" value="09">September</option>
                    @else
                    <option value="09">September</option>
                    @endif
                    @if ($bulantransaksi == "10")
                    <option selected= "selected" value="10">Oktober</option>
                    @else
                    <option value="10">Oktober</option>
                    @endif
                    @if ($bulantransaksi == "11")
                    <option selected= "selected" value="11">November</option>
                    @else
                    <option value="11">November</option>
                    @endif
                    @if ($bulantransaksi == "12")
                    <option selected= "selected" value="12">Desember</option>
                    @else
                    <option value="12">Desember</option>
                    @endif
                </select>
                <button type="submit" class="btn btn-primary position-absolute top-50 end-0 translate-middle-y">Submit</button>
            </div>
        </form>

        {{-- <div class="p-3 mb-2 bg-secondary text-white rounded">
          <form action="" method="post">
            <label for="exampleFormControlInput1" class="form-label">Pilih Tanggal :</label>
            <input class="form-control" type="datetime-local" name="tanggal" placeholder="Select DateTime">
          </form>
        </div> --}}

        <!--Table-->
        <table id="laporantransaksi" class="table table-striped table-hover ">

          <!--Table head-->
          <thead>
            <tr>
              <th>ID TRANSAKSI</th>
              <th class="th-lg">ID PEMBELI</th>
              <th class="th-lg">NAMA PEMBELI</th>
              <th class="th-lg">Tanggal Transaksi</th>
              <th class="th-lg">Jumlah Produk Transaksi</th>
              <th class="th-lg">Total transaksi</th>
              <th class="th-lg">Pembayaran Diterima</th>
              <th class="th-lg">Status Transaksi</th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
              @foreach ($list as $d)
              <tr >
                <th scope="row">{{ $d->ID_TRANSAKSI }}</th>
                <th scope="row">{{ $d->ID_PEMBELI }}</th>
                <td>{{ $d->NAMA_PEMBELI }}</td>
                <td >{{ $d->TANGGAL_TRANSAKSI }}</td>
                <td class="align-middle text-center">{{ $d->JUMLAHPRODUK_TRANSAKSI }}</td>
                <td >{{ $d->TOTAL_TRANSAKSI }}</td>
                <td >{{ $d->PEMBAYARAN_DITERIMA }}</td>
                <td >{{ $d->STATUS_DEALTRANSAKSI }}</td>
              </tr>
              @endforeach
          </tbody>


        </table>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
   <script>
       $(document).ready( function () {
        $('#laporantransaksi').DataTable();
        } );
   </script>
  </body>
</html>

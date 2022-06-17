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
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header">
                                <h4 style="float: left">Add TRANSAKSI Product</h4>
                                <a href="#" style="float: right" class="btn btn-dark">+ Add Product</a>
                                <div class="card-body">
                                    <table class="table table-bordered table-left">
                                        <thead>
                                            <tr>
                                            <th class="th-lg">ID Kategori</th>
                                            <th class="th-lg">Nama Produk</th>
                                            <th class="th-lg">Deskripsi Produk</th>
                                            <th class="th-lg">Harga Produk</th>
                                            <th class="th-lg">Jumlah Produk Transaksi</th>
                                            <th><a href="#" class="btn btn-sm btn-success add_more"><i class=" fa fa-plus"></i></a></th>
                                            </tr>
                                        </thead>
                                        <tbody class="addMoreProduct">
                                            <tr>
                                                <td>
                                                    <select name="id_kategori" id="idkategori" class="form-control id_kategori">
                                                    
                                                        <option value="KC001">CERMIN</option>
                                                        <option value="KP001">KITCHEN SET</option>
                                                        <option value="KP002">LEMARI</option>
                                                        <option value="KP003">DIPAN</option>
                                                        <option value="KP004">NAKAS</option>
                                                        <option value="KP005">DISPLAY TV</option> 
                                                        <option value="KP006">MEJA RIAS</option>
                                                        <option value="KP007">MEJA BELAJAR</option>
                                                        <option value="KP008">RAK SEPATU</option>
            
                                                    </select>
                                                    
                                                </td>
                                                <td>
                                                    <input type="text" name="nama_produk[]" id="nama_produk" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="text" name="deskripsi_produk[]" id="deskripsi_produk" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" name="harga_produk[]" id="harga_produk" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" name="jumlah_produk[]" id="jumlah_produk" class="form-control">
                                                </td>
                                                <td><a href="#" class="btn btn-sm btn-danger delete"><i class=" fa fa-times"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>TOTAL</h4>
                                </div>
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     

@section('script')
<script>
    $('.add_more').on('click',function(){
        alert(0);
    })
</script>
@endsection  

  </body>
</html>


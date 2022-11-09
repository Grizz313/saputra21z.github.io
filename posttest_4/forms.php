<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="forms.css">

    <title>Forms</title>
  </head>
  <body>
    <div class="container">
        <h2 class="alert alert-primary text-center mt-5 col-md-9">Forms Tambah Data</h2>
        <form action="tampilan.php" method="POST">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-9">
                        <label for="id_barang">Id Barang</label>
                        <input type="text" name="id_barang" class="form-control" placeholder="Masukan Id Barang">
                    </div>
                </div>
            </div>
             <div class="form-group">
                <div class="row">
                    <div class="col-md-9">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" placeholder="Masukan Nama Barang">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-9">
                        <label for="jenis_barang">Jenis Barang</label>
                        <input type="text" name="jenis_barang" class="form-control" placeholder="Masukan Nama Barang">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-9">
                        <label for="stok_barang">Stok Barang</label>
                        <input type="number" name="stok_barang" class="form-control" placeholder="Masukan Stok Barang">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Status: </label>
                <div class="row">
                    <div class="col-md-9">
                        <input type="checkbox" name="check_1" value="ya">Ready
                        <input type="checkbox" name="check_1" value="tidak">Tidak
                    </div>
                </div>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


oji oji

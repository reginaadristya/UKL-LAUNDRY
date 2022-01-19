<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry | List Outlet</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
      .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        }

      .form-signin .checkbox {
        font-weight: 400;
      }

      .form-signin .form-floating:focus-within {
        z-index: 2;
      }

      .form-signin input[type="cabang"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }

      .form-signin input[type="alamat"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }

      .form-signin input[type="telp"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body>
    <main class="form-signin">
        <?php
            include ('../koneksi.php');
            $qry_get=mysqli_query($conn,"select * from outlet where cabang = '".$_GET['cabang']."'");
            $dt_get=mysqli_fetch_array($qry_get);
        ?>
        <form action="../outlet/proses-ubah-outlet.php" method="post">
            <h1 class="h3 mb-3 fw-normal text-center">Ubah Data Outlet</h1>
            
            <div class="form-floating">
                <input type="text" class="form-control" id="cabang" name="cabang" placeholder="Cabang" value="<?=$dt_get['cabang'] ?>">
                <label for="cabang">Cabang</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="<?=$dt_get['alamat'] ?>">
                <label for="alamat">Alamat</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="telp" name="telp" placeholder="telp" value="<?=$dt_get['telp'] ?>">
                <label for="telp">Nomor Telepon</label>
            </div>
            

            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Ubah Data</button>
        </form>
    </main>
    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Paket | Laundry</title>
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

      .form-signin input[type="jenis paket"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }

      .form-signin input[type="harga"] {
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
            $qry_get=mysqli_query($conn,"select * from paket where jenis = '".$_GET['jenis']."'");
            $dt_get=mysqli_fetch_array($qry_get);
        ?>
        <form action="../paket/proses-ubah-paket.php" method="post">
            <h1 class="h3 mb-3 fw-normal text-center">Ubah Paket</h1>
            
            <div class="form-floating">
                <input type="text" class="form-control" id="harga" name="harga" placeholder="harga" value="<?=$dt_get['harga'] ?>">
                <label for="harga">Harga Paket</label>
            </div>
           
            <div>
                <?php 
                    $arr_paket=array('Kiloan'=>'Kiloan','selimut'=>'selimut','bed_cover'=>'bed_cover','kaos'=>'kaos');
                ?>
                <select name="jenis" id="jenis" class="form-select">
                    <option disabled>Pilih Jenis Laundry</option>
                    <?php foreach ($arr_paket as $key_paket => $val_paket):
                            if($key_paket==$dt_get['jenis']){
                                $selek="selected";
                            } else {
                                $selek="";
                            }
                    ?>
                    <option value="<?=$key_paket?>" <?=$selek?>><?=$val_paket?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Ubah Paket</button>
        </form>
    </main>
    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
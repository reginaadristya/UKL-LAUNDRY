<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Laundry</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        .width {
            justify-content: center;
            align-items: center;
            min-width: 1000px;
            max-width: 1500px;
        }
    </style>
</head>
<body class="bg-secondary">
    <?php include('../home.php'); ?>
    <div class="width mx-auto">
        <table class="table table-dark table-striped table-responsive rounded mt-3">
            <thead>
                <th scope="col">No</th>
                <th scope="col">Jenis Paket</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php include ('../koneksi.php');
                    $qry_paket = mysqli_query($conn,"select * from paket");
                    $no=0;
                    while($data = mysqli_fetch_array($qry_paket)){
                    $no++;
                ?>
                <tr>
                    <th scope="row"><?=$no ?></th>
                    <td><?=$data['jenis'] ?></td>
                    <td><?=$data['harga'] ?></td>
                    <td>
                        <a href="ubah-paket.php?jenis=<?=$data['jenis']?>" class="btn btn-success badge">Ubah <i class="bi bi-pencil-square"></i></a>
                        |
                        <a href="proses-hapus-paket.php?jenis=<?=$data['jenis']?>" class="btn btn-danger badge" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus <i class="bi bi-trash-fill"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="">
              <a href="tambah-paket.php" class="btn btn-success">Tambah Paket</a>
        </div>
    </div>
    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
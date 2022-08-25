<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Barang</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="card">
        <div class="card-header">
            <h3>Data Barang</h3>
        </div>
        <div class="card-footer">
            <div class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i>Tambah Barang
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($barangs as $b) {
                    ?>
                        <tr>
                            <td><?= $b->$no++ ?></td>
                            <td><?= $b->nama_barang  ?></td>
                            <td><?= $b->harga_barang ?></td>
                            <td><?= $b->jumlah_barang ?></td>
                            <td>
                                <div class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <div class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
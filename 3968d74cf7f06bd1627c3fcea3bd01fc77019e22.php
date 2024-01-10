<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Tambah Data Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Tambah Buku</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="<?php echo e(route('bukus.index')); ?>"> Back</a>
                </div>
            </div>
        </div>
        <form action="<?php echo e(route('bukus.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Judul Buku :</strong>
                        <input type="text" name="judul" class="form-control" placeholder="Judul Buku">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Penulis :</strong>
                        <input type="text" name="penulis" class="form-control" placeholder="Penulis">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Penerbit :</strong>
                        <input type="text" name="penerbit" class="form-control" placeholder="Penerbit">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tahun Terbit :</strong>
                        <input type="number" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html><?php /**PATH C:\Laravel\perpusdigital\resources\views/bukus/create.blade.php ENDPATH**/ ?>
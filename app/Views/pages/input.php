<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ujian Tengah Semester Pemsil</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/logo.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">
    
    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/custom_css/pages/BODEksisting.css" rel="stylesheet">


</head>

<body>
    <main id="main" class="main">
        <?= $this->include('/layout/sidebar') ?>
        <!-- Header -->
        <div class="container custom__wrapper__pemsil">
            <div class="row">
                <div class="col">
                    <div class="d-flex flex-column custom__header">
                        <h1>Hazkia Kaikiba</h1>
                        <h1>152018082</h1>
                        <h4>Regresi Linear Sederhana</h4>
                    </div>
                </div>
            </div>
            <!-- ENd Header -->


            <div class="custom__wrapper">

                <!-- end of small card -->
                <div class="custom__card__large">
                    <form enctype="multipart/form-data" role="form" action="<?= base_url('Input/create/'); ?>"
                        method="post" id="BODEksisting-form">

                        <div class="d-flex justify-content-between align-items-center container__create">
                            <h3 for="x">X</h3>
                            <input class="form-select form-control" name="x" type="input" id="x">

                        </div>
                        <div class="d-flex justify-content-between align-items-center container__create">
                            <h3 for="y">Y</h3>
                            <input class="form-control " name="y" type="input" id="y">

                        </div>

                        <div class="custom__header__card__large">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>

                <div class="custom__card__large">
                    <div class="custom__header__card__large">

                        <button type="button" class="btn btn-primary">Input Excel</button>
                    </div>

                    <div class="table__wrapper">
                        <table class="custom__table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">X</th>
                                    <th scope="col">Y</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                <?php foreach ($input as $data) : ?>

                                <tr>
                                    <td><?= $data['id']?></td>
                                    <td><?= $data['x']?></td>
                                    <td><?= $data['y']?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/quill/quill.min.js"></script>
    <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/assets/vendor/tinymce/tinymce.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/style.js"></script>

</body>
<script>
</script>
</html>
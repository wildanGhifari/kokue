<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 4 core CSS -->
    <link href="<?= base_url('/assets/libs/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/libs/fontawesome/css/all.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
    <title><?= isset($title) ? $title : 'Kokue' ?></title>
</head>

<body>

    <!-- Sidebar -->
    <?php $this->load->view('layouts/_sidebar') ?>
    <!-- End of Sidebar -->

    <!-- Content -->
    <?php $this->load->view($page); ?>
    <!-- End of Content -->

    <script src="<?= base_url('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('/assets/js/app.js') ?>"></script>
</body>

</html>
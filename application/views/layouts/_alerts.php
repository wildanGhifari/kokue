<?php
$success    = $this->session->flashdata('success');
$error      = $this->session->flashdata('error');
$warning    = $this->session->flashdata('warning');

if ($success) {
    $alert_status   = 'alert-success';
    $status         = '<i class="fas fa-check-circle"></i>';
    $message        = $success;
}

if ($error) {
    $alert_status   = 'alert-danger';
    $status         = '<i class="fas fa-exclamation-circle"></i>';
    $message        = $error;
}

if ($warning) {
    $alert_status   = 'alert-warning';
    $status         = '<i class="fas fa-exclamation-triangle"></i>';
    $message        = $warning;
}
?>

<?php if ($success || $error || $warning) : ?>
    <div class="alert <?= $alert_status ?> alert-dismissible fade show" role="alert">
        <strong><?= $status ?></strong> <?= $message ?>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif ?>
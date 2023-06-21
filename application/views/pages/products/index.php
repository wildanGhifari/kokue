<main id="main">
    <!-- Navbar -->
    <?php $this->load->view('layouts/_navbar') ?>
    <!-- End of Navbar -->

    <div id="mainContent">
        <div class="product-header">
            <h3><?= $title; ?></h3>
            <button class="btn btn-primary">
                <span style="margin-right: 8px;">
                    <i class="fa-regular fa-plus"></i>
                </span>
                New Product
            </button>
        </div>
    </div>
</main>
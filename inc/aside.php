<aside class="main-sidebar bg-dark text-white" style="min-height: 100vh; background: linear-gradient(135deg, #1e1e2f, #2c2c54);">

    <!-- Brand Logo -->
    <a href="index.php" class="brand-link d-flex align-items-center px-3 py-2 border-bottom">
        <!-- <img src="dist/img/logo-1.jpg" alt="Kritidhara Logo" class="brand-image img-circle me-2" style="width: 40px; height: 40px; object-fit: cover;"> -->
        <span class="brand-text fw-bold text-white fs-5">IMS Store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar px-3 py-4">

        <!-- User Panel -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div>
                <div class="fw-semibold text-white" style="text-transform: capitalize;">
                    <!-- <i class="fas fa-user-circle me-1"></i> <?php echo $_SESSION['NAME'] ?> -->
                     <h3>Dashboard</h3>
                </div>
            </div>
            <a href="logout.php" class="text-danger text-decoration-none" title="Logout">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav>
            <ul class="nav nav-pills flex-column gap-2">

                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white">
                        <i class="fas fa-home me-2"></i> Home
                    </a>
                </li>

                <li class="nav-item">
                    <a href="add_products.php" class="nav-link text-white">
                        <i class="fas fa-box-open me-2"></i> Add Products
                    </a>
                </li>

                <li class="nav-item">
                    <a href="unit.php" class="nav-link text-white">
                        <i class="fas fa-balance-scale me-2"></i> Add Unit
                    </a>
                </li>

                <li class="nav-item">
                    <a href="transaction.php" class="nav-link text-white">
                        <i class="fas fa-exchange-alt me-2"></i> Transaction
                    </a>
                </li>

                <li class="nav-item">
                    <a href="req.php" class="nav-link text-white">
                        <i class="fas fa-file-alt me-2"></i> Sheet
                    </a>
                </li>

                <li class="nav-item">
                    <a href="invoice.php" class="nav-link text-white">
                        <i class="fas fa-file-invoice me-2"></i> Invoice
                    </a>
                </li>

                <li class="nav-item">
                    <a href="change_pass.php" class="nav-link text-white">
                        <i class="fas fa-key me-2"></i> Change Password
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>

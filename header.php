<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="./images/main-logo.png" alt="LOGO" />
        </a>

        <!-- Toggler for mobile navigation -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
            <!-- Navbar Items (Center) -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <!-- Services Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li>
                            <a class="dropdown-item" href="#">
                                <img src="./images/helmet-1.png" alt="helmet-1" width="26" />
                                &nbsp; FULL FACE HELMET
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <img src="./images/helmet-2.png" alt="helmet-2" width="26" />
                                &nbsp; MODULAR HELMET
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <img src="./images/helmet-3.png" alt="helmet-3" width="26" />
                                &nbsp; HALF FACE HELMET
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>

            <!-- Right-aligned Items (Right) -->
            <div class="navbar-nav ms-auto">
                <!-- Payment Dropdown -->
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="paymentDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Payments
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="paymentDropdown">
                        <li>
                            <a class="dropdown-item" href="/">United States Dollar (USD) - $
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="/"> Euro (EUR) - € </a></li>
                        <li>
                            <a class="dropdown-item" href="/">Japanese Yen (JPY) - ¥ </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/">British Pound Sterling (GBP) - £
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/">Swiss Franc (CHF) - CHF </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/">Canadian Dollar (CAD) - $
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/">Australian Dollar (AUD) - $
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/">Chinese Yuan Renminbi (CNY) - ¥
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/">Indian Rupee (INR) - ₹ </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/">Brazilian Real (BRL) - R$
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/">South Korean Won (KRW) - ₩
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/">
                                Russian Ruble (RUB) - ₽
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/">Singapore Dollar (SGD) - $
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/">New Zealand Dollar (NZD) - $
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/">South African Rand (ZAR) - R
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Search Bar -->
                <form class="d-flex align-items-center">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" />
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
                <!-- Clickable Icons -->
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <a class="nav-link" href="#">
                    <i class="fa-regular fa-user"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
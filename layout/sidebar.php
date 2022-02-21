<nav>
    <div class="nav-bar container">
        <i class='bx bx-menu sidebarOpen' ></i>
        <span class="logo navLogo"><a href="/">Pizzeria</a></span>

        <div class="menu">
            <div class="logo-toggle">
                <span class="logo"><a href="/">Pizzeria</a></span>
                <i class='bx bx-x siderbarClose'></i>
            </div>

            <ul class="nav-links">
                <li><a href="#">About</a></li>
                <li><a href="?mod=product">Products</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <div class="darkLight-bellBox">
            <div class="dark-light">
                <i class='bx bx-moon moon'></i>
                <i class='bx bx-sun sun'></i>
            </div>

            <div class="bellBox">
                <div class="bellToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-bell bell' ></i>
                    <!-- bx-tada: cho vào "<i class='bx bx-bell bell' ></i>" làm hiệu ứng rung chuông -->
                </div>

                <div class="bell-field">
                    Lorem ipsum dolor sit amet.
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-sm btn-warning text-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='bx bx-category' ></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="?mod=cart">Cart</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="?mod=auth&action=logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
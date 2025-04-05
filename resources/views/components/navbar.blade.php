<nav class="navbar fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-6 py-3 bg-transparent">
    <!-- Logo -->
    <div class="w-40 ml-4">
        <img src="assets/images/logo-narasea-id.svg" alt="Narasea Logo" class="h-8">
    </div>

    <!-- Hamburger Button -->
    <button id="hamburger-btn" class="hamburger-circle focus:outline-none mr-4">
        <i class="fas fa-bars text-white"></i>
    </button>
</nav>

<!-- Offcanvas Overlay -->
<div id="offcanvas-overlay" class="offcanvas-overlay fixed inset-0 bg-black bg-opacity-50 z-50"></div>

<!-- Offcanvas Menu -->
<div id="offcanvas-menu" class="offcanvas-menu fixed top-0 right-0 z-50 shadow-lg">
    <div class="offcanvas-content p-6 flex flex-col">
        <!-- Close Button -->
        <div class="flex justify-end mb-8">
            <button id="close-btn" class="close-circle focus:outline-none">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <!-- Menu Items with circular arrow icons -->
        <div class="flex-grow overflow-y-auto">
            <ul>
                <li>
                    <a href="#" class="menu-link">
                        <span class="icon-wrapper">
                            <i class="fas fa-arrow-right arrow-icon"></i>
                        </span>
                        <span>See (Our Ocean)</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu-link">
                        <span class="icon-wrapper">
                            <i class="fas fa-arrow-right arrow-icon"></i>
                        </span>
                        <span>Share (Raise the Tide)</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu-link">
                        <span class="icon-wrapper">
                            <i class="fas fa-arrow-right arrow-icon"></i>
                        </span>
                        <span>Sea (Discover Narasea)</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
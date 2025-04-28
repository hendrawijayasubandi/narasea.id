<nav class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-6 py-3 bg-transparent navbar">
    <!-- Logo -->
    <div class="w-40 ml-4">
        <a href="/">
            <img src="{{ asset('assets/images/Narasea Logo_open files-06_new.svg') }}" alt="Narasea Logo" class="h-10">
        </a>
    </div>

    <!-- Hamburger Button -->
    <button id="hamburger-btn" class="mr-4 hamburger-circle focus:outline-none">
        <i class="text-white fas fa-bars"></i>
    </button>
</nav>

<!-- Offcanvas Overlay -->
<div id="offcanvas-overlay" class="fixed inset-0 z-50 bg-black bg-opacity-50 offcanvas-overlay"></div>

<!-- Offcanvas Menu -->
<div id="offcanvas-menu" class="fixed top-0 right-0 z-50 shadow-lg offcanvas-menu">
    <div class="flex flex-col p-6 offcanvas-content">
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
                    <a href="/" class="menu-link">
                        <span class="icon-wrapper">
                            <i class="fas fa-arrow-right arrow-icon"></i>
                        </span>
                        <span>See Our Ocean</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('share') }}" class="menu-link">
                        <span class="icon-wrapper">
                            <i class="fas fa-arrow-right arrow-icon"></i>
                        </span>
                        <span>Share Raise the Tide</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('sea') }}" class="menu-link">
                        <span class="icon-wrapper">
                            <i class="fas fa-arrow-right arrow-icon"></i>
                        </span>
                        <span>Discover Narasea</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
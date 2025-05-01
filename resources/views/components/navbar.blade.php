<nav class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-6 py-3 bg-transparent navbar">
    <!-- Logo -->
    <div class="w-40 ml-4">
        <a href="/">
            <img src="{{ asset('assets/images/logo-narasea-id-new.svg') }}" alt="Narasea Logo" class="h-10">
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

        <!-- Menu Items with Submenus -->
        <div class="flex-grow overflow-y-auto">
            <ul>
                <!-- See Our Ocean -->
                <li class="menu-item">
                    <a href="/" class="menu-link">
                        <span class="icon-wrapper">
                            <i class="fas fa-arrow-right arrow-icon"></i>
                        </span>
                        <span>See Our Ocean</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ url('/#tides-of-impact') }}">Tides of Impact</a></li>
                        <li><a href="{{ url('/#voice-from-the-ocean') }}">Voice From The Ocean</a></li>
                        <li><a href="{{ url('/#protect-educate-empower') }}">Protect, Educate, Empower</a></li>
                        <li><a href="{{ url('/#social-current') }}">Social Current</a></li>
                    </ul>
                </li>

                <!-- Share Raise the Tide -->
                <li class="menu-item">
                    <a href="{{ route('share') }}" class="menu-link">
                        <span class="icon-wrapper">
                            <i class="fas fa-arrow-right arrow-icon"></i>
                        </span>
                        <span>Share to Raise the Tide</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ url('/share#srt-educate') }}">Educate</a></li>
                        <li><a href="{{ url('/share#support-marine-conservation') }}">Support Marine Conservation</a></li>
                        <li><a href="{{ url('/share#learning-action') }}">Learning & Action</a></li>
                        <li><a href="{{ url('/share#empower-communitites') }}">Empower Communities</a></li>
                        <li><a href="{{ url('/share#advocate-amplify')}}">Advocate & Amplify</a></li>
                    </ul>
                </li>

                <!-- Sea (Discover Narasea) -->
                <li class="menu-item">
                    <a href="{{ route('sea') }}" class="menu-link">
                        <span class="icon-wrapper">
                            <i class="fas fa-arrow-right arrow-icon"></i>
                        </span>
                        <span>Discover Narasea</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ url('/sea#who-we-are') }}">Who We Are</a></li>
                        <li><a href="{{ url('/sea#our-journey') }}">Our Journey</a></li>
                        <li><a href="{{ url('/sea#our-vision-mission-approach') }}">Our Vision Mission & Approach</a></li>
                        <li><a href="{{ url('/sea#the-values-we-live-by')}}">The Values We Live By</a></li>
                        <li><a href="{{ url('/sea#together-for-the-ocean') }}">Together for the Ocean</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

    <div class="navbar bg-base-100 shadow-sm">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul tabindex="-1"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                        <li><a href="/"
                                class="hover:underline {{ request()->is('/') ? 'nav-active' : 'nav-link' }}">Welcome</a>
                        </li>
                        <li><a href="/about"
                                class="hover:underline {{ request()->is('about*') ? 'nav-active' : 'nav-link' }}">About</a>
                        </li>
                        <li><a href="/contact"
                                class="hover:underline {{ request()->is('contact*') ? 'nav-active' : 'nav-link' }}">Contact</a>
                        <li><a href="/ideas"
                                class="hover:underline {{ request()->is('ideas*') ? 'nav-active' : 'nav-link' }}">Ideas</a>
                        </li>
                    </ul>
                </div>
                <a class="btn btn-ghost text-xl">Learning Laravel From Scratch</a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="/"
                            class="hover:underline {{ request()->is('/') ? 'nav-active' : 'nav-link' }}">Welcome</a>
                    </li>
                    <li><a href="/about"
                            class="hover:underline {{ request()->is('about*') ? 'nav-active' : 'nav-link' }}">About</a>
                    </li>
                    <li><a href="/contact"
                            class="hover:underline {{ request()->is('contact*') ? 'nav-active' : 'nav-link' }}">Contact</a>
                    <li><a href="/ideas"
                            class="hover:underline {{ request()->is('ideas*') ? 'nav-active' : 'nav-link' }}">Ideas</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-end">
                <a class="btn">Button</a>
            </div>
        </div>
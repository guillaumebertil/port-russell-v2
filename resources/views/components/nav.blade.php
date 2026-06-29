<div class="navbar bg-base-100 shadow-sm max-w-7xl">
    <div class="navbar-start">
        <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
        </div>

        {{-- Menu mobile --}}
        <ul
            tabindex="-1"
            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
            <li><a>Item 1</a></li>
            <li>
            <a>Parent</a>
            <ul class="p-2">
                <li><a>Submenu 1</a></li>
                <li><a>Submenu 2</a></li>
            </ul>
            </li>
            <li><a>Item 3</a></li>
        </ul>
        </div>
        <a href="/" class="btn btn-ghost text-xl">
            <img
                src="/assets/img/logo.png"
                alt="logo"
                class="size-6 hidden md:flex"
            >
            Port Russell
        </a>
    </div>
    
    {{-- Menu desktop --}}
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li>
                <a href="/">Tableau de bord</a>
            </li>

            <li>
                <a href="/catways">Catways</a>
            </li>
            
            <li>
                <a href="/reservations">Réservations</a>
            </li>

            @if (auth()->user()?->isAdmin)
                <li>
                    <a href="/users">Utilisateurs</a>
                </li>
            @endif
        </ul>
    </div>

    <div class="navbar-end">
        @auth
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="btn bg-red-500">Déconnexion</button>
            </form>

            @else
                <a href="/login" class="btn btn-success">Se connecter</a>
        @endauth
    </div>
</div>
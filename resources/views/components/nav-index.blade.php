<div class="flex items-center justify-between">
    <div class="flex items-center">
        <img src="{{ asset('img/logo.webp') }}" alt="" class="block h-12 w-12 mr-2 rounded-full object-cover">
        <h2 class="font-semibold text-xl text-white">
            {{ __('Tabla de usuarios') }}
        </h2>
    </div>
    <nav class="flex items-center">
        <a href="{{ url('/dashboard') }}" class="hidden lg:inline-block rounded-md px-3 py-2 text-white hover:text-black/70 focus:outline-none">Dashboard</a>
        <a href="{{ route('persons.index') }}" class="hidden lg:inline-block rounded-md px-3 py-2 text-white hover:text-black/70 focus:outline-none">Persons</a>
        <button id="menu-toggle" class="lg:hidden rounded-md px-3 py-2 text-white hover:text-black/70 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </nav>
</div>
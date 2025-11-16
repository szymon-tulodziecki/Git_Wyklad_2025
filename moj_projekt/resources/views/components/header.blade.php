<nav class="bg-gradient-to-r from-slate-950 via-emerald-700 to-teal-500 shadow-lg">
    <div class="container mx-auto flex items-center justify-between py-3 px-4">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('img/ip.png') }}" alt="Logo" class="h-10 w-10 rounded-full border border-emerald-300/60">
            <span class="text-slate-100 text-xl font-semibold tracking-wide">Kalkulator IP</span>
        </div>
        <ul class="flex items-center gap-1 text-slate-100 text-sm font-medium">
            <li>
                <a href="{{ route('home') }}" class="px-4 py-2 rounded-full transition hover:bg-slate-900/40 hover:backdrop-blur">
                    Strona główna
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="px-4 py-2 rounded-full transition hover:bg-slate-900/40 hover:backdrop-blur">
                    O mnie
                </a>
            </li>
            <li>
                <a href="{{ route('calculator') }}" class="px-4 py-2 rounded-full transition hover:bg-slate-900/40 hover:backdrop-blur">
                    Kalkulator IP
                </a>
            </li>
            <li>
                <a href="{{ route('outcome') }}" class="px-4 py-2 rounded-full transition hover:bg-slate-900/40 hover:backdrop-blur">
                    Wyniki
                </a>
            </li>
            <li>
                <a href="{{ route('guide') }}" class="px-4 py-2 rounded-full transition hover:bg-slate-900/40 hover:backdrop-blur">
                    Poradnik
                </a>
            </li>
        </ul>
    </div>
</nav>

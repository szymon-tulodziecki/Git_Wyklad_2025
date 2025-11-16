<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex items-center justify-between">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('img/ip.png') }}" alt="Logo" class="h-10 w-10">
            <span class="text-white text-xl font-semibold">Kalkulator IP</span>
        </div>
        <ul class="flex space-x-4 text-white">
            <li><a href="{{ route('home') }}" class="hover:bg-gray-700 rounded px-3 py-2">Strona główna</a></li>
            <li><a href="{{ route('about') }}" class="hover:bg-gray-700 rounded px-3 py-2">O mnie</a></li>
            <li><a href="{{ route('calculator') }}" class="hover:bg-gray-700 rounded px-3 py-2">Kalkulator IP</a></li>
            <li><a href="{{ route('outcome') }}" class="hover:bg-gray-700 rounded px-3 py-2">Wyniki</a></li>
            <li><a href="{{ route('guide') }}" class="hover:bg-gray-700 rounded px-3 py-2">Poradnik</a></li>
        </ul>
    </div>
</nav>

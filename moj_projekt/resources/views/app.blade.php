@extends('layouts.app')

@section('title', 'Lab 5 - IP Kalkulator')

@section('content')
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-4xl font-bold mb-4">Witamy na stronie Kalkulatora IP</h1>
        <p class="mb-6 text-lg">
            Ten serwis pozwala na obliczenia dotyczące adresów IP i masek podsieci.  
            Skorzystaj z menu, aby przejść do różnych sekcji, takich jak kalkulator IP, poradnik oraz informacje o autorze.
        </p>
        <ul class="list-disc list-inside space-y-2 text-blue-600">
            <li><a href="{{ route('calculator') }}" class="hover:underline">Kalkulator IP</a></li>
            <li><a href="{{ route('guide') }}" class="hover:underline">Poradnik dotyczący sieci IP</a></li>
            <li><a href="{{ route('about') }}" class="hover:underline">O mnie</a></li>
        </ul>
    </div>
@endsection

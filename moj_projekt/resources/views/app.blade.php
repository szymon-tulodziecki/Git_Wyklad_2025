@extends('layouts.app')

@section('title', 'Lab 5 - IP Kalkulator')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-slate-900/80 border border-slate-800 rounded-2xl shadow-xl backdrop-blur">
        <h1 class="text-4xl font-bold text-emerald-300 mb-4">Witamy na stronie Kalkulatora IP</h1>
        <p class="mb-6 text-lg text-slate-300">
            Ten serwis pozwala na obliczenia dotyczące adresów IP i masek podsieci.  
            Skorzystaj z menu, aby przejść do różnych sekcji, takich jak kalkulator IP, poradnik oraz informacje o autorze.
        </p>
        <ul class="list-disc list-inside space-y-2 text-slate-300">
            <li><a href="{{ route('calculator') }}" class="text-emerald-300 hover:text-emerald-200 transition">Kalkulator IP</a></li>
            <li><a href="{{ route('guide') }}" class="text-sky-300 hover:text-sky-200 transition">Poradnik dotyczący sieci IP</a></li>
            <li><a href="{{ route('about') }}" class="text-purple-300 hover:text-purple-200 transition">O mnie</a></li>
        </ul>
    </div>
@endsection

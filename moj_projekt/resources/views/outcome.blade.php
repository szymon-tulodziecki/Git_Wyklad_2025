@extends('layouts.app')

@section('title', 'Wyniki - Kalkulator IP')

@section('content')
    <div class="max-w-3xl mx-auto">
        <h1 class="text-4xl font-bold text-emerald-300 mb-6">Wyniki</h1>
        
        <div class="bg-slate-900/80 border border-slate-800 rounded-2xl shadow-xl p-8 mb-6 backdrop-blur">
            <h2 class="text-2xl font-semibold text-slate-100 mb-6">Obliczone parametry</h2>
            
            <div class="space-y-4">
                <div class="flex justify-between items-center p-4 bg-emerald-500/10 border border-emerald-500/40 rounded-xl">
                    <span class="font-semibold text-slate-200">Adres IP:</span>
                    <span class="text-emerald-300 font-mono text-lg">{{ $results['ip_address'] }}</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-purple-500/10 border border-purple-500/40 rounded-xl">
                    <span class="font-semibold text-slate-200">Maska podsieci (CIDR):</span>
                    <span class="text-purple-300 font-mono text-lg">/{{ $results['subnet_mask'] }}</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-purple-500/10 border border-purple-500/40 rounded-xl">
                    <span class="font-semibold text-slate-200">Maska podsieci (dziesiętna):</span>
                    <span class="text-purple-300 font-mono text-lg">{{ $results['subnet_mask_decimal'] }}</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-teal-500/10 border border-teal-500/40 rounded-xl">
                    <span class="font-semibold text-slate-200">Adres sieci:</span>
                    <span class="text-teal-300 font-mono text-lg">{{ $results['network_address'] }}</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-orange-500/10 border border-orange-500/40 rounded-xl">
                    <span class="font-semibold text-slate-200">Adres broadcast:</span>
                    <span class="text-orange-300 font-mono text-lg">{{ $results['broadcast_address'] }}</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-sky-500/10 border border-sky-500/40 rounded-xl">
                    <span class="font-semibold text-slate-200">Pierwszy host:</span>
                    <span class="text-sky-300 font-mono text-lg">{{ $results['first_host'] }}</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-sky-500/10 border border-sky-500/40 rounded-xl">
                    <span class="font-semibold text-slate-200">Ostatni host:</span>
                    <span class="text-sky-300 font-mono text-lg">{{ $results['last_host'] }}</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-indigo-500/10 border border-indigo-500/40 rounded-xl">
                    <span class="font-semibold text-slate-200">Liczba dostępnych hostów:</span>
                    <span class="text-indigo-300 font-mono text-lg">{{ number_format($results['total_hosts'], 0, ',', ' ') }}</span>
                </div>
            </div>
        </div>

        <div class="flex gap-4">
            <a 
                href="{{ route('calculator') }}" 
                class="flex-1 bg-emerald-500 hover:bg-emerald-400 text-slate-900 font-semibold py-3 px-6 rounded-xl text-center transition duration-300 transform hover:-translate-y-0.5 shadow-lg shadow-emerald-900/40"
            >
                Nowe obliczenie
            </a>
            <a 
                href="{{ route('home') }}" 
                class="flex-1 bg-slate-800 hover:bg-slate-700 text-slate-100 font-semibold py-3 px-6 rounded-xl text-center transition duration-300 transform hover:-translate-y-0.5"
            >
                Wróć do strony głównej
            </a>
        </div>
    </div>
@endsection
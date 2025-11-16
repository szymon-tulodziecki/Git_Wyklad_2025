@extends('layouts.app')

@section('title', 'Kalkulator IP')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-4xl font-bold text-emerald-300 mb-6">Kalkulator IP</h1>
        
        <div class="bg-slate-900/80 border border-slate-800 rounded-2xl shadow-xl p-8 backdrop-blur">
            <form action="{{ route('calculator.calculate') }}" method="POST" class="space-y-6">
                @csrf
                
                @if(session('error'))
                    <div class="bg-rose-500/20 border border-rose-400/50 text-rose-200 px-4 py-3 rounded-xl">
                        {{ session('error') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-rose-500/20 border border-rose-400/50 text-rose-200 px-4 py-3 rounded-xl">
                        <ul class="list-disc list-inside space-y-1">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div>
                    <label for="ip_address" class="block text-sm font-medium text-slate-200 mb-2">
                        Adres IP
                    </label>
                    <input 
                        type="text" 
                        name="ip_address" 
                        id="ip_address" 
                        value="{{ old('ip_address', '192.168.1.10') }}"
                        placeholder="np. 192.168.1.10"
                        class="w-full px-4 py-3 border border-slate-700 rounded-xl bg-slate-950 text-slate-100 placeholder:text-slate-500 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                        required
                    >
                    <p class="mt-1 text-sm text-slate-400">Wprowadź adres IPv4 w formacie dziesiętnym</p>
                </div>

                <div>
                    <label for="subnet_mask" class="block text-sm font-medium text-slate-200 mb-2">
                        Maska podsieci (CIDR)
                    </label>
                    <input 
                        type="number" 
                        name="subnet_mask" 
                        id="subnet_mask" 
                        value="{{ old('subnet_mask', '24') }}"
                        min="1" 
                        max="32"
                        placeholder="np. 24"
                        class="w-full px-4 py-3 border border-slate-700 rounded-xl bg-slate-950 text-slate-100 placeholder:text-slate-500 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500"
                        required
                    >
                    <p class="mt-1 text-sm text-slate-400">Wprowadź liczbę od 1 do 32 (np. 24 dla /24)</p>
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-emerald-500 hover:bg-emerald-400 text-slate-900 font-semibold py-3 px-6 rounded-xl transition duration-300 transform hover:-translate-y-0.5 shadow-lg shadow-emerald-900/40"
                >
                    Oblicz parametry sieci
                </button>
            </form>

            <div class="mt-6 p-4 bg-slate-900/60 border border-slate-800 rounded-xl">
                <h3 class="font-semibold text-slate-200 mb-2">Popularne maski podsieci:</h3>
                <ul class="text-sm text-slate-400 space-y-1">
                    <li>/8 = 255.0.0.0 (16,777,214 hostów)</li>
                    <li>/16 = 255.255.0.0 (65,534 hosty)</li>
                    <li>/24 = 255.255.255.0 (254 hosty)</li>
                    <li>/30 = 255.255.255.252 (2 hosty - połączenia punkt-punkt)</li>
                </ul>
                    <li>/30 = 255.255.255.252 (2 hosty - połączenia punkt-punkt)</li>
                </ul>
            </div>
        </div>

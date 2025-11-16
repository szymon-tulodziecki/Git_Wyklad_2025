@extends('layouts.app')

@section('title', 'Kalkulator IP')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Kalkulator IP</h1>
        
        <div class="bg-white rounded-lg shadow-md p-8">
            <form action="{{ route('calculator.calculate') }}" method="POST" class="space-y-6">
                @csrf
                
                @if(session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                        {{ session('error') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div>
                    <label for="ip_address" class="block text-sm font-medium text-gray-700 mb-2">
                        Adres IP
                    </label>
                    <input 
                        type="text" 
                        name="ip_address" 
                        id="ip_address" 
                        value="{{ old('ip_address', '192.168.1.10') }}"
                        placeholder="np. 192.168.1.10"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        required
                    >
                    <p class="mt-1 text-sm text-gray-500">Wprowadź adres IPv4 w formacie dziesiętnym</p>
                </div>

                <div>
                    <label for="subnet_mask" class="block text-sm font-medium text-gray-700 mb-2">
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
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        required
                    >
                    <p class="mt-1 text-sm text-gray-500">Wprowadź liczbę od 1 do 32 (np. 24 dla /24)</p>
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-105"
                >
                    Oblicz parametry sieci
                </button>
            </form>

            <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                <h3 class="font-semibold text-gray-700 mb-2">Popularne maski podsieci:</h3>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>/8 = 255.0.0.0 (16,777,214 hostów)</li>
                    <li>/16 = 255.255.0.0 (65,534 hosty)</li>
                    <li>/24 = 255.255.255.0 (254 hosty)</li>
                    <li>/30 = 255.255.255.252 (2 hosty - połączenia punkt-punkt)</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

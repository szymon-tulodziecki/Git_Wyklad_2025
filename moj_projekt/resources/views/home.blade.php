@extends('layouts.app')

@section('title', 'Strona główna - Kalkulator IP')

@section('content')
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Kalkulator IP - Strona główna</h1>
        
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <p class="text-lg text-gray-700 mb-4">
                To jest projekt kalkulatora IP zrobiony na laboratoria. Aplikacja pozwala obliczyć podstawowe parametry sieci IPv4.
            </p>
            <p class="text-gray-600">
                Możesz tu sprawdzić adres sieci, adres rozgłoszeniowy, zakres hostów i inne rzeczy związane z sieciami komputerowymi.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <a href="{{ route('calculator') }}" class="bg-blue-500 hover:bg-blue-600 text-white rounded-lg shadow-md p-6 transition duration-300 transform hover:scale-105">
                <h2 class="text-2xl font-semibold mb-2">Kalkulator</h2>
                <p class="text-blue-100">Oblicz parametry sieci IP</p>
            </a>
            
            <a href="{{ route('guide') }}" class="bg-green-500 hover:bg-green-600 text-white rounded-lg shadow-md p-6 transition duration-300 transform hover:scale-105">
                <h2 class="text-2xl font-semibold mb-2">Poradnik</h2>
                <p class="text-green-100">Dowiedz się więcej o sieciach</p>
            </a>
            
            <a href="{{ route('about') }}" class="bg-purple-500 hover:bg-purple-600 text-white rounded-lg shadow-md p-6 transition duration-300 transform hover:scale-105">
                <h2 class="text-2xl font-semibold mb-2">O mnie</h2>
                <p class="text-purple-100">Informacje o autorze</p>
            </a>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('title', 'Poradnik - Kalkulator IP')

@section('content')
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Podstawy sieci IP</h1>
        
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Co to jest adres IP?</h2>
            <p class="text-gray-700 mb-4">
                Adres IP to taki numer identyfikacyjny dla każdego komputera w sieci. Dzięki niemu urządzenia mogą się ze sobą komunikować. 
                IPv4 to wersja z 32 bitami, którą zapisujemy jako cztery liczby oddzielone kropkami, np. 192.168.1.1.
            </p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Maska podsieci</h2>
            <p class="text-gray-700 mb-4">
                Maska podsieci mówi nam, która część adresu IP to numer sieci, a która to numer hosta. 
                Można ją zapisać w notacji CIDR (np. /24) albo normalnie (np. 255.255.255.0).
            </p>
            <div class="bg-blue-50 p-4 rounded">
                <p class="text-sm text-gray-700"><strong>Przykłady masek:</strong></p>
                <ul class="list-disc list-inside text-sm text-gray-700 mt-2">
                    <li>/24 = 255.255.255.0 - mieści 254 komputery</li>
                    <li>/16 = 255.255.0.0 - mieści 65534 komputery</li>
                    <li>/8 = 255.0.0.0 - mieści ponad 16 milionów komputerów</li>
                </ul>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Adres sieci i broadcast</h2>
            <p class="text-gray-700 mb-4">
                <strong>Adres sieci</strong> - to pierwszy adres w podsieci. Identyfikuje całą sieć i nie można go przypisać żadnemu komputerowi.
            </p>
            <p class="text-gray-700 mb-4">
                <strong>Adres broadcast</strong> - to ostatni adres w podsieci. Służy do wysyłania wiadomości do wszystkich komputerów w sieci naraz.
            </p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Klasy adresów</h2>
            <div class="space-y-3 text-gray-700">
                <div class="p-3 bg-green-50 rounded">
                    <strong>Klasa A:</strong> 0.0.0.0 - 127.255.255.255 - dla dużych sieci
                </div>
                <div class="p-3 bg-blue-50 rounded">
                    <strong>Klasa B:</strong> 128.0.0.0 - 191.255.255.255 - dla średnich sieci
                </div>
                <div class="p-3 bg-purple-50 rounded">
                    <strong>Klasa C:</strong> 192.0.0.0 - 223.255.255.255 - dla małych sieci
                </div>
            </div>
        </div>
    </div>
@endsection
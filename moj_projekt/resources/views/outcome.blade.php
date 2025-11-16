@extends('layouts.app')

@section('title', 'Wyniki - Kalkulator IP')

@section('content')
    <div class="max-w-3xl mx-auto">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Wyniki</h1>
        
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Obliczone parametry</h2>
            
            <div class="space-y-4">
                <div class="flex justify-between items-center p-4 bg-blue-50 rounded-lg">
                    <span class="font-semibold text-gray-700">Adres IP:</span>
                    <span class="text-blue-600 font-mono text-lg">{{ $results['ip_address'] }}</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-purple-50 rounded-lg">
                    <span class="font-semibold text-gray-700">Maska podsieci (CIDR):</span>
                    <span class="text-purple-600 font-mono text-lg">/{{ $results['subnet_mask'] }}</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-purple-50 rounded-lg">
                    <span class="font-semibold text-gray-700">Maska podsieci (dziesiętna):</span>
                    <span class="text-purple-600 font-mono text-lg">{{ $results['subnet_mask_decimal'] }}</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-green-50 rounded-lg">
                    <span class="font-semibold text-gray-700">Adres sieci:</span>
                    <span class="text-green-600 font-mono text-lg">{{ $results['network_address'] }}</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-orange-50 rounded-lg">
                    <span class="font-semibold text-gray-700">Adres broadcast:</span>
                    <span class="text-orange-600 font-mono text-lg">{{ $results['broadcast_address'] }}</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-teal-50 rounded-lg">
                    <span class="font-semibold text-gray-700">Pierwszy host:</span>
                    <span class="text-teal-600 font-mono text-lg">{{ $results['first_host'] }}</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-teal-50 rounded-lg">
                    <span class="font-semibold text-gray-700">Ostatni host:</span>
                    <span class="text-teal-600 font-mono text-lg">{{ $results['last_host'] }}</span>
                </div>

                <div class="flex justify-between items-center p-4 bg-indigo-50 rounded-lg">
                    <span class="font-semibold text-gray-700">Liczba dostępnych hostów:</span>
                    <span class="text-indigo-600 font-mono text-lg">{{ number_format($results['total_hosts'], 0, ',', ' ') }}</span>
                </div>
            </div>
        </div>

        <div class="flex gap-4">
            <a 
                href="{{ route('calculator') }}" 
                class="flex-1 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg text-center transition duration-300 transform hover:scale-105"
            >
                Nowe obliczenie
            </a>
            <a 
                href="{{ route('home') }}" 
                class="flex-1 bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg text-center transition duration-300 transform hover:scale-105"
            >
                Wróć do strony głównej
            </a>
        </div>
    </div>
@endsection
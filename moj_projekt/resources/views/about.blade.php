@extends('layouts.app')

@section('title', 'O mnie - Kalkulator IP')

@section('content')
    <div class="max-w-3xl mx-auto">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">O projekcie</h1>
        
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Kalkulator IP - lab5</h2>
            <p class="text-gray-700 mb-4">
                Ten projekt to moje laboratorium numer 5. Zrobiłem prosty kalkulator do liczenia parametrów sieci IP.
            </p>
            <p class="text-gray-700 mb-4">
                Do projektu użyłem:
            </p>
            <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4">
                <li>Laravel 11 - backend</li>
                <li>Tailwind CSS 4 - do stylowania</li>
                <li>Vite - do budowania frontendu</li>
                <li>Blade - szablony</li>
            </ul>
        </div>

        <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Informacje</h2>
            <p class="text-gray-700 mb-2">
                <strong>Student:</strong> Szymon Tułodziecki 21312
            </p>
            <p class="text-gray-700 mb-2">
                <strong>Przedmiot:</strong> Laboratorium 5
            </p>
            <p class="text-gray-700">
                <strong>Rok akademicki:</strong> 2024/2025
            </p>
        </div>
    </div>
@endsection
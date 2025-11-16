<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/calculator', function () {
    return view('calculator');
})->name('calculator');

Route::post('/calculator', function (Request $request) {
    $validated = $request->validate([
        'ip_address' => 'required|ip',
        'subnet_mask' => 'required|integer|min:1|max:32',
    ], [
        'ip_address.required' => 'Adres IP jest wymagany',
        'ip_address.ip' => 'Wprowadź poprawny adres IP',
        'subnet_mask.required' => 'Maska podsieci jest wymagana',
        'subnet_mask.integer' => 'Maska musi być liczbą całkowitą',
        'subnet_mask.min' => 'Maska musi być większa lub równa 1',
        'subnet_mask.max' => 'Maska musi być mniejsza lub równa 32',
    ]);
    
    return redirect()->route('outcome', [
        'ip' => $validated['ip_address'],
        'mask' => $validated['subnet_mask']
    ]);
})->name('calculator.calculate');

Route::get('/outcome', function (Request $request) {
    $ip = $request->query('ip');
    $mask = $request->query('mask');
    
    if (!$ip || !$mask) {
        return redirect()->route('calculator')->with('error', 'Brak danych do obliczeń. Wprowadź adres IP i maskę podsieci.');
    }
    
    // Obliczenia IP
    $ipLong = ip2long($ip);
    $maskLong = -1 << (32 - $mask);
    $networkLong = $ipLong & $maskLong;
    $broadcastLong = $networkLong | (~$maskLong);
    
    $results = [
        'ip_address' => $ip,
        'subnet_mask' => $mask,
        'subnet_mask_decimal' => long2ip($maskLong),
        'network_address' => long2ip($networkLong),
        'broadcast_address' => long2ip($broadcastLong),
        'first_host' => long2ip($networkLong + 1),
        'last_host' => long2ip($broadcastLong - 1),
        'total_hosts' => max(0, pow(2, 32 - $mask) - 2),
    ];
    
    return view('outcome', compact('results'));
})->name('outcome');

Route::get('/guide', function () {
    return view('guide');
})->name('guide');
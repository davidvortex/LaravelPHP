@props(['tipo'])

@php
    $clases = [
        'info' => 'bg-blue-50 text-blue-700 ring-blue-700/10',
        'peligro' => 'bg-red-50 text-red-700 ring-red-700/10',
        'alerta' => 'bg-yellow-50 text-yellow-700 ring-yellow-700/10',
        'exitoso' => 'bg-green-50 text-green-700 ring-green-700/10',
        'negro' => 'bg-gray-800 text-white ring-gray-800/10',
    ];

    $class = $clases[$tipo] ?? 'bg-gray-50 text-gray-700 ring-gray-700/10';
@endphp

<div class="inline-flex items-center rounded-md px-2 py-1 text-xs font-medium {{ $class }}">
    {{ $slot }}
</div>

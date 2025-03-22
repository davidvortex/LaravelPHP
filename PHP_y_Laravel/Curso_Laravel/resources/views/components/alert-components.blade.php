<!-- resources/views/components/alert-component.blade.php -->
@props(['tipo'])

@php
    // Asignar clases de Tailwind CSS dependiendo del tipo de alerta
    switch ($tipo) {
        case 'info':
            $class = 'bg-blue-50 text-blue-700 ring-blue-700/10';
            break;
        case 'peligro':
            $class = 'bg-red-50 text-red-700 ring-red-700/10';
            break;
        case 'alerta':
            $class = 'bg-yellow-50 text-yellow-700 ring-yellow-700/10';
            break;
        case 'exitoso':
            $class = 'bg-green-50 text-green-700 ring-green-700/10';
            break;
        case 'negro':
            $class = 'bg-gray-800 text-white ring-gray-800/10';
            break;
        default:
            $class = 'bg-gray-50 text-gray-700 ring-gray-700/10'; // Default color
            break;
    }
@endphp

<!-- El div de alerta con el color dinámico -->
<div class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-blue-700/10 ring-inset">
    {{ $slot }}
</div>


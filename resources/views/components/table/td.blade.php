@props([
    'forActions' => false
])

<td {{ $attributes->merge([
    'class' => 'px-6 py-4 text-sm whitespace-no-wrap ' . ($forActions ? 'space-x-1 text-right text-gray-700' : '')
]) }}>{{ $slot }}</td>

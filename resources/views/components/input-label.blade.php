@props(['value'])

<label {{ $attributes->merge(['class' => 'block  text-sm text-gray-500 font-bold dark:text-gray-300 mb-2']) }}>
    {{ $value ?? $slot }}
</label>

@props(['active'])

@php
$classes = ($active ?? false)
            ? 'w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg hover:bg-white/10 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 text-neutral-300'
            : 'w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-white rounded-lg hover:bg-white/10 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot ?? 'Default Text' }}
</a>

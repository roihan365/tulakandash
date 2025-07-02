@props(['title', 'value', 'icon', 'color' => 'blue', 'trend' => null])

@php
    $colors = [
        'blue' => [
            'bg' => 'bg-blue-50 dark:bg-blue-900/30',
            'text' => 'text-blue-600 dark:text-blue-400',
            'icon' => 'text-blue-500 dark:text-blue-300',
        ],
        'green' => [
            'bg' => 'bg-green-50 dark:bg-green-900/30',
            'text' => 'text-green-600 dark:text-green-400',
            'icon' => 'text-green-500 dark:text-green-300',
        ],
        'red' => [
            'bg' => 'bg-red-50 dark:bg-red-900/30',
            'text' => 'text-red-600 dark:text-red-400',
            'icon' => 'text-red-500 dark:text-red-300',
        ],
        'purple' => [
            'bg' => 'bg-purple-50 dark:bg-purple-900/30',
            'text' => 'text-purple-600 dark:text-purple-400',
            'icon' => 'text-purple-500 dark:text-purple-300',
        ],
        'yellow' => [
            'bg' => 'bg-yellow-50 dark:bg-yellow-900/30',
            'text' => 'text-yellow-600 dark:text-yellow-400',
            'icon' => 'text-yellow-500 dark:text-yellow-300',
        ],
    ];

    $selectedColor = $colors[$color] ?? $colors['blue'];
@endphp

<div class="{{ $selectedColor['bg'] }} p-4 rounded-lg">
    <div class="flex items-center">
        <div class="p-2 rounded-lg {{ $selectedColor['icon'] }} bg-white dark:bg-gray-800">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $icon }}" />
            </svg>
        </div>
        <div class="ml-3">
            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ $title }}</p>
            <p class="{{ $selectedColor['text'] }} text-xl font-semibold">{{ $value }}</p>
        </div>
    </div>
</div>

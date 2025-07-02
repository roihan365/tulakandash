@props([
    'title',
    'value',
    'icon',
    'color' => 'blue',
    'trend' => null
])

@php
    $colors = [
        'blue' => 'text-blue-500 bg-blue-50 dark:bg-blue-900 dark:text-blue-200',
        'green' => 'text-green-500 bg-green-50 dark:bg-green-900 dark:text-green-200',
        'yellow' => 'text-yellow-500 bg-yellow-50 dark:bg-yellow-900 dark:text-yellow-200',
        'red' => 'text-red-500 bg-red-50 dark:bg-red-900 dark:text-red-200',
    ];
    
    $trendIcons = [
        'up' => 'M5 15l7-7 7 7',
        'down' => 'M19 9l-7 7-7-7'
    ];
@endphp

<div class="bg-white dark:bg-gray-800 overflow-hidden shadow rounded-lg">
    <div class="p-5">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <div class="{{ $colors[$color] }} rounded-md p-3">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $icon }}" />
                    </svg>
                </div>
            </div>
            <div class="ml-5 w-0 flex-1">
                <dl>
                    <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">
                        {{ $title }}
                    </dt>
                    <dd>
                        <div class="text-lg font-semibold text-gray-900 dark:text-white">
                            {{ $value }}
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    @if($trend)
    <div class="bg-gray-50 dark:bg-gray-700 px-5 py-3">
        <div class="text-sm">
            <span class="flex items-center {{ $trend === 'up' ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400' }}">
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $trendIcons[$trend] }}" />
                </svg>
                {{ $trend === 'up' ? 'Increase' : 'Decrease' }} from yesterday
            </span>
        </div>
    </div>
    @endif
</div>
@props([
    'notification' => false,
    'proFeature' => false,
    'href' => '#',
    'icon' => 'null',
    'alt' => 'null'
])

<li>
    <a href="{{$href}}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
        <img src="{{ $icon }}" alt="{{ $alt }}" class="w-6 h-6"  />
        <span class="flex-1 ml-3 whitespace-nowrap">{{$slot}}</span>
        @if($notification === true)
            <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
        @endif

        @if($proFeature === true)
        <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
        @endif
        </a>
</li>


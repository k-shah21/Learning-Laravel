@if (isset($href))
<a href="{{ $href }}" {{ $attributes->class([
    'inline-flex items-center px-4 py-2 text-sm font-medium leading-5 rounded-md transition ease-in-out duration-150',
    'text-gray-800 bg-white border border-gray-300 hover:text-gray-700 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-800' => !$attributes->has('class'),
    'dark:bg-gray-800 dark:border-gray-600 dark:text-gray-200 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300 dark:hover:bg-gray-900 dark:hover:text-gray-200' => !$attributes->has('class')
]) }}>
    {{ $slot }}
</a>
@else
<button {{ $attributes->class([
    'inline-flex items-center px-4 py-2 text-sm font-medium leading-5 rounded-md transition ease-in-out duration-150',
    'text-gray-800 bg-white border border-gray-300 hover:text-gray-700 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-800' => !$attributes->has('class'),
    'dark:bg-gray-800 dark:border-gray-600 dark:text-gray-200 dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-gray-300 dark:hover:bg-gray-900 dark:hover:text-gray-200' => !$attributes->has('class')
]) }}>
    {{ $slot }}
</button>
@endif
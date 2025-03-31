@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-400 border border-gray-300 cursor-default leading-5 rounded-md dark:text-white dark:bg-gray-400 dark:border-gray-600">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-400 border border-gray-300 rounded-md leading-5 hover:text-white hover:bg-blue-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-blue-500 active:text-white transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:active:bg-blue-600 dark:focus:border-blue-900">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-400 border border-gray-300 rounded-md leading-5 hover:text-white hover:bg-blue-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-blue-500 active:text-white transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:active:bg-blue-500 dark:focus:border-blue-900">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-400 border border-gray-300 rounded-md leading-5 hover:text-white hover:bg-blue-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-blue-500 active:text-white transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:active:bg-blue-500 dark:focus:border-blue-900">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif

<a
    href="#"
    wire:click.prevent="toggleCategory({{ $category_id }})"
    class="m-1 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700
    @if(in_array($category_id, $selectedCategories)) bg-gray-300 dark:bg-neutral-700 @endif"
>
    {{ $category->name }}
</a>
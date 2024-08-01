<div class='px-10 md:px-20 sm:px-30 py-3'>
         <!-- Brand New  -->
        <div class="flex justify-between">
            <h2 class='font-medium text-[20px] my-3'>Brand New</h2>
            <a wire:navigate class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="">
                View all 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                  </svg>
            </a>
        </div>
        <livewire:product-listing :category_id="0" :current_product_id="0"/>

        <!-- Smartphones & laptops  -->
        <div class="flex justify-between">
            <h2 class='font-medium text-[20px] my-3'>Digital products</h2>
            <a wire:navigate class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="">
                View all 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                  </svg>
            </a>
        </div>
        <livewire:product-listing :category_id="4" :current_product_id="0"/>

        <!-- Outfits  -->
        <div class="flex justify-between">
            <h2 class='font-medium text-[20px] my-3'>Fashion and Apparel</h2>
            <a wire:navigate class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="">
                View all 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                  </svg>
            </a>
        </div>
        <livewire:product-listing :category_id="1" :current_product_id="0"/>

    </div>
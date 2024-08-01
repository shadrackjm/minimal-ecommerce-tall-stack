<div class='px-10 md:px-20 sm:px-30 py-3'>
         <!-- Brand New  -->
        @include('components.navigation.view-all',[
            'Category' => 'Brand New'
        ])
        <livewire:product-listing :category_id="0" :current_product_id="0"/>

        <!-- Smartphones & laptops  -->
        @include('components.navigation.view-all',[
            'Category' => 'Digital Products'
        ])
        <livewire:product-listing :category_id="4" :current_product_id="0"/>

        <!-- Outfits  -->
        @include('components.navigation.view-all',[
            'Category' => 'Fashion and Apparel'
        ])
        <livewire:product-listing :category_id="1" :current_product_id="0"/>

    </div>
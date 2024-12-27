<div>
    @if (view()->exists('search::livewire.form-search'))
        <livewire:search::form-search/>
    @endif
        <br>

    @if (view()->exists('category::livewire.category.category-home-page'))
        <livewire:category::category.category-home-page/>
    @endif
        <br>
        <br>
        <br>
        @if (view()->exists('productdisplay::livewire.kala.product-home-page'))
            <livewire:productdisplay::kala.product-home-page/>
        @endif
        <br>
        <br>
        <br>



</div>

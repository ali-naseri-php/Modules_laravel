<div>
    @if (view()->exists('search::livewire.form-search'))
        <livewire:search::form-search/>
    @endif
    @if (view()->exists('category::livewire.category.category-home-page'))
        <livewire:category::category.category-home-page/>

    @endif


</div>

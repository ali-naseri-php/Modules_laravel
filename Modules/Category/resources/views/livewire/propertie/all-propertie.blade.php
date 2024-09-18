<div>
    <h3>The <code>AllPropertie</code> livewire component is loaded from the <code>Category</code> module.</h3>

    @foreach($propertis as $item )

        {{$item->name}}

    @endforeach
    <div>

        {{$propertis->links()}}
    </div>
</div>

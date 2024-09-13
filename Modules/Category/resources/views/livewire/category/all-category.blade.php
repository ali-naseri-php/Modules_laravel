<div>
    <h3>The <code>AllCategory</code> livewire component is loaded from the <code>Category</code> module.</h3>

    @foreach($category as $item )

    {{$item->name}}

    @endforeach
    <div>

        {{$category->links()}}
    </div>
</div>

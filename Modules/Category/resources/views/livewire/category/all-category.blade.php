<div>
    <h3>The <code>AllCategory</code> livewire component is loaded from the <code>Category</code> module.</h3>
    @if (session('success'))
        <div class="text-green-500">
            {{ session('success') }}
        </div>
    @endif
    @foreach($category as $item )

    {{$item->name}}

    @endforeach
    <div>

        {{$category->links()}}
    </div>
</div>

<div class="container mt-4">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row mt-3">
        @foreach($category as $item)
            <div class="col-md-4 mb-3">
                <div class="card" style="background-color: white; border: 1px solid black;">
                    <img src="{{ url($item->images) }}" alt="{{ $item->name }}" class="card-img-top" style="height: 150px; object-fit: cover;">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <div class="mt-2">
                            <a href="{{'ali' }}" class="bg-blue-600 text-white py-1 px-3 rounded hover:bg-blue-500">Edit</a>
{{--                            <form action="{{ route('category.destroy', $item->id) }}" method="POST" class="inline-block">--}}
                            <form action="" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white py-1 px-3 rounded hover:bg-red-500">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="flex justify-center mt-4">
        <nav class="flex">
           {{$category->links()}}
        </nav>
    </div>
</div>

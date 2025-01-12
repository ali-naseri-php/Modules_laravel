<div class="container mt-4">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row mt-3">
        @foreach($category as $item)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-light" style="background-color: white;">
                    <img src="{{ url($item->images) }}" alt="{{ $item->name }}" class="card-img-top"
                         style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-3">{{ $item->name }}</h5>
                        <div class="d-flex justify-content-center mt-2">
                            @if(auth()->check())
                                @can('update',\Modules\Category\Models\Category::class)
                                    <a href="{{route('category.edite')}}" class="btn btn-info btn-sm mx-2">Edit</a>
                                @endcan
                                @can('delete',\Modules\Category\Models\Category::class)

                                    <form action="{{route('category.delete')}}" method="post" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                @endcan
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        <nav>
            <div class="d-flex justify-content-center mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-rounded">
                        {{-- Previous Page Link --}}
                        <li class="page-item {{ $category->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $category->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>

                        {{-- Pagination Links --}}
                        @foreach ($category->getUrlRange(1, $category->lastPage()) as $page => $url)
                            <li class="page-item {{ $category->currentPage() == $page ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        {{-- Next Page Link --}}
                        <li class="page-item {{ $category->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $category->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </nav>
    </div>
</div>

<div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @foreach($kalas as $kala)

        <p>{{$kala->name}}</p>
        <br>

    @endforeach

  <div class="flex justify-center mt-4">
        <nav class="flex">
            @if ($kalas->onFirstPage())
                <span class="disabled text-gray-500 cursor-not-allowed py-2 px-4 border border-gray-300 rounded-l">Previous</span>
            @else
                <a href="{{ $kalas->previousPageUrl() }}" class="text-blue-600 py-2 px-4 border border-gray-300 rounded-l hover:bg-blue-500 hover:text-white">Previous</a>
            @endif

            @foreach ($kalas->getUrlRange(1, $kalas->lastPage()) as $page => $url)
                @if ( $page ==  $kalas->currentPage())
                    <span class="text-white bg-blue-600 py-2 px-4 border border-gray-300">{{ $page }}</span>
                @else
                    <a href="{{ $url }}" class="text-blue-600 py-2 px-4 border border-gray-300 hover:bg-blue-500 hover:text-white">{{ $page }}</a>
                @endif
            @endforeach

            @if ($kalas->hasMorePages())
                <a href="{{ $kalas->nextPageUrl() }}" class="text-blue-600 py-2 px-4 border border-gray-300 rounded-r hover:bg-blue-500 hover:text-white">Next</a>
            @else
                <span class="disabled text-gray-500 cursor-not-allowed py-2 px-4 border border-gray-300 rounded-r">Next</span>
            @endif
        </nav>
    </div>
</div>

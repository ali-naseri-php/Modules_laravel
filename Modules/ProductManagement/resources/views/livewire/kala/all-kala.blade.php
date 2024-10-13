<div>
    @foreach($kalas as $kala)

        <p>{{$kala->name}}</p>
        <br>

    @endforeach
  <div class="flex justify-center mt-4">
        <nav class="flex">
            @if ($data->onFirstPage())
                <span class="disabled text-gray-500 cursor-not-allowed py-2 px-4 border border-gray-300 rounded-l">Previous</span>
            @else
                <a href="{{ $data->previousPageUrl() }}" class="text-blue-600 py-2 px-4 border border-gray-300 rounded-l hover:bg-blue-500 hover:text-white">Previous</a>
            @endif

            @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                @if ($page == $data->currentPage())
                    <span class="text-white bg-blue-600 py-2 px-4 border border-gray-300">{{ $page }}</span>
                @else
                    <a href="{{ $url }}" class="text-blue-600 py-2 px-4 border border-gray-300 hover:bg-blue-500 hover:text-white">{{ $page }}</a>
                @endif
            @endforeach

            @if ($data->hasMorePages())
                <a href="{{ $data->nextPageUrl() }}" class="text-blue-600 py-2 px-4 border border-gray-300 rounded-r hover:bg-blue-500 hover:text-white">Next</a>
            @else
                <span class="disabled text-gray-500 cursor-not-allowed py-2 px-4 border border-gray-300 rounded-r">Next</span>
            @endif
        </nav>
    </div>
</div>

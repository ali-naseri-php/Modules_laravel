@push('styles')
    <link rel="stylesheet" href="{{ asset('css/search/search.css') }}">
@endpush

<div class="search-container">
    <form action="{{ route('search') }}" method="post">
        @csrf
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="searchButton">
                    انتخاب نوع
                </button>
                <input type="hidden" id="category" name="value">
                <ul class="dropdown-menu" id="searchList">
                    <li onclick="selectOption('all')"><a href="#">همه</a></li>
                    <li onclick="selectOption('category')"><a href="#">دسته‌بندی</a></li>
                    <li onclick="selectOption('kala')"><a href="#">کالا</a></li>
                    <li onclick="selectOption('article')"><a href="#">مقاله</a></li>
                </ul>
            </div>
            <input type="text" class="form-control" placeholder="عبارت جستجو را وارد کنید..." id="searchText" name="name"/>
            <div class="input-group-append">
                <button class="btn btn-primary btn-lg" type="submit" id="search">جستجو</button>
            </div>
        </div>

        @if(session('searchs'))
            <ul id="search-ul">
                @foreach(session('searchs') as $search)
                    <li id="search-li">
                        <a href="#">نام: {{ $search->title }} در دسته: {{ $search->searchable_type }}</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </form>
</div>

@push('scripts')
    <script>
        function selectOption(value) {
            document.getElementById('category').value = value;
            document.getElementById('searchButton').innerText =
                value === 'all' ? 'همه' :
                    value === 'category' ? 'دسته‌بندی' :
                        value === 'kala' ? 'کالا' : 'مقاله';
        }
    </script>
@endpush

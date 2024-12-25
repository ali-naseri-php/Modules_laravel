@push('styles')
    <link rel="stylesheet" href="{{asset('css/search/search.css')}}">

@endpush
<div class="search-container">
    <form action="{{ route('search') }}" method="post">
        @csrf
        <div class="input-group input-group-lg">
            <!-- Dropdown Button -->
            <div class="input-group-prepend">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                        id="searchButton">انتخاب نوع
                </button>
                <input type="hidden" id="category" name="value">
                <ul class="dropdown-menu" id="searchList">
                    <li onclick="selectOption('all')"><a href="#">همه</a></li>
                    <li onclick="selectOption('Category')"><a href="#">دسته‌بندی</a></li>
                    <li onclick="selectOption('kala')"><a href="#">کالا</a></li>
                    <li onclick="selectOption('article')"><a href="#">مقاله</a></li>
                </ul>
            </div>
            <!-- Search Input -->
            <input type="text" class="form-control" placeholder="عبارت جستجو را وارد کنید..."
                   id="searchText" name="name"/>
            <!-- Search Button -->
            <div class="input-group-append">
                <button class="btn btn-primary btn-lg" type="submit" id="search">
                    جستجو
                </button>
            </div>
        </div>
    </form>
@push('scripts') @endpush
    <script>
        function selectOption(value) {
            document.getElementById('category').value = value;
            document.getElementById('searchButton').innerText = value === 'all' ? 'همه' :
                value === 'Category' ? 'دسته‌بندی' :
                    value === 'kala' ? 'کالا' :
                        'مقاله';
        }
    </script>
</div>


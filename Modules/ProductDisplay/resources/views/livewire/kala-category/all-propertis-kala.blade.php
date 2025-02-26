@push('styles')
    <style>
        /* استایل برای باکس دور فیلترها */
        .filter-box {
            border: 1px solid #ddd; /* خط دور */
            padding: 20px; /* فاصله داخلی */
            border-radius: 8px; /* گوشه‌های گرد */
            background-color: #f9f9f9; /* رنگ پس‌زمینه */
        }

        /* مخفی کردن فیلترها به صورت پیش‌فرض در صفحه کوچک */
        .filter-box.collapsed {
            display: none;
        }

        /* دکمه باز و بسته کردن فیلتر */
        .toggle-filter-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 14px;
        }

    </style>
@endpush

<div class="container mt-5">
    <!-- کامپوننت نمایش کالا و فیلترها -->
    <div class="row">
        <!-- Sidebar for Filters -->
        <div class="col-lg-3 col-md-4 col-sm-12">
            <button class="toggle-filter-btn" id="toggleFilterBtn">پنهان کردن فیلترها</button>
            <div class="filter-box" id="filterBox">
                <h4>فیلترها</h4>
                <form action="{{url()->current() }}" method="get">
                    <select name="q" id="">
                        <option value="2">کمترین قیمت</option>
                        <option value="3">بیشترین قیمت</option>
                        <option value="4">جدید ترین </option>
                        <option value="0">بازدید  </option>

                    </select>
                    <button type="submit">ارسال </button>
                </form>
                <br>
                <form id="filters-form"action="{{route('kala.id.properties.with',['id_category'=>request('id_category')])}}"method="get">

                    @foreach($propertis as $properti)
                        {{--                    @dd($properti)--}}
                        <!-- Color Filter -->
                        <div class="form-group mb-3">
                            <h5>{{$properti->name}}</h5>
                            <div>
                                {{--                                @dd($this->selectKalaProperti($properti->id) )--}}
                                @foreach( $this->selectKalaProperti($properti->id) as $kalaProperti)
{{--                                    @dd($kalaProperti)--}}
                                    <label><input type="checkbox" name="properties[]" value="{{$kalaProperti->name}}">{{ $kalaProperti->name}}</label>
                                @endforeach

                            </div>

                        </div>
                    @endforeach
                    <label><input type="submit" value="ارسال"> </label>
                </form>
                <br>
                <br>
                <a class="text-danger fs-1 text-decoration-none"href="{{route('kala.id.properties.no',['id_category'=>request('id_category')])}}">حذف فیلتر</a>

            </div>

        </div>

        <!-- Main Content for Products -->
        <div class="col-lg-9 col-md-8 col-sm-12">
            <h4>کالاها</h4>
            <div class="row" id="product-list">
                <!-- Product Item -->
                @foreach($kalas as $product )
                    <div class="col-md-4 mb-4 product-item" data-color="red" data-ram="8GB" data-price="3000">
                        <div class="card">
                            <img src="{{asset($product->image1)}}" style="max-height: 200px; object-fit: cover;"
                                 class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title"> نام :{{$product->name}}</h5>
                                <a class="card-text" href="{{route('show.product',['id'=>$product->id])}}">جزئیات </a>

                                <p class="card-text">قیمت:{{$product->price}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center mt-4">
                    <nav>
                        <div class="d-flex justify-content-center mt-4">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-rounded">
                                    {{-- Previous Page Link --}}
                                    <li class="page-item {{ $kalas->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $kalas->previousPageUrl() }}" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>

                                    {{-- Pagination Links --}}
                                    @foreach ($kalas->getUrlRange(1, $kalas->lastPage()) as $page => $url)
                                        <li class="page-item {{ $kalas->currentPage() == $page ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    {{-- Next Page Link --}}
                                    <li class="page-item {{ $kalas->hasMorePages() ? '' : 'disabled' }}">
                                        <a class="page-link" href="{{ $kalas->nextPageUrl() }}" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </nav>
                </div>


                <!-- Additional products can be added here -->
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        // Handle toggling the filter box visibility
        document.getElementById('toggleFilterBtn').addEventListener('click', function () {
            var filterBox = document.getElementById('filterBox');
            var button = document.getElementById('toggleFilterBtn');
            filterBox.classList.toggle('collapsed');
            if (filterBox.classList.contains('collapsed')) {
                button.textContent = 'نمایش فیلترها';
            } else {
                button.textContent = 'پنهان کردن فیلترها';
            }
        });
    </script>
@endpush

@push('styles')
    <style>
        /* استایل برای باکس دور فیلترها */
        .filter-box {
            border: 1px solid #ddd; /* خط دور */
            padding: 20px;           /* فاصله داخلی */
            border-radius: 8px;      /* گوشه‌های گرد */
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
            <button class="toggle-filter-btn" id="toggleFilterBtn">پنهان کردن دسته بندی ها</button>
            <div class="filter-box" id="filterBox">
                <h4>دسته بندی را انتخواب کنید !</h4>
                @foreach($categorys as $category)
                    <!-- Color Filter -->
{{--                @dd($category)--}}
                    <div class="form-group mb-3">
                        <h5><a href="{{route('kala.id.properties.no',['id_category'=>$category->id])}}">{{$category->name}}</a></h5>
                    </div>
                @endforeach


            </div>
        </div>

        <!-- Main Content for Products -->
        <div class="col-lg-9 col-md-8 col-sm-12">
            <h4>کالاها</h4>
            <div class="row" id="product-list">
                <!-- Product Item -->
                <div class="col-md-4 mb-4 product-item" data-color="red" data-ram="8GB" data-price="3000">
                    <div class="card">
                        <img src="http://127.0.0.1:8000/images/1733753619.jpg" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">کالای 1</h5>
                            <p class="card-text">توضیحات کالا</p>
                            <p class="card-text">قیمت: ۲۵۰۰ تومان</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 product-item" data-color="blue" data-ram="16GB" data-price="4000">
                    <div class="card">
                        <img src="http://127.0.0.1:8000/images/1733753619.jpg" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">کالای 2</h5>
                            <p class="card-text">توضیحات کالا</p>
                            <p class="card-text">قیمت: ۳۵۰۰ تومان</p>
                        </div>
                    </div>
                </div>

                <!-- Additional products can be added here -->
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        // Handle toggling the filter box visibility
        document.getElementById('toggleFilterBtn').addEventListener('click', function() {
            var filterBox = document.getElementById('filterBox');
            var button = document.getElementById('toggleFilterBtn');
            filterBox.classList.toggle('collapsed');
            if (filterBox.classList.contains('collapsed')) {
                button.textContent = 'نمایش دسته بندی ها';
            } else {
                button.textContent = 'پنهان کردن دسته بندی ها';
            }
        });
    </script>
@endpush

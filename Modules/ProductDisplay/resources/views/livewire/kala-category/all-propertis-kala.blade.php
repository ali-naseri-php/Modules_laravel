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
            <button class="toggle-filter-btn" id="toggleFilterBtn">پنهان کردن فیلترها </button>
            <div class="filter-box" id="filterBox">
                <h4>فیلترها</h4>
                <form id="filters-form">
                    <!-- Color Filter -->
                    <div class="form-group mb-3">
                        <h5>رنگ</h5>
                        <div>
                            <label><input type="checkbox" name="color" value="red"> قرمز</label><br>
                            <label><input type="checkbox" name="color" value="blue"> آبی</label><br>
                            <label><input type="checkbox" name="color" value="black"> مشکی</label>

                        </div>
                        <label><input type="submit" name="submit" value="ارسال"> </label>

                    </div>
                </form>
                <form id="filters-form">
                    <!-- RAM Filter -->
                    <div class="form-group mb-3">
                        <h5>مقدار رم</h5>
                        <div>
                            <label><input type="checkbox" name="ram" value="4GB"> ۴ گیگابایت</label><br>
                            <label><input type="checkbox" name="ram" value="8GB"> ۸ گیگابایت</label><br>
                            <label><input type="checkbox" name="ram" value="16GB"> ۱۶ گیگابایت</label>
                        </div>
                    </div>
                </form>
                <form id="filters-form">
                    <!-- Price Filter -->
                    <div class="form-group mb-3">
                        <h5>قیمت</h5>
                        <div>
                            <label><input type="checkbox" name="price" value="under1000"> زیر ۱۰۰۰ تومان</label><br>
                            <label><input type="checkbox" name="price" value="1000to3000"> ۱۰۰۰ تا ۳۰۰۰ تومان</label><br>
                            <label><input type="checkbox" name="price" value="above3000"> بالای ۳۰۰۰ تومان</label>
                        </div>
                    </div>
                </form>

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
                        <img src="{{asset($product->image1)}}" style="max-height: 200px; object-fit: cover;" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title"> نام :{{$product->name}}</h5>
                            <a class="card-text">جزئیات </a>
                            <p class="card-text">قیمت:{{$product->price}}</p>
                        </div>
                    </div>
                </div>
               @endforeach

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
                button.textContent = 'نمایش فیلترها';
            } else {
                button.textContent = 'پنهان کردن فیلترها';
            }
        });
    </script>
@endpush

@push('styles')
    <style>
        .category-img {
            width: 100px; /* عرض ثابت برای عکس */
            height: 100px; /* ارتفاع ثابت برای عکس */
            object-fit: cover; /* حفظ تناسب عکس بدون دفرمه شدن */
            border-radius: 50%; /* گرد کردن عکس */
            max-width: 100%; /* جلوگیری از بزرگ شدن عکس از اندازه والد */
            max-height: 100%; /* جلوگیری از بزرگ شدن عکس از اندازه والد */
            transition: transform 0.3s ease; /* انیمیشن برای تغییرات عکس */
        }

        .category-img:hover {
            transform: scale(1.1); /* بزرگتر کردن عکس هنگام هاور */
        }

        .view-all-btn {background-color:white ; /* رنگ دکمه هنگام هاور */
            color: #404cbf; /* رنگ متن */
            border: none; /* حذف حاشیه */
            border-radius: 25px; /* گوشه‌های گرد */
            padding: 10px 20px; /* فضای داخلی */
            font-size: 16px; /* اندازه متن */
            text-transform: uppercase; /* حروف بزرگ */
            transition: background-color 0.3s ease; /* انیمیشن تغییر رنگ */
            text-decoration: none; /* حذف خط زیر متن */
        }

        .view-all-btn:hover {
            background-color: #404cbf; /* رنگ دکمه هنگام هاور */
            color: white; /* رنگ متن */
        }
    </style>
@endpush

<div class="container mt-5">
    <!-- دکمه مشاهده همه دسته‌بندی‌ها -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark">دسته‌بندی‌های محبوب</h3>
        <a href="{{ route('category') }}" class="view-all-btn">مشاهده همه</a>
    </div>

    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-3 mb-4">
                <div class="category-card text-center shadow-lg p-3 rounded bg-light">
                    <img src="{{ asset('/'.$category->images) }}" alt="{{ $category->name }}"
                         class="category-img rounded-circle mb-3">
                    <a href="#">
                        <h5 class="category-title mt-3">{{ $category->name }}</h5>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

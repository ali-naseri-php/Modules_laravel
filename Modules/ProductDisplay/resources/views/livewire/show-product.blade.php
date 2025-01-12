<!-- resources/views/livewire/show-product.blade.php -->

<div class="container my-5">
    <div class="card shadow-lg rounded-lg">
        <!-- اطلاعات کالا -->
        <div class="card-body">
            <h2 class="card-title text-center mb-4">{{ $product->name }}</h2>

            <ul class="list-unstyled mb-4">
                <li><strong>شناسه:</strong> {{ $product->id }}</li>
                <li><strong>تاریخ ایجاد:</strong> {{ $product->created_at->format('Y-m-d H:i:s') }}</li>
                <li><strong>تاریخ آخرین به‌روزرسانی:</strong> {{ $product->updated_at->format('Y-m-d H:i:s') }}</li>
                <li><strong>توضیحات:</strong> {{ $product->explanation }}</li>
                <li><strong>قیمت:</strong> {{ number_format($product->price) }} تومان</li>
            </ul>
        </div>

        <!-- تصاویر -->
        <div class="row g-4 px-5 mb-4">
            <div class="col-md-6">
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="{{ asset($product->image1) }}" alt="{{ $product->name }}" class="img-fluid transition-transform duration-300 transform hover:scale-105">
                </div>
            </div>
            <div class="col-md-6">
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="{{ asset($product->image2) }}" alt="{{ $product->name }}" class="img-fluid transition-transform duration-300 transform hover:scale-105">
                </div>
            </div>
        </div>

        <!-- عملیات -->
        <div class="card-footer text-center">
            <button class="btn btn-warning btn-lg mx-2">ویرایش</button>
            <button class="btn btn-info btn-lg mx-2">اضافه کردن به کارت </button>
            <button class="btn btn-danger btn-lg mx-2">حذف</button>
        </div>
    </div>
</div>

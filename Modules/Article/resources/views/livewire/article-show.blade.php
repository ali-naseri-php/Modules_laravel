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


        {{--@dd($kalas)--}}
        <!-- Main Content for Products -->
        <div class="col-lg-9 col-md-8 col-sm-12">
            <h4>مقاله ها</h4>
            <div class="row" id="product-list">
                <!-- Product Item -->
                {{--                @dd($kalas)--}}
                @foreach($articles->all() as $article )
                    {{--                    @dd($product)--}}
                    <div class="col-md-4 mb-4 product-item" data-color="red" data-ram="8GB" data-price="3000">
                        <div class="card">
                            <img src="{{asset($article->image)}}" style="max-height: 200px; object-fit: cover;"
                                 class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title"> نام :{{$article->title}}</h5>
                                <a class="card-text">جزئیات </a>
                            </div>
                            <div class="card-body">
                                @if(auth()->check())
                                    @can('update',\Modules\Article\Models\Article::class)
                                        <a href="#" class="btn btn-info btn-sm mx-2">Edit</a>
                                    @endcan
                                    @can('delete',\Modules\Article\Models\Article::class)

                                        <form action="" method="post" class="d-inline-block">
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

            <!-- Additional products can be added here -->
        </div>
    </div>
</div>
</div>



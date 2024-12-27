<!-- Product Display Section -->
<div class="container mt-5">
    <!-- Header Section with View All Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark">محصولات </h3>
        <a href="{{ route('kala') }}" class="view-all-btn">مشاهده همه</a>
    </div>

    <!-- Products Grid -->
    <div class="row">
        @foreach($kala as $product)
            <div class="col-md-3 mb-4">
                <div class="product-card text-center shadow-lg p-3 rounded bg-white">
                    <img src="{{ asset('/' . $product->image1) }}" alt="{{ $product->name }}" class="product-img mb-3">
                    <h5 class="product-title">{{ $product->name }}</h5>
                    <p class="product-price mt-2">{{ $product->price }} تومان</p>
                    <a href="{{ route('home', $product->id) }}" class="btn add-to-cart-btn">مشاهده جزئیات</a>
                </div>
            </div>
        @endforeach
            <div class="d-flex justify-content-center mt-4">
                <nav>
                    <div class="d-flex justify-content-center mt-4">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-rounded">
                                {{-- Previous Page Link --}}
                                <li class="page-item {{ $kala->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $kala->previousPageUrl() }}" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>

                                {{-- Pagination Links --}}
                                @foreach ($kala->getUrlRange(1, $kala->lastPage()) as $page => $url)
                                    <li class="page-item {{ $kala->currentPage() == $page ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach

                                {{-- Next Page Link --}}
                                <li class="page-item {{ $kala->hasMorePages() ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $kala->nextPageUrl() }}" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </nav>
            </div>

    </div>

</div>

@push('styles')
    <style>
        /* General styles */
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 8px; /* گردتر شدن گوشه‌های کارت */
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .product-img {
            width: 180px;
            height: 130px;
            object-fit: cover;
            border-radius: 4px; /* گرد شدن گوشه‌های عکس */
        }

        .product-title {
            font-size: 18px;
            font-weight: bold;
        }

        .product-price {
            font-size: 16px;
            color: #28a745;
        }

        .add-to-cart-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 25px;
            text-transform: uppercase;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .add-to-cart-btn:hover {
            background-color: #0056b3;
        }


        .view-all-btn:hover {
            background-color: #3548a9;
        }
    </style>
@endpush

@push('scripts')
    <script>
        // If any interaction or JS logic is needed, add here
        console.log("Product Home Page Loaded");
    </script>
@endpush

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="card-title mb-0">اضافه کردن کالا جدید</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('kala.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if($properti)
                    <p class="text-muted mb-4">خواص دسته‌بندی را وارد نمایید:</p>

                    @foreach($properti as $item)
                        <div class="mb-3">
                            <label for="property-{{ $item->id }}" class="form-label">{{ $item->name }}</label>
                            <input type="text" class="form-control @error('propertis.'.$item->id) is-invalid @enderror" id="property-{{ $item->id }}" name="propertis[{{$item->id}}]" placeholder="{{ $item->name }}">
                            @error('propertis.'.$item->id)
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    @endforeach
                    <hr>

                    <div class="mb-3">
                        <label for="name" class="form-label">نام کالا</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="نام کالا">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">قیمت کالا</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="قیمت کالا">
                        @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="explanation" class="form-label">توضیحات کالا</label>
                        <textarea class="form-control @error('explanation') is-invalid @enderror" id="explanation" name="explanation" rows="3" placeholder="توضیحات کالا"></textarea>
                        @error('explanation')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image1" class="form-label">تصویر ۱</label>
                        <input type="file" class="form-control @error('image1') is-invalid @enderror" id="image1" name="image1">
                        @error('image1')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image2" class="form-label">تصویر ۲</label>
                        <input type="file" class="form-control @error('image2') is-invalid @enderror" id="image2" name="image2">
                        @error('image2')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">ثبت کالا</button>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>

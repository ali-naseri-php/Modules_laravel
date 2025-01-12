<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">ویرایش کالا</h5>
        </div>
        <div class="card-body">
            <p><strong>نام قبلی:</strong> {{ $kala->name }}</p>
            <p><strong>نام دسته‌بندی قبلی:</strong> {{ $category->name }}</p>

            @if($properti)
                <p class="text-muted">خواص دسته‌بندی را برای ویرایش کالا وارد نمایید:</p>

                <form action="{{ route('kala.update', ['id' => $kala->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    @foreach($properti as $item)
                        <div class="mb-3">
                            <label for="property-{{ $item->id }}" class="form-label">{{ $item->name }}</label>
                            <input type="text"
                                   class="form-control @error('propertis.' . $item->id) is-invalid @enderror"
                                   id="property-{{ $item->id }}"
                                   name="propertis[{{ $item->id }}]"
                                   placeholder="{{ $item->name }}">
                            @error('propertis.' . $item->id)
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    @endforeach

                    <hr>

                    <div class="mb-3">
                        <label for="name" class="form-label">نام کالا</label>
                        <input type="text"
                               class="form-control @error('name') is-invalid @enderror"
                               id="name"
                               name="name"
                               placeholder="نام کالا">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">قیمت کالا</label>
                        <input type="text"
                               class="form-control @error('price') is-invalid @enderror"
                               id="price"
                               name="price"
                               placeholder="قیمت کالا">
                        @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="explanation" class="form-label">توضیحات کالا</label>
                        <textarea class="form-control @error('explanation') is-invalid @enderror"
                                  id="explanation"
                                  name="explanation"
                                  rows="3"
                                  placeholder="توضیحات کالا"></textarea>
                        @error('explanation')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image1" class="form-label">تصویر 1</label>
                        <input type="file"
                               class="form-control @error('image1') is-invalid @enderror"
                               id="image1"
                               name="image1">
                        @error('image1')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image2" class="form-label">تصویر 2</label>
                        <input type="file"
                               class="form-control @error('image2') is-invalid @enderror"
                               id="image2"
                               name="image2">
                        @error('image2')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">ذخیره تغییرات</button>
                    </div>
                </form>
            @endif
        </div>
    </div>
</div>

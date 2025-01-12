<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="card-title mb-0">انتخاب دسته‌بندی</h5>
        </div>
        <div class="card-body">
            @error('id')
            <div class="alert alert-danger text-sm">{{ $message }}</div>
            @enderror
            <form action="{{ route('kala.crate') }}" method="get">
                @csrf
                <div class="mb-3">
                    <label for="id_category" class="form-label">انتخاب دسته‌بندی</label>
                    <select class="form-select @error('id_category') is-invalid @enderror" id="id_category" name="id_category" wire:model="id_category">
                        @foreach($categorys as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('id_category')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <p class="text-muted">اگر در این دسته نیست، به بعدی بروید. اگر هست، آن را انتخاب و تایید کنید.</p>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">تایید</button>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center">
                <nav>
                    {{ $categorys->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>

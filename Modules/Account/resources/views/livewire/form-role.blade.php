<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4>ایجاد نقش جدید</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('role') }}" method="POST">
                        @csrf

                        <!-- نام -->
                        <div class="form-group">
                            <label for="name">نام نقش را وارد نمایید</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mt-4">ثبت‌نام</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

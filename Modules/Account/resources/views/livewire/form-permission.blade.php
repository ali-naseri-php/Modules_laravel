<form action="{{ route('permission') }}" method="POST">
    @csrf

    <!-- نام -->
    <div class="form-group">
        <label for="name">نام دسترسی را وارد نمایید </label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>


    <button type="submit" class="btn btn-primary">ثبت‌نام</button>
</form>

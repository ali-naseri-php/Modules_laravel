<div class="container mt-5">
    <h1 class="text-center mb-4">ثبت‌نام</h1>

    <form action="{{ route('register') }}" method="POST" class="card p-4 shadow-sm">
        @csrf

        <!-- نام -->
        <div class="form-group mb-3">
            <label for="name">نام</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name') }}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <!-- ایمیل -->
        <div class="form-group mb-3">
            <label for="email">ایمیل</label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                   value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <!-- رمز عبور -->
        <div class="form-group mb-3">
            <label for="password">رمز عبور</label>
            <input type="password" name="password" id="password"
                   class="form-control @error('password') is-invalid @enderror">
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <!-- تایید رمز عبور -->
        <div class="form-group mb-3">
            <label for="password_confirmation">تایید رمز عبور</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        </div>

        <!-- دکمه ارسال -->
        <button type="submit" class="btn btn-primary w-100">ثبت‌نام</button>
    </form>
</div>

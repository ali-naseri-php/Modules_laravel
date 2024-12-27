<div class="container mt-5">
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <!-- نام -->
        <div class="form-group">
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
        <div class="form-group">
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
        <div class="form-group">
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
        <div class="form-group">
            <label for="password_confirmation">تایید رمز عبور</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        </div>

        <!-- دکمه ارسال -->
        <button type="submit" class="btn btn-primary">ثبت‌نام</button>
    </form>
</div>

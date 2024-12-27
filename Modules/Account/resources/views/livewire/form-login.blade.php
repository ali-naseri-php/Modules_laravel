<div class="container mt-5">
    <h1 class="text-center mb-4">ورود</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="card p-4 shadow-sm">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">ایمیل:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">کلمه عبور:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">ورود</button>

        <div class="text-center mt-3">
            <a href="{{ route('register') }}" class="btn btn-link">حساب کاربری ندارید؟ ثبت‌نام کنید</a>
        </div>
    </form>
</div>

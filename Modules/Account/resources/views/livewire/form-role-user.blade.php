<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4>انتخاب نقش و کاربر</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('role-user') }}" method="POST">
                        @csrf

                        <!-- انتخاب نقش -->
                        <div class="form-group">
                            <label for="selectRole">انتخاب کنید نقش را :</label>
                            <select id="selectRole" name="role" class="form-control @error('role') is-invalid @enderror">
                                <option value="" disabled selected>لطفاً یک گزینه را انتخاب کنید</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- انتخاب کاربر -->
                        <div class="form-group">
                            <label for="selectPermission">انتخاب کنید کاربر را :</label>
                            <select id="selectPermission" name="user" class="form-control @error('user') is-invalid @enderror">
                                <option value="" disabled selected>لطفاً یک گزینه را انتخاب کنید</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->email}}</option>
                                @endforeach
                            </select>
                            @error('user')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mt-4">ارسال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

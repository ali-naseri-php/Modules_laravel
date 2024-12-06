<div>
    <form action="{{ route('role-user') }}" method="POST">
        @csrf
        <div>
            <label for="selectRole">انتخاب کنید نقش را :</label>
            <select id="selectRole" name="role">
                <option value="" disabled selected>لطفاً یک گزینه را انتخاب کنید</option>
                @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
            @error('role')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="selectPermission">انتخاب کنید کاربر را :</label>
            <select id="selectPermission" name="user">
                <option value="" disabled selected>لطفاً یک گزینه را انتخاب کنید</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->email}}</option>
                @endforeach
            </select>
            @error('user')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">ارسال</button>
    </form>
</div>

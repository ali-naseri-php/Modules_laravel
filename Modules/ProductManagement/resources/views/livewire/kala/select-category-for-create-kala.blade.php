<div>


        @error('id')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <form  action="{{ route('kala.crate') }}" method="get">
            <div>
                @csrf
                <select type="hidden" wire:model="id_category" name="id_category">

                    @foreach($categorys as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <p>اگر در این دسته نیس به بعدی بروید و اگر هست آن را انتخاب کنید و تایید را بزنید</p>
                <br><br><br>
                <button type="submit">تایید</button>
            </div>
        </form>

    <div class="flex justify-center mt-4">
        <nav class="flex">
            {{$categorys->links() }}
        </nav>
    </div>
</div>

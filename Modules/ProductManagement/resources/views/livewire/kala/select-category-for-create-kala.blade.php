<div>


        @error('id')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <form   method="post">
            <div>
@csrf
                <select wire:model="category_create" name="category_create">

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

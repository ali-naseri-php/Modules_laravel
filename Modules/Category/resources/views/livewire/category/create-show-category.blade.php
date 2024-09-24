<div>
    <div>
        @error('id')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <form action=""  wire:submit="submit">
            <div>

                <select wire:model="category_create">
                    <option value="0">هیچ کدام</option>
                    @foreach($categorys as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <p>اگر در این دسته نیس به بعدی بروید و اگر هست آن را انتخاب کنید و تایید را بزنید</p>
                <br><br><br>
                <button type="submit">تایید</button>
            </div>
        </form>
        <div>
            {{$categorys->links()}}
        </div>
    </div>


    
</div>

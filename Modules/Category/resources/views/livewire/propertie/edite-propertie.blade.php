<div>


    <form action="{{route("propertie.update",['id'=>$data->id] )}}" method="post">
        @csrf
        <!-- فیلد مخفی -->
        <input type="hidden" name="id" value="{{$data->id}}">
        @method('put')
        <p> نام خواص :{{$data->name}}</p>
        @error('name')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <input type="text" wire:model="name" name="name">
        <br>


        <p>دسته بندی قبلی:  {{$data->nameCategory()}}</p>
        @error('id_category')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <select wire:model="id_category" name="id_category">

            @foreach($categorys as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <button type="submit">تایید</button>
    </form>
    <div>
        {{$categorys->links()}}
    </div>
</div>

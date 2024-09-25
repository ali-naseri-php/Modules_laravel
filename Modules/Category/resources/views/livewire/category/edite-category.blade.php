<div>
{{--    <img src="{{url($date->images)}}">--}}
    <img src="{{url($date->images)}}" alt="{{url($date->images)}}">
    <p>{{$date->name}}نام دسته بندی </p>
    <p>دسته بندی والد{{$date->name_catagory()==null?' ندارد ':$date->name_catagory()}} </p>
    <form action="{{route("category.update",['id'=>$id] )}}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf

        @error('images')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <input type="file" name="images">

        @error('name')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <input type="text" wire:model="name" name="name">
        @error('parent_category')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <select wire:model="parent_category" name="parent_category">
            <option value="-1">قبلی </option>
            @if($page==1)

                <option value="0">هیچ کدام</option>
            @endif

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

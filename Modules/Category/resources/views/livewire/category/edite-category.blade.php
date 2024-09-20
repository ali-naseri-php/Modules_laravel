<div>
    <p>{{$date->name}}نام دسته بندی </p>
    <p>دسته بندی والد{{$date->name_catagory()==null?' ندارد ':$date->name_catagory()}} </p>
    <form action="{{route("category.update",['id'=>$id] )}}"method="post">
        @method('put')
        @csrf
        @error('name')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <input type="text" wire:model="name" name="name">
        @error('parent_category')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <select wire:model="parent_category" name="parent_category">
            <option value="0">هیچ کدام</option>
            @foreach($categorys as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <button type="submit" >تایید</button>
    </form>
    <div>
        {{$categorys->links()}}
    </div>
</div>

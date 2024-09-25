<div>
    @if(is_object($category))

    <p>نام دسته بندی شما والد {{$category->name}}</p>
    @else
        <p> دسته  بندی شما زیر دسته ندارید </p>

    @endif
    <br>

        <br>


    <form action="{{route('category.store',['id'=>$id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @error('name')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <input type="text" name="name">
        @error('images')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <input type="file" name="images">
        <input type="submit">
    </form>


</div>

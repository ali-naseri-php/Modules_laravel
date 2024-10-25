<div>

    <form action="{{ route('kala.update' ,['id'=>$kala->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <p> نام قبلی {{$kala->name}}</p>
        <p> نام دسته بندی  قبلی {{$category->name}}</p>




    @if($properti)
            <p>خواص دسته بندی را وارد نمایید برا اضافه کردن تغییر کالا  </p>

            @foreach($properti as $item)
                <input type="text" name="propertis[{{$item->id}}]" placeholder="{{$item->name}}">
                @error('propertis.'.$item->id)
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>
            @endforeach
            <hr>

            <input type="text" name="name" placeholder="نام کالا">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <input type="text" name="price" placeholder="قیمت کالا">
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <input type="text" name="explanation" placeholder="توضیحات کالا">
            @error('explanation')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <input type="file" name="image1">
            @error('image1')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <input type="file" name="image2">
            @error('image2')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit">submit</button>
        @endif
    </form>
</div>

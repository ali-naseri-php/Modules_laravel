<div>
{{--    <form  action="{{ route('kala.store') }}" method="post">--}}
@csrf
@if($properti)
<p>خواص دسته بندی را وارد نمایید برا اضافه کردن کالا جدید </p>

    @foreach($properti as $item)
        <input type="text" name="propertis[{{$item->id}}]"placeholder="{{$item->name}}">
    <br>
    @endforeach
<hr>
        <input type="text" name="name">
        <input type="text" name="price">
        <input type="text" name="explanation">
        <input type="file" name="image1">
        <input type="file" name="image2">
            <button type="submit">submite</button>
{{--    </form>--}}
@endif





</div>

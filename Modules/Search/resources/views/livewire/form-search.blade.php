<div>
    <form action="{{route('search')}}" method="post">
        @csrf
        <select name="order_by" id="">
            <option value="all">all</option>
            <option value="category">category</option>
            <option value="kala">kala</option>
            <option value="article">article</option>
        </select>
        <input type="text" name="name">
        <button type="submit">submit</button>
    </form>
</div>

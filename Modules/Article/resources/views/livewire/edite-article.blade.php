<div>
    <div>

        {{$article->title }}
        <br>
        {{$article->body }}
        @error('id')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror

        <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
            <div>
                @csrf
                <input type="text" placeholder="title" name="title">
                <br>
                <textarea placeholder="body" name="body">

                        </textarea>
                <input type="file" placeholder="image" name="image">
                <br><br><br>
                <button type="submit">تایید</button>
            </div>
        </form>

    </div>


</div>

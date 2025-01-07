<a href="{{route('book.show', $book)}}">
    <div class="card" style="width: 18rem;">
        <img src="{{Storage::url($book->cover)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h1 class="card-title">{{$book->title}}</h1>

            <p class="card-text">
                Autore {{$book->author}}
            </p>
            <p class="card-text">
                {{$book->created_at}}
            </p>
        </div>
    </div>
</a>

<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>{{$book->title}}</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-4">
                <img src="{{Storage::url($book->cover)}}" alt="{{$book->title}}">
            </div>
            <div class="col-md-6 col-12">
                <h4>Artista {{$book->author}}</h4>
                <p>{{$book->plot}}</p>
            </div>
        </div>
    </div>
</x-layout>

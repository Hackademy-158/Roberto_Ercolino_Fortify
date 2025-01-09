<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Inserisci Libro</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="my-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <form action="{{route('book.store')}}" method="POST" enctype="multipart/form-data" class="p-5 shadow">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" name="title" class="form-control" id="title"  value="{{old('title')}}">
                            @error('title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">autore</label>
                            <input type="text" name="author" class="form-control" id="author"  value="{{old('author')}}">
                            @error('author')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="cover" class="form-label">cover</label>
                            <input type="file" name="cover" class="form-control" id="cover">
                            @error('file')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">prezzo</label>
                            <input type="number" step="0.01" name="price" class="form-control" id="price" value="{{old('price')}}">
                            @error('price')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <span class="input-span">
                            <label for="" class="label">piattaforme disponibili</label>
                            @foreach ($platforms as $platform)
                                <div class="col-12">
                                    <input type="checkbox" value="{{$platform->id}}" id="{{$platform->id}}"
                                        name="platforms[]">
                                    <label for="{{$platform->id}}">{{$platform->name}}</label>
                                </div>
                            @endforeach
                        </span>

                        <div class="mb-3">
                            <label for="plot" class="form-label"></label>
                            <textarea name="plot" id="plot" cols="70" rows="3">plot</textarea>
                            @error('plot')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Inserisci</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>

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
                            <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" value="{{old('title')}}">
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">autore</label>
                            <input type="text" name="author" class="form-control" id="author" aria-describedby="emailHelp" value="{{old('author')}}">
                        </div>
                        <div class="mb-3">
                            <label for="cover" class="form-label">cover</label>
                            <input type="file" name="cover" class="form-control" id="cover" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">prezzo</label>
                            <input type="number" step="0.01" name="price" class="form-control" id="price" aria-describedby="emailHelp" value="{{old('price')}}">
                        </div>
                        <div class="mb-3">
                            <label for="plot" class="form-label"></label>
                            <textarea name="plot" id="plot" cols="70" rows="3">plot</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Inserisci</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>

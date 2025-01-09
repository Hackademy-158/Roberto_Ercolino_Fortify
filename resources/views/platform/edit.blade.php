<x-layout>
    <div class="container">
        <div class="my-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <form action="{{route('platform.update', $platform)}}" method="POST" enctype="multipart/form-data" class="p-5 shadow">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome della piattaforma</label>
                            <input type="text" name="name" class="form-control" id="name"  value="{{$platform->name}}">
                        </div>
                        <div class="mb-3">
                            <h3>immagine di copertina</h3>
                            <label for="logo" class="form-label"></label>
                            <img src="{{Storage::url($platform->logo)}}" alt="">
                            <input type="file" name="logo" class="form-control" id="logo">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label"></label>
                            <textarea name="description" id="description" cols="70" rows="3" value="{{$platform->description}}">descrizione</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Modifica</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>

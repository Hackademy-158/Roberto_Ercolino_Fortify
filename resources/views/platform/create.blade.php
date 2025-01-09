<x-layout>
    <div class="container">
        <div class="my-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <form action="{{route('platform.store')}}" method="POST" enctype="multipart/form-data" class="p-5 shadow">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome della piattaforma</label>
                            <input type="text" name="name" class="form-control" id="name"  value="{{old('name')}}">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">logo</label>
                            <input type="file" name="logo" class="form-control" id="logo">
                            @error('file')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label"></label>
                            <textarea name="description" id="description" cols="70" rows="3">descrizione</textarea>
                            @error('description')
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

<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>{{$platform->name}}</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-4 me-5">
                <img src="{{Storage::url($platform->logo)}}" alt="{{$platform->title}}">
            </div>
            <div class="col-md-5 col-12 ms-5">
                <p>{{$platform->description}}</p>
                <h4>inserito da {{$platform->user->name ?? 'utente sconosciuto'}}</h4>
            </div>
            <div class="col-md-6 col-12">
                <button class="btn btn-danger">
                    <a href="{{route('platform.index')}}">Ritorna all'indice</a>
                </button>
            </div>

            <div class="d-flex">
                <a href="{{route('platform.edit', $platform)}}" class="btn btn-primary">modifica</a>
            </div>
        </div>
    </div>
</x-layout>

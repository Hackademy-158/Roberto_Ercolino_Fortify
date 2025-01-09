<x-layout>

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>Lista delle piattaforme</h1>
            </div>
        </div>
    </div>

    @if (session('platformUpdated'))
        <div class="alert alert-success">
            {{session('platformUpdated')}}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-between">
            @if (count($platforms) > 0)
                @foreach ($platforms as $platform)
                <a href="{{route('platform.show', $platform)}}" class="text-dark">
                    <div class="col-12 col-md-6">
                        <div class="card" style="width: 18rem;">
                            <img src="{{Storage::url($platform->logo)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h1 class="card-title text-dark">{{$platform->name}}</h1>

                                <p class="card-text text-dark">
                                    inserita da {{$platform->user->name}}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach

            @else

                <h3>Non sono presenti piattaforme</h3>
                <p>inseriscine una</p>

            @endif
        </div>
    </div>

</x-layout>

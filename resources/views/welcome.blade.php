<x-layout>

    @if (session('messagge'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    @if (session('platformCreated'))
        <div class="alert">
            {{session('platformCreated')}}
        </div>
    @endif

</x-layout>

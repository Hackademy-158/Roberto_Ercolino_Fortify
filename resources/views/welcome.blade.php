<x-layout>

    @if (session('messagge'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

</x-layout>

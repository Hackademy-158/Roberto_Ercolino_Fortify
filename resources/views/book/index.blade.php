<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>Lista dei libri</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-between">
            @foreach ($books as $book)
                <div class="col-12 col-md-3 m-3">
                    <x-card :book="$book"/>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>

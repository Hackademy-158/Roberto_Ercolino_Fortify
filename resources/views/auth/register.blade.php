<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrati</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <span class="text-danger fst-italic">{{$message}}</span>
                        @enderror
                      </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @error('email')
                        <span class="text-danger fst-italic">{{$message}}</span>
                      @enderror
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                      @error('password')
                        <span class="text-danger fst-italic">{{$message}}</span>
                      @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label"> Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>

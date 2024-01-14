@extends('auth.main')
@section('content')
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('doLogin') }}" method="post">
                            <div class="text-center">
                                <h4>Login</h4>
                            </div>
                            @csrf
                            <div class="mt-2">
                                <input type="name" class="form-control" placeholder="Name" name="name" autofocus>
                            </div>
                            <div class="mt-2">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="mt-2">
                                <button class="form-control btn btn-success" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

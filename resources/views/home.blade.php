@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>ID : {{ Auth::user()->id }}</p>
                    <p>Name : {{ Auth::user()->name }}</p>
                    <p>Email : {{ Auth::user()->email }}</p>    
                    <p>Phone : {{ Auth::user()->Profile->phone }}</p>
                    <p>Address : {{ Auth::user()->Profile->address }}</p>
                    <a class="btn btn-info" href="{{route('users.create')}}" >Create New Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

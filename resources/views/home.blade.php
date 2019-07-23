@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (auth()->user()->isAdmin == 1)
                        <a href="{{url('/admin')}}">Admin</a>
                    @else
                        <div class="panel-heading">Normal user</div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

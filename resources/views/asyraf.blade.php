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

                    You are logged in ASYRAF!

                    <h1>The </h1>
                    <img src="aku.jpg"  width="500" height="600">

                    <img src={{$image->path}} alt={{$image->path}}> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

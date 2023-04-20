@extends('todo.index')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
            <div class="card-body">
                <div class="card-title text-center">
                    <h3>Total Tasks</h3>
                </div>
                <p class="card-text">
                    <div class="row">
                        <div class="col-sm-4 mx-auto">
                            <div class="alert alert-primary text-center">{{ $total }}</div>
                        </div>
                    </div>
                </p>
            </div>
            </div>
        </div>
    </div>
@endsection
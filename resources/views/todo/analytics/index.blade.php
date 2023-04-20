@extends('todo.index')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
            <div class="card-body">
                <div class="card-title text-center">
                    <h3>Total Tasks Created</h3>
                </div>
                <p class="card-text">
                    <div class="row">
                        <div class="col-sm-4 mx-auto">
                            <div class="alert alert-primary text-center">{{ $createdTotal }}</div>
                        </div>
                    </div>
                </p>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
            <div class="card-body">
                <div class="card-title text-center">
                    <h3>Total Tasks Completed</h3>
                </div>
                <p class="card-text">
                    <div class="row">
                        <div class="col-sm-4 mx-auto">
                            <div class="alert alert-primary text-center">{{ $completedTotal }}</div>
                        </div>
                    </div>
                </p>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <div class="row">
                        <form action="#" method="GET">
                            <div class="row">
                                <div class="col-sm-5">
                                    <label>Date From</label>
                                    <input type="date" name="date_from"/>
                                </div>
                                <div class="col-sm-5">
                                    <label>Date To</label>
                                    <input type="date" name="date_to"/>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Get Tasks</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

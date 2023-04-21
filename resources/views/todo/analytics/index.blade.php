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
                                <div class="col mb-2">
                                    <label>Task Status</label>
                                    <select class="form-control" name="search_by" required="true" />
                                        <option value="">Please Select</option>
                                        @foreach($choices as $choice)
                                            @if ($choice->name !== 'InProgress')
                                                <option value="{{ $choice->value }}">{{ $choice->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <label>Date From</label>
                                    <input type="date" class="form-control" name="date_from"/>
                                </div>
                                <div class="col-sm-5">
                                    <label>Date To</label>
                                    <input type="date" class="form-control" name="date_to"/>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Get Results</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

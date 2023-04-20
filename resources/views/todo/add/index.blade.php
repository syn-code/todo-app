@extends('todo.index')

@section('content')
    <form action={{ route('app.task.add') }} method="POST">
        @csrf
        <input type="hidden" name="task_created" value="true" />
        <div class="row">
            <div class="col">
                <label for="task-name">Task Name</label>
                <input type="text" id="task-name" required="true" name="name" class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Add Task
                </button>
            </div>
        </div>
    </form>
@endsection
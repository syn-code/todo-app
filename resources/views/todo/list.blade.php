@extends('todo.index')

@section('content')

@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
    <div class="row">
        <table class="table table-dark">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Task Name</th>
                    <th scope="col">Task Status</th>
                    <th scope="col">Task Created At</th>
                    <th scope="col">Task Completed At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->getId() }}</td>
                        <td>{{ $task->getName() }}</td>
                        <td>{{ $task->getStatus()->name }}</td>
                        <td>{{ $task->getCreatedAt()->format('d/m/Y h:m:i') }}</td>
                        <td>{{ $task->getCompletedAt()?->format('d/m/Y h:m:i') ?? '-' }}</td>
                        <td>
                            <ul class="list-inline">
                                @if ($task->getStatus()->name !== 'Completed') 
                                <li class="list-inline-item">
                                    <form action="{{ route('app.task.complete') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="task_completed" value="true" />
                                        <input type="hidden" name="task_id" value="{{ $task->getId() }}" />
                                        <button type="submit" class="btn btn-success">Complete Task</button>
                                    </form>
                                </li>
                                @endif
                                <li class="list-inline-item">
                                    <form action="{{ route('app.task.delete') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="task_delete" value="true" />
                                        <input type="hidden" name="task_id" value="{{ $task->getId() }}" />
                                        <button class="btn btn-danger" type="submit">Delete Task</button>
                                    </form>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
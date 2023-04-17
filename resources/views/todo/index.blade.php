<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css'])
  </head>
<body>

<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{ route('app.todo_list') }}" class="nav-link active" aria-current="page">View Todo List</a></li>
        <li class="nav-item"><a href="{{ route('app.add_task') }}" class="nav-link">Add a Task</a></li>
      </ul>
    </header>
  </div>
</body>
</html>
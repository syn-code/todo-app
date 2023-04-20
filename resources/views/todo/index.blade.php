<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css'])
  </head>
<body>
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
          <li class="nav-item"><a href="{{ route('app.todo_list') }}" class="nav-link" aria-current="page">View Todo List</a></li>
          <li class="nav-item"><a href="{{ route('app.add_a_task') }}" class="nav-link">Add a Task</a></li>
          <li class="nav-item"><a href="{{ route('app.analytics') }}" class="nav-link">Analytics</a></li>
        </ul>
      </header>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
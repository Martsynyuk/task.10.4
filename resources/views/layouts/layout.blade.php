<html lang="{{ app()->getLocale() }}">
<head>
    <title>project</title>

    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/main.css') }}">
</head>
<body>
<div class="col-md-12 header">
    <a href="{{ url('/') }}" class="btn btn-link">Home</a>
    <a href="{{ url('/clients') }}" class="btn btn-link">Clients list</a>
    <a href="{{ url('/client') }}" class="btn btn-link">Add Client</a>
    <a href="{{ url('/projects') }}" class="btn btn-link">Projects List</a>
    <a href="{{ url('/project') }}" class="btn btn-link">Add Project</a>
</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>
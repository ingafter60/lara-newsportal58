<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News Portal</title>
</head>
<body>

@section('sidebar')
    <p>This is the master page</p>

    @show
    <div>
    @yield('component')
    </div>

</body>
</html>

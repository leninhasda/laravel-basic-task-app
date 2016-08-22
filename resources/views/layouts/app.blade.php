<!-- resource/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Quickstart - Basic</title>

    <!-- css and javascript -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <a href="" class="navbar-brand">Task List</a>
        </nav>

        @yield('content')
    </div>

</body>
</html>
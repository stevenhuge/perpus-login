<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\node_modules\bootstrap\dist\css\bootstrap.min.css">
    @vite ('node_modules\@fortawesome\fontawesome-free\css\all.min.css')
</head>
<body>
    @include('layouts.bar')
    <div class="content">
        @yield('content')
    </div>
</body>
</html>

<style>
    .content {
      margin-left: 250px;
      padding: 20px;
    }
</style>
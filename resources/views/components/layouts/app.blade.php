<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PT Beeping' }}</title>
</head>
<body>
    <div>
        <h1>Beeping</h1>
        @yield('content')
    </div>
</body>
</html>
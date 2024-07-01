<!-- resources/views/register.blade.php -->
<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h2>login</h2>
<div class="part1">
<form action="/login" method="post">
    @csrf
    <label for="username"><h3>User:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password"><h3>Password:</h3></label>
    <input type="password" id="password" name="password" required><br><br><br><br>
    <button type="submit">login</button>
</form>
</div>
</html>
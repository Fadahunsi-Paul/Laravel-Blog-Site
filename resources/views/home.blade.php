<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>
<body>
    @auth
    <div style="border:2px solid black;">
        <h2>Login</h2>
        <form action="/register" method='POST'>
            @csrf
            <input name="email" type="text" placeholder="Email">
            <input name="password" type="text" placeholder="Password">
            <button>Login</button>
        </form>
    </div>
    @else 

    @endauth

    <div style="border:2px solid black;">
        <h2>Register</h2>
        <form action="/register" method='POST'>
            @csrf
            <input name="name" type="text" placeholder="Name">
            <input name="email" type="text" placeholder="Email">
            <input name="password" type="text" placeholder="Password">
            <button>register</button>
        </form>
    </div>
</body>
</html>
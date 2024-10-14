<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>
<body>
    <div style="border:2px solid black;">
        <h2>Register</h2>
        <form action="/register" method='POST'>
            @csrf
            <input type="text" placeholder="Name">
            <input type="text" placeholder="Email">
            <input type="text" placeholder="Password">
            <button>register</button>
        </form>
    </div>
</body>
</html>
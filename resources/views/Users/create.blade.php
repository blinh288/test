<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create user</h2>
    <form action="/Users/create" method="post">
        @csrf
        <label for="Name">
            Name:
            <input type="text" name="name">
        </label><br><br>
        <label for="Number">
            Number:
            <input type="text" name="number">
        </label><br><br>
        <label for="Email">
            Email:
            <input type="text" name="email">
        </label><br><br>
        <label for="Birthday">
            Birthday:
            <input type="text" name="birthday">
        </label><br><br>
        <label for="Address">
            Address:
            <input type="text" name="address">
        </label><br><br>
        <label for="Image">
            Image:
            <input type="text" name="image">
        </label><br><br>
        <label for="Work">
            Work:
            <input type="text" name="work">
        </label><br><br>
        <label for="Description">
            Description:
            <input type="text" name="description">
        </label><br><br>
        <label for="Password">
            Password:
            <input type="text" name="password">
        </label><br><br>
        <button type="submit">Create user</button>
    </form>
</body>
</html>

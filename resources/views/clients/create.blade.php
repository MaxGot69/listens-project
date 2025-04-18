<!-- resources/views/clients/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить клиента</title>
</head>
<body>
    <h1>Добавить клиента</h1>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Создать клиента</button>
    </form>
</body>
</html>

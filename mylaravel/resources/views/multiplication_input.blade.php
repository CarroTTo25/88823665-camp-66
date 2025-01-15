<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center">Enter a Number for Multiplication Table</h1>
        <form action="/multiplication-table" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="number" class="form-label">Enter a Number:</label>
                <input type="number" class="form-control" id="number" name="number" placeholder="Enter a number" required>
            </div>
            <button type="submit" class="btn btn-primary">Generate Table</button>
        </form>
    </div>
</body>
</html>

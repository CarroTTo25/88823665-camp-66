<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center">Multiplication Table for {{ $number }}</h1>
        <table class="table table-bordered table-striped mt-4">
            <thead class="table-dark">
                <tr>
                    <th>Multiplier</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 12; $i++)
                    <tr>
                        <td>{{ $number }} x {{ $i }}</td>
                        <td>{{ $number * $i }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>
        <a href="/" class="btn btn-secondary mt-4">Go Back</a>
    </div>
</body>
</html>

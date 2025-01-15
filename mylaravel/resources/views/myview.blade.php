<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* ธีมธรรมชาติ */
        body {
            background: linear-gradient(135deg, #d7ffd9, #a5d6a7);
            color: #1b5e20;
            font-family: 'Georgia', serif;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: #388e3c;
            border-color: #388e3c;
            font-size: 1.2em;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #2e7d32;
            border-color: #2e7d32;
        }

        .table-dark {
            background-color: #1b5e20;
            color: white;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #e8f5e9;
        }

        .table-striped tbody tr:nth-of-type(even) {
            background-color: #c8e6c9;
        }

        .alert-danger {
            background-color: #ffccbc;
            color: #b71c1c;
            font-weight: bold;
        }

        .highlight {
            font-weight: bold;
            font-size: 1.4em;
        }

        h1 {
            font-size: 2.5em;
            font-weight: bold;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
            color: #2e7d32;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #388e3c;
        }
    </style>
</head>

<body class="py-5">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-4">
            <h1>Natural Multiplication</h1>
            <p class="text-secondary">Inspired by nature, powered by numbers</p>
        </div>

        <!-- แสดงค่า input -->
        <div class="mb-3">
            <h4>My Input: <span class="text-info highlight">{{ $myinput }}</span></h4>
            <h4>My Value: <span class="text-success highlight">{{ $myvalue }}</span></h4>
        </div>

        <!-- ฟอร์มรับ input -->
        <form method="post" action="{{ url('/mycontroller') }}" class="mb-4">
            @csrf
            <div class="mb-3">
                <input type="text" id="myinput" name="myinput" class="form-control form-control-lg" placeholder="Enter a number">
            </div>
            <button type="submit" class="btn btn-primary w-100">Generate Table</button>
        </form>

        <!-- แสดงตารางสูตรคูณ -->
        @if(isset($multiplicationTable) && count($multiplicationTable) > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center">Multiplication Table</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($multiplicationTable as $row)
                            <tr>
                                <td class="text-center">{{ $row }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @elseif($myinput)
            <div class="alert alert-danger text-center" role="alert">
                Please enter a valid number!
            </div>
        @endif
    </div>

    <footer>
        &copy; 2025 Natural Multiplication. Built with care for nature and numbers.
    </footer>

    <!-- เพิ่ม Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

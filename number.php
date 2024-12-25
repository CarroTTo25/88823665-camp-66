<!DOCTYPE html>
<html>
<head>
    <title>เลขคู่และเลขคี่</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
            background-color: #f9f9f9;
        }
        h2 {
            color: #333;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 50%;
            font-size: 16px;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #4CAF50;
            color: white;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>แสดงเลขคู่และเลขคี่ (1 ถึง 100)</h2>
    <table>
        <thead>
            <tr>
                <th>ตัวเลข</th>
                <th>ประเภท</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 100; $i++) {
                $type = ($i % 2 === 0) ? "เลขคู่" : "เลขคี่";
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$type</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

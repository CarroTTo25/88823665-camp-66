<!DOCTYPE html>
<html>
<head>
    <title>ตารางสูตรคูณแม่ 2</title>
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
    <h2>ตารางสูตรคูณแม่ 2</h2>
    <table>
        <thead>
            <tr>
                <th>แม่</th>
                <th>x</th>
                <th>ตัวคูณ</th>
                <th>=</th>
                <th>ผลลัพธ์</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $baseNumber = 2; // กำหนดแม่สูตรคูณเป็นแม่ 2
            for ($i = 1; $i <= 12; $i++) {
                $result = $baseNumber * $i;
                echo "<tr>";
                echo "<td>$baseNumber</td>";
                echo "<td>x</td>";
                echo "<td>$i</td>";
                echo "<td>=</td>";
                echo "<td>$result</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

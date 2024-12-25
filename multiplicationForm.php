<!DOCTYPE html>
<html>
<head>
    <title>ตารางสูตรคูณ</title>
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
        form {
            margin-bottom: 20px;
        }
        input[type="number"] {
            padding: 8px;
            width: 100px;
            font-size: 16px;
            margin-right: 10px;
        }
        input[type="submit"] {
            padding: 8px 16px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 10px 20px;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #4CAF50;
            color: white;
        }
        table td {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>ตารางสูตรคูณ</h2>
    <form method="POST" action="">
        <label for="baseNumber">กรอกแม่สูตรคูณ:</label>
        <input type="number" id="baseNumber" name="baseNumber" min="1" required>
        <input type="submit" value="แสดงตาราง">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // รับค่าจากฟอร์ม
        $baseNumber = intval($_POST['baseNumber']);
        echo "<h3>ตารางสูตรคูณแม่ $baseNumber</h3>";
        echo "<table>";
        echo "<tr><th>แม่</th><th>x</th><th>ตัวคูณ</th><th>=</th><th>ผลลัพธ์</th></tr>";

        // แสดงตารางสูตรคูณ
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

        echo "</table>";
    }
    ?>
</body>
</html>

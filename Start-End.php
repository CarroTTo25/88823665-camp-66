<!DOCTYPE html>
<html>
<head>
    <title>แสดงข้อมูลเลขคู่และเลขคี่</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
            background-color: #f9f9f9;
        }
        h2, h3 {
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
    <h2>แสดงข้อมูลเลขคู่และเลขคี่</h2>
    <form method="POST" action="">
        <label for="start">เริ่มต้น:</label>
        <input type="number" id="start" name="start" required>
        <label for="end">สิ้นสุด:</label>
        <input type="number" id="end" name="end" required>
        <input type="submit" value="แสดงผล">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // รับค่าจากฟอร์ม
        $start = intval($_POST['start']);
        $end = intval($_POST['end']);

        // ตรวจสอบว่าค่าที่รับมาถูกต้องหรือไม่
        if ($start > $end) {
            echo "<h3 style='color: red;'>กรุณากรอกค่าเริ่มต้นให้น้อยกว่าค่าสิ้นสุด</h3>";
        } else {
            echo "<h3>ผลลัพธ์จาก $start ถึง $end</h3>";
            echo "<table>";
            echo "<thead>";
            echo "<tr><th>ตัวเลข</th><th>ประเภท</th></tr>";
            echo "</thead>";
            echo "<tbody>";

            // แสดงข้อมูลตัวเลขและบอกว่าเป็นเลขคู่หรือเลขคี่
            for ($i = $start; $i <= $end; $i++) {
                $type = ($i % 2 === 0) ? "เลขคู่" : "เลขคี่";
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$type</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        }
    }
    ?>
</body>
</html>

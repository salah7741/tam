<?php

include_once('index.php');

// التأكد من أن القيم تم إرسالها قبل استخدامها
$clic = isset($_POST['clickk']) ? $_POST['clickk'] : '';
$use = isset($_POST['clickuser']) ? $_POST['clickuser'] : '';

// إدراج البيانات في قاعدة البيانات إذا كانت القيم غير فارغة
if (!empty($clic) && !empty($use)) {
    mysqli_query($conn, "INSERT INTO clicker (user, clic) VALUES ('$use', '$clic')");
}

// استعلام للحصول على البيانات من قاعدة البيانات
$click_num = mysqli_query($conn, "SELECT clic, user FROM clicker");

echo "<table border=1 align='center'>";
echo "<tr>";
echo "<td>المستخدم</td>";
echo "<td>العملة</td>";
echo "<td>المستخدم</td>";
echo "</tr>";

// عرض البيانات من قاعدة البيانات
while ($row = mysqli_fetch_array($click_num)) {
    echo "<tr>";
    echo "<td>" . …

// الاتصال بقاعدة البيانات
$conn = new mysqli("localhost", "root", "", "tamdb");

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استعلام SQL لجلب قيمة محددة من العمود clic
$result = $conn->query("SELECT clic FROM clicker WHERE user='ali' LIMIT 1");
}
// التأكد من وجود بيانات
if ($result->num_rows > 0) {
    // الحصول على أول صف من النتيجة
    $row = $result->fetch_assoc();
    $clic_value = $row['clic'];
} else {
    $clic_value = "لا توجد بيانات";
}

// إغلاق الاتصال
$conn->close();
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض البيانات في وسم Label</title>
</head>
<body>

    <center>
        <!-- عرض القيمة داخل وسم label -->
        <label id="counter" class="btnn"><?php echo $clic_value; ?></label>
    </center>

</body>
</html>
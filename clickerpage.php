<?php

include_once('index.php');

$clic =isset($_POST['clickk']);
$use=isset($_POST['clickuser']);

//mysqli_query($conn,"INSERT INTO `clicker`(`user`, `clic`) VALUES('iiii','$clic')" );
$click_num=mysqli_query($conn,"SELECT `clic` FROM `clicker` ");
echo "<table border=1 align='center'>";
echo "<tr>";
echo"<td>المستخدم</td>";
echo"<td>العملة</td>";

echo"</tr>";
while($row=mysqli_fetch_array($click_num))
{
  echo"<tr>";
  echo"<td>".$row['user']."</td>";
  echo"<td>".$row['clic']."</td>";

  echo"</tr>";
  }
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
        
    <style>
                    body {
                          background-color: #2b393e;
                        }
                    .btn
                    {
                      border: none;
                      padding: 150px 150px;
                      text-align: center;
                      text-decoration: none;
                      display: inline-block;
                      font-size: 90px;
                      cursor: pointer;
                      margin:5px;
                      border:gray 10px solid;
                      border-radius: 150px;
                    }

                    .btnn
                    {
                    
                    color: rgb(25, 0, 255);
                      border: none;
                      padding: 25px 100px;
                      text-align: center;
                      text-decoration: none;
                      display: inline-block;
                      font-size: 30px;
                      cursor: pointer;
                      margin:5px;
                      border:rgb(93, 51, 51) 10px solid;
                      border-radius: 50px;
                    background-color: rgb(107, 140, 170);

                    }
                    .image-button {
            background-image: url('ICON.jpg'); /* مسار الصورة */
            background-size: cover; /* يجعل الصورة تغطي الزر بالكامل */
            background-position: center;
            width: 100px; /* عرض الزر */
            height: 100px; /* ارتفاع الزر */
            border: none; /* إزالة الحواف */
            color: white; /* لون النص */
            font-size: 16px; /* حجم النص */
            cursor: pointer;
            border: none;
                      padding: 150px 150px;
                      text-align: center;
                      text-decoration: none;
                      display: inline-block;
                      font-size: 90px;
                      cursor: pointer;
                      margin:5px;
                      border:gray 10px solid;
                      border-radius: 150px;
        }

 </style>
  
</head>

<body>
   
<center>
    <br>
   
        
        <label id="counter" name="clickk" class="btnn">0</label>
        <label id="" name="clickuser" class="btnn">iiii</label>
        <br>
        <br>
        
        <button  class="image-buttoN" onclick="increment()"></button>
      

</center>

    <script>
        function increment() {
            // الحصول على العنصر الذي يحمل الـ id "counter"
         
            var counter = document.getElementById("counter");
            // تحويل قيمة العنصر إلى عدد صحيح وإضافة 1

            counter.textContent = parseInt(counter.textContent) + 1 ;
           
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب نسبة التخفيضص </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body dir="rtl">
    <form method="POST" style="margin-top: 10px;">
<label style="font-size: 24px; margin-right: 15px; margin: 0px 20px;">السعر</label>
<input type="text"  placeholder="ادخل السعر" name="c1" style="border-radius: 11px;" require>
<label style="font-size: 24px; margin: 0px 30px;">حساب نسب التخفيضص</label>
<input type="text" placeholder="ادخل نسبة التخفيض" name="c2" style="border-radius: 11px;"   require>
<button type="submit" class="btn btn-success"  name="c3" style="margin-right: 25px;"> عرض السعر بعد التخفيضص</button>

    </form>
<?php 
if (isset($_POST['c3'])) {
    if (is_numeric($_POST['c1'])==false) {
        echo '<h3 style="margin-top :30px; margin-right:25px; color: red;">بيانات  حقل السعر غير صالحة    </h3>';
    }
    if (is_numeric($_POST['c2'])==false) {                 //اذا لم تكون البياتات مش من نوع ارقام اعرض التالي 
        echo '<h3 style="margin-top :30px; margin-right:25px; color : orange;">بيانات  حقل نسبة التخفيض  غير صالحة    </h3>';

    }

    if (is_numeric($_POST['c1'])==true   && is_numeric($_POST['c2'])==true) {
        echo "<p style=margin-top;30px; margin-right;25px; color: green ;> سعر قبل التخفيض  " .$_POST['c1'].  "</p>";
        $result= $_POST['c1'] *  (100 - $_POST['c2']) /100;
        echo '<style="margin-right:30px; color:green;">  سعر بعد التخفيض          </style>'   ;
        echo "بالنسبة " . $_POST['c2'] .  "% ";
        echo "يكون  " . $result . " جنيه ";

        }
}


?>

</body>
</html>
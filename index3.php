<?php 
if (isset($_POST['send'])) {
  echo "the sum of two numbers : ";
    echo $_POST['n1'] + $_POST['n2'];
}
else if (isset($_POST['mult'])) {
    echo "the multblatcion  of two numbers : ";
    echo $_POST['n1'] * $_POST['n2'];
}
else if (isset($_POST['summ'])) {
    echo "the summtion  of two numbers : ";
    echo $_POST['n1'] - $_POST['n2'];
}
else {
    echo "the qurtion  of two numbers : ";
    echo $_POST['n1'] / $_POST['n2'];
}

?>
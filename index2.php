<?php 


?>

<form method="POST"  action="index3.php">
<main style="text-align: center;">
Number1 <input type="number"   name="n1" require style="margin-right: 30px;"/>
Number2 <input type="number" name="n2" require/>
</main>
<br>
<article style="text-align: center;">
<button  name="send" style="background: red ; color: white; margin: 20px;   font-weight: bold; padding:10px; font-size: 21px; border: red; border-radius: 11px ; border: red; cursor: pointer; " type="submit"> جمع  </button>
<button  name="mult" style="background: green ; color: white; margin: 20px;   font-weight: bold; font-size: 21px; padding:10px; border-radius: 11px ; border: red; cursor: pointer;" type="submit"> ضرب   </button>
<button  name="summ" style="background: blue ; color: white; margin: 20px;   font-weight: bold; font-size: 21px; padding:10px; border-radius: 11px ; border: red; cursor: pointer;" type="submit"> طرح  </button>
<button  name="qur" style="background:palevioletred ; color: white; margin: 20px;   font-weight: bold; font-size: 21px; padding:10px; border-radius: 11px ; border: red; cursor: pointer;" type="submit"> قسمة   </button>
</article>

</form>
<form method="POST"   >
<main style="text-align: center; margin-top: 30px;">
red <input type="radio" name="color1" value="red" style="margin-right: 15px;"/>
orange <input type="radio" name="color1" value="orange" style="margin-right: 15px;"/>
pink <input type="radio" name="color1" value="pink" style="margin-right: 15px;"/>
green <input type="radio" name="color1" value="green" style="margin-right: 15px;"/>
<button type="submit" style="padding: 9px; background: blueviolet; border-radius: 11px; cursor: pointer; border: 0px; color: white; font-weight: bold;" name="change1">change background</button>
</main>
</form>
<?php 
if(isset($_POST['change1'])) {
    echo "<style> body { background :" .$_POST['color1']. "; }  </style>";
}


?>


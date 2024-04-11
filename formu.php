$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];



echo " <br><br> A soma vale: " .($numero1+$numero2);
echo " <br><br> A subtração vale: " .($numero1-$numero2);
echo " <br><br> A divisão vale: " .round($numero1/$numero2,2);
echo " <br><br> A multiplicação vale: " .($numero1*$numero2);
echo " <br><br> $numero1 <sup>$numero2<sup/> " .pow($numero1, $numero2);
echo " <br><br> O módulo vale: " .($numero1%$numero2);
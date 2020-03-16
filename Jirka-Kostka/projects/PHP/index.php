<!DOCTYPE html>

<html lang="cs">
      <head>
          <title>
              
             Jirka Kostka ZT2A 
              
          </title>
          <meta charset="utf-8">
    </head>
    
    <body>
        <form action="index.php"> 
        <input name ="username" type ="text" value="ahoj">
        <input name ="password" type ="password" value="ahoj"><br>
                <hr>                
        
        <br>
        
        <input type ="radio" name="studuje" value = "1" > studuje<br>
        <input type ="radio" name="studuje" value = "0" checked>nestuduje<br><br>
        <hr> 
        <input type ="radio" name="pohlaví" value = "0" >muž<br>
        <input type ="radio" name="pohlaví" value = "1" >žena<br>
        <input type ="radio" name="pohlaví" value = "2" checked >buzerant<br>
        <input type ="radio" name="pohlaví" value = "3" >transvestita<br>
        <input type ="radio" name="pohlaví" value = "4" >neznámé<br>
        <input type ="radio" name="pohlaví" value = "5" >neurčité<br>
        <br><br>
        <input type ="checkbox"name="sites"value="facebook">FB
        <input type ="checkbox"name="sites"value="instagram">Ig
        <input type ="checkbox"name="sites"value="skype">Skype
        <br><br>        <br> <hr>

        <select name="vaha"> 
            <option value="0"selected>
            <option value="1">1-5</option>
            <option value="2">5-20</option>
            <option value="3">20-50</option>
            <option value="4">50-75</option>
                <option value="5">75-100</option>
                 <option value="6">100-125</option>
                  <option value="7">125-150</option>
                   <option value="8">150-175</option>
                    <option value="9">175-200</option>
                  
            
            
        </select>
        vaha
        
        <br><br>
        <hr>

        
        <input type ="file" name="foto">
        </form>


<br>


<?PHP>
 <?PHP echo date ('H:i:s');?>

<br><br><br>

<?PHP echo "Ahoj"?>

<br><br>
<?PHP $jmeno="Jirka Kostka"; echo $jmeno; ?>

<br>
<?PHP

$a = 9;
echo"<br>";
$b = 4;

echo "<br>";

echo $a+$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a-$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a*$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a/$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a+=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a-=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a*=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a/=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a!=$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a==$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a>$b;

echo "<br>";

$a = 9;
echo"<br>";
$b = 4;

echo $a<$b;

echo "<br>";
$a = 9;
echo"<br>";
$b = 4;

echo $a||$b;

echo "<br>";
$a = 9;
echo"<br>";
$b = 4;

echo $a&$b;



$text = "Chtel jsem ject taxikem, ale zasrana pojebana kunda mi rekla, 
ze ma doprdele plno. A tak jsem volal dalsimu pomrdancovi. Do pici jsem rekl. 
Ta kKunda zase neco mela. A tak jsem sel pesky. Byla mi zima a chtelo se mi kurva moc, moc srat
Cesta byla pojebane dlouha. Kdyz jsem byl par metru od baraku, tak me prepadl 
nechtlusty maniak. Rekl mi, jestli mu ho nevykourim, tak mi narve 
motorovku do prdele a osuka kundu moji dcery, matky a manzelky. Nezbyvalo mi nic
jineho, nez mu ho vykourit. A tak vytahl sveho triceticentrimetroveho dicka 
a narval mi ho me neodpanene dirky. Moc me to bolelo. Moc kurva moc. Rval jsem 
kurva na celou ulici, ale zadny debilek me neslysel. Ani ta stara devka
hajzlika ze sousedi. Nakonec to uz uchyla nebavilo, tak mi jenom podekoval a 
odesel a nikdy jsem o tom nikomu nic nerekl";
        $vulgaArr = array("zasrana", "pojebana", "kunda", "doprdele", "pomrdancovi", "pici", "Kunda", "kurva", "srat", "pojebane",
"nevykourim", "prdele", "osuka", "kundu", "vykourit", "dicka", "neodpanene",
"debilek", "devka", "uchyla");
        
        function isValidBetter($retezec, $sprostaslova) {
            
            foreach ($sprostaslova as $slovo) {
               
                if (strpos(" " . $retezec . " ", " " . $slovo . " ") !==FALSE) {
                    return TRUE;
                }
            }
            
            return FALSE;
        }

        var_dump(isValidBetter(" hovna ",["hovna"]));
      



?>


    </body>
</html>


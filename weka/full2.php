<meta charset="utf-8">
<?
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$num4 = $_POST['num4'];
echo "ข้อมูลที่คุณป้อนก็คือ".$num1." ".$num2." ".$num3." ".$num4." ";
$data = array ('left-weight,left-distance,right-weight,right-distance,class',
 '5,1,3,2,L',
 '4,2,3,1,B',
 '3,5,2,1,R',
 ''.$num1.','.$num2.','.$num3.','.$num4.',?');
$fp = fopen('balance_csv.csv', 'w');
foreach($data as $line){
 $val = explode(",",$line);
 fputcsv($fp, $val);
}
fclose($fp);
// save file csv to arff-file
// -L last set last attribute is a normial value
$cmd = 'java -classpath "weka.jar" weka.core.converters.CSVLoader -N "last" balance_csv.csv > balance_unseen_test.arff ';
exec($cmd,$output);
// run unseen data -p 5 is class attribute
$cmd1 = 'java -classpath "weka.jar" weka.classifiers.bayes.NaiveBayes -T "balance_unseen_test.arff" -l "balance.model" -p 5'; // show output prediction
exec($cmd1,$output1);
/*for ($i=0;$i<sizeof($output1);$i++)
{
 trim($output1[$i]);
 echo $output1[$i]."<br>";

 }*/

  echo count($output1)."<br>";
  echo "<br>";
  $tt = $output1[8];
  echo "<br>";
  echo "ผลลัพธ์จากการทำนายคือ".substr($tt,30);
  echo "$tt";
  echo "<br>";

?>

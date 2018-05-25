<?php
$cmd = 'java -classpath "weka.jar" weka.classifiers.trees.J48 -T "balance_unseen.arff" -l "balance.model" -p 5';
exec($cmd,$output);
for ($i=0;$i<sizeof($output);$i++)
 { trim($output[$i]);
 echo $output[$i]."<br>";
 }

 /*-p คือการบอกว่าคำเฉลยเราอยู่ที่ไหน อันนี้อยู่อันที่ 5 -l คือโหลด model มาใช้*/
?>

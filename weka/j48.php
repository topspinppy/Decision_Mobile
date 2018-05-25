<?php
$cmd = 'java -classpath "weka.jar" weka.classifiers.trees.J48 -t "glass.arff"';
exec($cmd,$output);
for ($i=0;$i<sizeof($output);$i++)
 { trim($output[$i]);
 echo $output[$i]."<br>";
 }
?>

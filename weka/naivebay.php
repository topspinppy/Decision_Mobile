<?php
$cmd = 'java -classpath "weka.jar" weka.classifiers.bayes.NaiveBayes -t "glass.arff"';
exec($cmd,$output);
for ($i=0;$i<sizeof($output);$i++)
 { trim($output[$i]);
 echo $output[$i]."<br>";
 }
?>

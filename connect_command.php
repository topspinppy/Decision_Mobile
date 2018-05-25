
    <?php
        $sex = $_POST["sex"];
        $age = $_POST["age"];
        $status = $_POST["status"];
        $income = $_POST["income"];
        $chat = $_POST["chat"];
        $social = $_POST["social"];
        $streaming = $_POST["streaming"];
        $email = $_POST["email"];
        $game = $_POST["game"];
        $internet = $_POST["internet"];
        $wifi = $_POST["wifi"];

        //transfrom Data//

        $chatnew = "";
        if($chat < 3)
        {
            $chatnew = "less3hoursperday";
        }
        else if($chat >= 3 && $chat < 5)
        {
            $chatnew = "3betweenhoursperday";
        }
        else if ($chat >= 5)
        {
            $chatnew = ">5hours";
        }
        

        $socialnew = "";
        if($social < 3)
        {
            $socialnew = "less3hoursperday";
        }
        else if($social >= 3 && $social < 5)
        {
            $socialnew = "3betweenhoursperday";
        }
        else if ($social >= 5)
        {
            $socialnew = ">5hours";
        }

        $streamingnew= "";
        if($streaming < 3)
        {
            $streamingnew = "less3hoursperday";
        }
        else if($streaming >= 3 && $streaming < 5)
        {
            $streamingnew = "3betweenhoursperday";
        }
        else if ($streaming >= 5)
        {
            $streamingnew = ">5hours";
        }

        $emailnew = "";
        if($email < 10)
        {
            $emailnew = "less10issue";
        }
        else if($email >= 10 && $email < 20)
        {
            $emailnew = "10between20issueperday";
        }
        else if ($email >= 20)
        {
            $emailnew = ">20issueperday";
        }

        $gamenew = "";
        if($game < 3)
        {
            $gamenew = "less3hoursperday";
        }
        else if($game >= 3 && $game < 12)
        {
            $gamenew = "3between12hoursperday";
        }
        else if ($game >= 12)
        {
            $gamenew = ">12hours";
        }

        $internetnew = "";
        if($internet < 3)
        {
            $internetnew = "less3hoursperday";
        }
        else if($internet >= 3 && $internet < 5)
        {
            $internetnew = "3betweenhoursperday";
        }
        else if ($internet >= 5)
        {
            $internetnew = ">5hours";
        }

        $wifinew = "";
        if($wifi == 1)
        {
            $wifinew = "NotUsed";
        }
        else if($wifi == 2)
        {
            $wifinew = "Rarelyused";
        }
        else if ($wifi == 3)
        {
            $wifinew = "FrequencyUsed";
        }
        
    ?>
    <?php
        $data = array('sex,age,status,income,chat,social,streaming,net,email,game,wifi,Class',
            'Male,15-25year,retirement,>10000,>5hours,less3hoursperday,>5hours,3betweenhoursperday,less10issue,>12hours,Rarelyused,Month/Unlimited',
            'Female,>35year,student,6000between10000,less3hoursperday,>5hours,3betweenhoursperday,less3hoursperday,>20issueperday,3between12hoursperday,NotUsed,Month/FUP',
            'Male,26-35year,working,>3000,3betweenhoursperday,3betweenhoursperday,less3hoursperday,>5hours,10between20issueperday,less3hoursperday,FrequencyUsed,Day/Week',
            'Female,26-35year,working,>3000,3betweenhoursperday,3betweenhoursperday,less3hoursperday,>5hours,10between20issueperday,less3hoursperday,FrequencyUsed,VolumeBased',
            'Male,15-25year,working,>3000,3betweenhoursperday,3betweenhoursperday,less3hoursperday,>5hours,10between20issueperday,less3hoursperday,Rarelyused,Day/Month',
            ''.$sex.','.$age.','.$status.','.$income.','.$chatnew.','.$socialnew.','.$streamingnew.','.$internetnew.','.$emailnew.','.$gamenew.','.$wifinew.',?'
        );

        $fp = fopen('model_phone_csv.csv','w');
        foreach($data as $line)
        {
            $val = explode(",",$line);
            fputcsv($fp, $val);
        }

        fclose($fp);

        $cmd = 'java -classpath "weka.jar" weka.core.converters.CSVLoader model_phone_csv.csv > phone_unseen.arff';
        exec($cmd,$output);

        $cmd1 = 'java -classpath "weka.jar" weka.classifiers.trees.J48 -T "phone_unseen.arff" -l "model_phone.model" -p 5';
        exec($cmd1,$output1);

        for($i=0;$i<sizeof($output1);$i++)
        {
            trim($output1[$i]);
        }

        if(empty($output1[10]))
        {
            echo "กำลังประมวลผล | Please Wait";
        }
        else
        {
            $returnValue = explode(':', $output1[10]);
            $returnValues = explode(" ", $returnValue[2]);
            // print_r($returnValues);
    
            $package = $returnValues[0];

            if($package == "Day/Week")
            {
                echo "แพคเกจที่เหมาะกับท่านคือ แบบรายวันหรือรายสัปดาห์";
            }
            else if($package == "VolumeBased")
            {
                echo "แพคเกจที่เหมาะกับท่านคือ แบบคิดตามระยะเวลาการใช้งาน";
            }
            else if($package == "Month/FUP")
            {
                echo "แพคเกจที่เหมาะกับท่านคือ แบบรายเดือนจำกัดการใช้งาน";
            }
            else if($package == "Month/Unlimited")
            {
                echo "แพคเกจที่เหมาะกับท่านคือ แบบรายเดือนไม่จำกัดการใช้งาน";
            }
            else
            {
                echo "ไม่มี";
            }
        }

    ?>
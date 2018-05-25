<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบสนับสนุนการตัดสินใจในการเลือกใช้แพคเกจอินเทอร์เน็ตมือถือโดยใช้ต้นไม้ตัดสินใจ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <style>
    body 
    {
        position: relative; 
        font-family: 'Kanit', sans-serif;
    }
    .col-sm-12
    {
        padding-bottom:70px;
        padding-top:32px;
    }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <a class="navbar-brand" href="#">
            <img src="fitmlogo.png" alt="Logo" style="width:50px;">&nbsp;&nbsp;
            <img src="kmutnb.png" alt="Logo" style="width:50px;">
        </a>
        ระบบสนับสนุนการตัดสินใจในการเลือกใช้แพคเกจอินเทอร์เน็ตมือถือโดยใช้ต้นไม้ตัดสินใจ<br>
        Decision Support System for Selection the Mobile Internet Package Using Decision Tree
    </nav>
    <div id="section1" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
        <center>
            <h2>
                <b>
                    คำนวณแพคเกจที่เหมาะสมกับปริมาณการใช้งานอินเตอร์เน็ต
                </b>
            </h2>
            <p>
                ง่ายๆ เพียงตอบคำถามและลากสามเหลี่ยมไปยังปริมาณกิจกรรมที่ทำในแต่ละวัน
            </p>
        </center>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <div class="row">
                <div class="col-sm-6">            
                    <div class="form-group">
                        <label for="sel1">เพศ :</label>
                        <select class="form-control" id="sex">
                            <option value="Male">ชาย</option>
                            <option value="Female">หญิง</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="sel1">ช่วงอายุของผู้ตอบแบบสอบถาม :</label>
                        <select class="form-control" id="age">
                            <option value="15-25year">15 - 25 ปี</option>
                            <option value=">35year">26 - 35 ปี</option>
                            <option value=">35year">อายุมากกว่า 35 ปีขึ้นไป</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="sel1">สถานะปัจจุบัน :</label>
                        <select class="form-control" id="status">
                            <option value="student">นักเรียน / นักศึกษา</option>
                            <option value="working">วัยทำงาน</option>
                            <option value="retirement">วัยเกษียณ</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="sel1">รายได้เฉลี่ย :</label>
                        <select class="form-control" id="income">
                            <option value=">3000">3,000 - 5,000 บาท</option>
                            <option value="6000between10000">6,000 - 10,000 บาท</option>
                            <option value=">10000">> 10,000 บาท</option>
                        </select>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="container">

            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="chat.png" alt="Logo" style="width:20px;">
                        ปริมาณการสนทนาผ่านอินเตอร์เน็ต
                    </div>
                    <input type="range" id="chat" name="chat" min="1" max="5" step="1" labels="1, 3, 5">
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="instagram.png" alt="Logo" style="width:20px;">
                        ปริมาณการใช้งาน Social Network 
                    </div>
                    <input type="range" id="social" name="social" min="1" max="5" step="1" labels="1, 3, 5">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="youtube.png" alt="Logo" style="width:20px;">
                        ปริมาณการใช้งานวีดีโอสตรีมมิ่ง
                    </div>
                    <input type="range" id="streaming" name="streaming" min="1" max="5" step="1" labels="1, 3, 5">                  
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="clip.png" alt="Logo" style="width:20px;">
                        ปริมาณการเข้าไปอ่าน E-Mail
                    </div>
                    <input type="range" id="email" name="email" min="1" max="20" step="1" labels="1, 5, 10, 15, 20">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="console.png" alt="Logo" style="width:20px;">
                        ปริมาณการเล่นเกมออนไลน์ต่อวัน
                    </div>
                    <input type="range" id="game" name="game" min="1" max="12" step="1" labels="1, 7, 12">                   
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <img src="earth.png" alt="Logo" style="width:20px;">
                        ปริมาณการท่องอินเตอร์เน็ต 
                    </div>
                    <input type="range" id="internet" name="internet" min="1" max="9" step="1" labels="1, 3, 5, 7, 9">                   
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-12">
                        <img src="antenna.png" alt="Logo" style="width:20px;">
                        ปกติใช้ Wifi ในที่ๆพบสัญญาณอยู่แล้วใช่หรือไม่
                    </div>
                    <input type="range" id="wifi" name="wifi" min="1" max="3" step="1" labels="ไม่ได้ใช้เลย, นานๆทีใช้, ใช้ทุกครั้งที่พบ">                   
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h1><center><div class="result"></div></center></h1>
                </div>
            </div>
        </div>
    </div>
    <script src='https://rawgit.com/andreruffert/rangeslider.js/develop/dist/rangeslider.min.js'></script>
    <script src="js/index.js"></script>
    <script>
        $("input").bind("change", function(){
            var sex = $("#sex").val();
            var age = $("#age").val();
            var status = $("#status").val();
            var income = $("#income").val();
            var chat = $("#chat").val();
            var social = $("#social").val();
            var streaming = $("#streaming").val();
            var email = $("#email").val();
            var game = $("#game").val();
            var internet = $("#internet").val();
            var wifi = $("#wifi").val();

        
                $.ajax({
                    type: "POST",
                    url: "connect_command.php",
                    cache: false,
                    data: "sex="+sex+"&age="+age+"&status="+status+"&income="+income+"&chat="+chat+"&social="+social+"&streaming="+streaming+"&email="+email+"&game="+game+"&internet="+internet+"&wifi="+wifi,
                    success: function(msg){
                        
                        $(".result").text(msg);
                    }
                });
        });

    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการแปลงหน่วย</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Tahoma,sans-serif;
        }

        body{
            background:linear-gradient(135deg,#dff6ff,#b8e8fc);
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .card{
            background:white;
            width:420px;
            padding:30px;
            border-radius:20px;
            box-shadow:0 8px 20px rgba(0,0,0,0.15);
            text-align:center;
        }

        h1{
            color:#0077b6;
            margin-bottom:20px;
        }

        .result{
            margin:15px 0;
            padding:15px;
            background:#f1fbff;
            border-radius:12px;
            font-size:20px;
        }

        .feet{
            color:#023e8a;
            font-weight:bold;
        }

        .meter{
            color:#0096c7;
            font-weight:bold;
        }

        a{
            display:inline-block;
            margin-top:20px;
            text-decoration:none;
            background:#0096c7;
            color:white;
            padding:10px 20px;
            border-radius:10px;
            transition:0.3s;
        }

        a:hover{
            background:#0077b6;
        }
    </style>

</head>
<body>

<?php

$foot = $_POST['foot'];
$total = $foot * 0.3048;

?>

<div class="card">
    <h1>ผลการแปลงหน่วย</h1>

    <div class="result">
        <div class="feet">
            ฟุต : <?php echo $foot; ?>
        </div>
    </div>

    <div class="result">
        <div class="meter">
            เมตร : <?php echo number_format($total, 4); ?>
        </div>
    </div>

    <a href="index.php">⬅ กลับหน้าแรก</a>
</div>

</body>
</html>
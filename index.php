<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>แปลงหน่วยฟุต</title>

<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family: Tahoma, sans-serif;
    }

    body{
        background: linear-gradient(135deg,#dff6ff,#b8e8fc);
        min-height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
    }

    .container{
        background:white;
        width:400px;
        padding:30px;
        border-radius:20px;
        box-shadow:0 8px 20px rgba(0,0,0,0.15);
    }

    h1{
        color:#0077b6;
        text-align:center;
        margin-bottom:25px;
        font-size:26px;
    }

    .info{
        text-align:center;
        color:#555;
        margin-bottom:20px;
        font-size:15px;
    }

    label{
        display:block;
        margin-bottom:8px;
        color:#023e8a;
        font-weight:bold;
    }

    input[type="text"]{
        width:100%;
        padding:12px;
        border:2px solid #90e0ef;
        border-radius:10px;
        outline:none;
        font-size:16px;
        margin-bottom:20px;
    }

    input[type="text"]:focus{
        border-color:#0077b6;
    }

    input[type="submit"]{
        width:100%;
        padding:12px;
        background:#0096c7;
        color:white;
        border:none;
        border-radius:10px;
        font-size:16px;
        cursor:pointer;
        transition:0.3s;
    }

    input[type="submit"]:hover{
        background:#0077b6;
        transform:translateY(-2px);
    }

    .footer{
        text-align:center;
        margin-top:15px;
        color:#666;
        font-size:13px;
    }
</style>

</head>
<body>

<div class="container">
    <h1>แปลงหน่วยฟุต</h1>

    <div class="info">
        งานที่ 2 ศุภชัย BIT.2/3 เลขที่ 38
    </div>

    <form action="result.php" method="post">
        <label>กรอกจำนวนฟุต</label>
        <input type="text" name="p_name" placeholder="เช่น 10">

        <input type="submit" value="คำนวณ">
    </form>

    <div class="footer">
        ระบบคำนวณหน่วยฟุต
    </div>
</div>

</body>
</html>
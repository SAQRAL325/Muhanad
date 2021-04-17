<?php
$ GithubRawURI = "https://raw.githubusercontent.com/SAQRAL325/Muhanad/index.php”؛
error_reporting(0);

ini_set('display_errors', 0);

require_once('connect1.php');
if(isset($_POST) & !empty($_POST)){
 $username = mysqli_real_escape_string($connection, $_POST['username']);
 $Class = mysqli_real_escape_string($connection, $_POST['Class']);

 $sql = "SELECT * FROM `login` WHERE username='$username' AND Class='$Class'";
 $get_news_sql = "SELECT * FROM `login` WHERE username='$username' AND Class='$Class'";
 $get_news_sql = mysqli_query($connection, $get_news_sql);
 if ($row = mysqli_fetch_array($get_news_sql)) {

 }
 $result = mysqli_query($connection, $sql);
 $count = mysqli_num_rows($result);
 if($count == 1){
  $_SESSION['username'] = $username;
 }else{

  $fmsg = "<h1 id='sa'> لم يتم اضافة الطالب </h1>";

  
 }
}
$usernamee = $row['username'];
$Degrea = $row['Degree'];

if($Degrea >= 1){
  $Degre = $row['Degree'];
}else{
  $Degre="لم يتم رصد الدرجة لهاذا الطالب";
}

if(isset($_SESSION['username'])){
 $smsg = "<h1 id='sa'> الطالب متاح </h1>";
 echo "<h1 id='se'>  الاسم : $usernamee الصف   </h1>";
 echo "<h1 id='se'> $Class:   </h1>";
 if($Degrea <= 0){
 echo "<h1 id='se'> الدرجة : $Degre     </h1>";
 }else{
  echo "<h1 id='se'>  $Degre   : الدرجة </h1>";
 }

} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
    <meta content="UTF-8" http-equiv="encoding">
    <link rel="stylesheet" href="css/styles1.css">
    <link rel="icon" href="imgs/GE.png">
    <title>مجموع الدرجات</title>
</head>
<body>
<a href="register1.php"><input class="cat w" type="button" value="تسجيل طالب"></a>
    <h1 id="value4"><em>حساب درجة يوم الحفظ </em></h1><br/><br/>
    <input type="text" name="resut" id="value9" class="input value9"  placeholder="درجة ايام الحفظ" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resutl" id="resutl" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>

    <br/><input type="text" name="resut" id="value9" class="input valuea"  placeholder="درجة ايام الحفظ" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resutl" id="resuta" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>

    <br/><input type="text" name="resut" id="value9" class="input valueb"  placeholder="درجة ايام الحفظ" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resutl" id="resutb" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>

    <br/><input type="text" name="resut" id="value9" class="input valuec"  placeholder="درجة ايام الحفظ" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resut" id="resutc" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>

    <br/><input type="text" name="resut" id="value9" class="input valued"  placeholder="درجة ايام الحفظ" maxlength="1000" cols="25"
    rows="6" required> 
    <input type="text" disabled="disabled" name="resut" id="resutd" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/><br/>

    <input type="text" disabled="disabled" name="resut" id="resute" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>
    <p><em>ملاحظه *<br/>اذا كان هناك صفر ارجاء عدم تخطيه الرجاء كتابة الصفر </em></p><br/><br/>


    <img src="imgs/GE.png" id="logo">
    <h1 id="value3"><em>حساب درجة اسبوع الحفظ </em></h1><br/><br/><br/><br/><br/>
    <input type="text" name="resut" id="value3" class="input value3"  placeholder="درجة الاسبوع" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resut" id="resut" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/><br/>

    <br/><input type="text" name="resut2" id="value3" class="input value4"  placeholder="درجة الاسبوع" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resut2" id="resut2" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>

    <br/><input type="text" name="resut3" id="value3" class="input value5"  placeholder="درجة الاسبوع" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resut" id="resut3" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>

    <br/><input type="text" name="resut4" id="value3" class="input value6"  placeholder="درجة الاسبوع" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resut" id="resut4" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>

    <br/><input type="text" name="resut5" id="value3" class="input value7"  placeholder="درجة الاسبوع" maxlength="1000" cols="25"
    rows="6" required>
    <input type="text" disabled="disabled" name="resut5" id="resut5" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/>

    <br/><input type="text" name="resut6" id="value3" class="input value8"  placeholder="درجة الاسبوع" maxlength="1000" cols="25"
    rows="6" required> 
    <input type="text" disabled="disabled" name="resut6" id="resut6" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/><br/>

    <input type="text" disabled="disabled" name="resut7" id="resut7" placeholder="النتيجة" maxlength="1000" cols="25"
    rows="6" required><br/><br/>
    <p><em>* ملاحظه<br/>اذا كان هناك صفر ارجاء عدم تخطيه الرجاء كتابة الصفر </em></p><br/><br/>



    <br/><h1><em>حساب درجات اختبار الحفظ </em></h1><br/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <form action="PayslipServlet" method="get">
        <input type="text" name="name" id="name" class="input valuel" placeholder="اسم الطالب" maxlength="1000" cols="25"
        rows="6" required><br/>
        <input type="text" name="lname" id="lname" class="input valuel" placeholder="الصف" maxlength="1000" cols="25"
        rows="6" required><br/>
        <input type="text" name="resul" class="input value1"  placeholder="درجة الاسابيع" maxlength="1000" cols="25"
        rows="6" required>
        =  <input type="text" disabled="disabled" name="resul" id="resul"  placeholder="النتيجة" maxlength="1000" cols="25"
        rows="6" required><br/>
        <input type="text" name="resu" class="input value2"  placeholder="درجة الاختبار" maxlength="1000" cols="25"
        rows="6" required>
        =  <input type="text" disabled="disabled" name="resu" id="resu" placeholder="المجموع النهائي" maxlength="1000" cols="25"
        rows="6" required><br/>
        <span id="result" maxlength="1000" cols="25"
       rows="6" required>المجموع</span>
        <br>
      <input class="cat" type="button" value="إظهار النتيجة" onClick="pr()">
      </form>
      <br>




      <div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <h1 id="asa" class="form-signin-heading">استعلام عن طالب</h1>
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"></span>
    <input id="namea" type="text" name="username" class="form-control" placeholder=" اسم الطالب ثلاثي" required>
  </div>
  <label for="inputClass" class="sr-only"></label>
        <select id="lnamea" name="Class" class="custom-select" style="width:200px;">
          <option value=" "></option>
          <option value="3/1">1/ثالث متوسط</option>
          <option value="3/2">2/ثالث متوسط</option>
          <option value="3/3">3/ثالث متوسط</option>
          <option value="3/4">4/ثالث متوسط</option>
          <option value="3/5">5/ثالث متوسط</option>
          <option value="3/6">6/ثالث متوسط</option>
          <option value="3/7">7/ثالث متوسط</option>
          <option value="2/1">1/ثاني متوسط</option>
          <option value="2/2">1/ثاني متوسط</option>
          <option value="2/3">1/ثاني متوسط</option>
          <option value="2/4">1/ثاني متوسط</option>
          <option value="2/5">1/ثاني متوسط</option>
          <option value="2/6">1/ثاني متوسط</option>
          <option value="2/7">1/ثاني متوسط</option>
          <option value="1/1">1/اولى متوسط</option>
          <option value="1/2">2/اولى متوسط</option>
          <option value="1/3">3/اولى متوسط</option>
          <option value="1/4">4/اولى متوسط</option>
          <option value="1/5">5/اولى متوسط</option>
          <option value="1/6">6/اولى متوسط</option>
          <option value="1/7">7/اولى متوسط</option>
        </select><br>

        <button class="btn btn-lg btn-primary btn-block cat" id="asaa" type="submit">استعلام</button>
</form>
</body>

<br><br><br><br><br><br><br><br>
<a href="logout.php"><input class="cat" type="button" value= "تسجيل خروج"></a>


<script src="index.js"></script>
<script src="index1.js"></script>

<section id="wsfoter">
    <p> ©جميع الحقوق محفوظة  لصاحب الموقع</p>
    <p>Email: <a href="mailto:muhana2018.hg@icloud.com">muhana2018.hg@icloud.com</a></p>
    <a href="index1.php"><input class="cate" type="button" value="اضغط هنا لتقييم"></a>
</section>
</html>

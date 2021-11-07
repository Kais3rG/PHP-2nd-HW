<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <style media="screen">
  @import url(http://fonts.googleapis.com/css?family=Roboto:400,700,300);

#name{
    text-align: center;
    color: white;
    
}
body {
  font-family: "Roboto", sans-serif;
  background:#d2eaf1;

}

.circle-wrap {
  margin: 150px auto;
  width: 150px;
  height: 150px;
  background: #fefcff;
  border-radius: 50%;
  border: 1px solid #cdcbd0;
}

.circle-wrap .circle .mask,
.circle-wrap .circle .fill {
  width: 150px;
  height: 150px;
  position: absolute;
  border-radius: 50%;
}

.circle-wrap .circle .mask {
  clip: rect(0px, 150px, 150px, 75px);
}

.circle-wrap .inside-circle {
  width: 122px;
  height: 122px;
  border-radius: 50%;
  background: #d2eaf1;
  line-height: 120px;
  text-align: center;
  margin-top: 14px;
  margin-left: 14px;
  color: #1e51dc;
  position: absolute;
  z-index: 100;
  font-weight: 700;
  font-size: 2em;
}

.mask .fill {
  clip: rect(0px, 75px, 150px, 0px);
  background-color: #227ded;
}

    </style>
</head>
<body style="text-align:center">
    <div class="name">
        <p style="font-size:50px; color:red">Love calculator</p>
    <form action="new2.php" method="post">
        <pre>



        </pre>
        <input type="text" placeholder="First Name" name="first">
        <br>
        <br>
        <input type="text" placeholder="Second Name" name="second">
        <br>
        <br>
        <input type="submit" name="Submit">
        <pre>






        
        </pre>
    </form>
    </div>
    <?php
    if(!empty($_POST["first"]) and !empty($_POST["second"])) {
        echo("<h1 id='name'> ".$_POST["first"]." & ".$_POST["second"]."</h1><br>");
        $rand = rand(1,100);
    ?>
    <div class="circle-wrap" style="margin-top:5px">
        <div class="circle">
          <div class="mask full">
            <div class="fill"></div>
          </div>
          <div class="mask half">
            <div class="fill"></div>
          </div>
          <div class="inside-circle">
          <?php
  echo ("$rand");
  echo ("%");
}
?>
          </div>
        </div>
      </div>
    
</body>
</html>

<?php
    $data = file("../assets/sheet.csv");
    //print_r($data);
?>
<!DOCTYPE html>    
<html>    
<head>    
        <title>MUSTARD</title>    
  <style type="text/css">    
        body    
        {    
          font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;    
          font-size: 100%;    
          margin: 50px 20%;
          color: #333;  
        }    
  
        h1 {
            font-size: 50px;
            text-align: center;
        }

        div.calendarDate{    
            font-size:1em; /*change calendarIcon size */    
            display: inline-block;  
            margin: 20px;  
            position: relative;    
            width: 10em;    
            height: 10em;    
            background-color: #fff;                  
            border-radius: 0.7em;    
            -moz-border-radius: 0.7em;                        
            box-shadow: 0px 15px 40px -15px #3d3a3b;   
            overflow: hidden;
            transition: all 0.3s ease-out;
            cursor: pointer;
        }
        
        div.calendarDate:hover {
            box-shadow: 0px 15px 50px -15px #3d3a3b;
            transform: scale(1.1);
        }

        div.calendarDate p {
            font-size: 25px;
            margin-top: 0px;
        }
  
        div.calendarDate *    
        {    
          display: block;    
          width: 100%;    
          font-size: 1em;    
          font-weight: bold;    
          font-style: normal;    
          text-align: center;    
        }    
  
        div.calendarDate strong    
        {    
          position: absolute;    
          top: 0;    
          padding: 0.4em 0;    
          color: #fff;    
          background-color: #19aaaa;    
          border-bottom: 1px dashed #ddd;    
          box-shadow: 0 2px 0 #19aaaa;    
        }    
        div.calendarDate em    
        {    
          position: absolute;    
          bottom: 0em;    
          color: #fff;    
          padding-top:.2em;    
          height: 1.6em;    
          background-color: #19aaaa;    
  
        }    
        div.calendarDate span    
        {    
          font-size: 2.8em;    
          letter-spacing: -0.05em;    
          padding-top: 0.65em;    
          color: #2f2f2f;    
        }    
  
 </style>    
</head>    
  
<body>   
    <h1>MUSTARD</h1>
    <hr>
        <?php
            for ($i=1; $i < count($data); $i++) {
                $calendar = explode(',', $data[$i]);
                echo "<div class='calendarDate'>    
                        <em>".date('D', strtotime($calendar[1]))."</em>    
                        <strong>".date('F', strtotime($calendar[1]))."</strong>    
                        <span>".date('j', strtotime($calendar[1]))."</span>
                        <b><i>$".$calendar[0]."</i></b>
                    </div>";
            }
        ?>
    <hr>  
</body>    
</html> 
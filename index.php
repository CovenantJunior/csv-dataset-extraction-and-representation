<!DOCTYPE html>    
<html>    
<head>    
        <title>EXTRACTIONS</title>    
  <style type="text/css"> 
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

        /* base styles */
        * {
          margin: 0;
          font-family: "Quicksand";
          color: #333;
        }
           
        body    
        {    
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
            display: inline-grid;  
            margin: 20px;  
            position: relative;    
            width: 20em;    
            height: 20em;    
            background-color: #fff;                  
            border-radius: 0.7em;    
            -moz-border-radius: 0.7em;                        
            box-shadow: 0px 15px 40px -15px #3d3a3b;   
            overflow: hidden;
            transition: all 0.3s ease-out;
            cursor: pointer;
            text-align: center;
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
        div.wrap {
          text-align: center
        }
        div.calendarDate button {
          background: #19aaaa;
          color: #fff;
          border: 0;
          padding: 8px;
          cursor: pointer;
          border-radius: 10px;
        }
        img {
          margin-top: 50px
        }   
  
 </style>    
</head>    
  
<body>   
    <h1>EXTRACTIONS</h1>
    <hr>
    <div class='wrap'>
      <div class='calendarDate' onclick="location='prices'">  
        <strong>Prices</strong>
        <span><img src="assets/prices.png" alt=""></span>
      </div>
      <div class='calendarDate' onclick="location='chart/plot'">  
        <strong>Chart</strong>    
        <span><img src="assets/chart.png" alt=""></span>
      </div>
    </div>
      
    <hr>  
</body>    
</html>
<script src="jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {$('html').find('a[title="Free Web Hosting with PHP5 or PHP7"]').html('');});
</script>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hier entsteht <? echo $_SERVER['HTTP_HOST']; ?></title>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <style>
        html {
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to bottom right,#792508 0,#79290E 44%,#C63C0D 100%);
            color: #fff;
            font-family: 'Titillium Web', sans-serif;
            font-style: normal;
        }
        .the-box {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }
        .the-title {
            padding:5px;
                font-size: 3em;
            text-align: center;
        }
    </style>
  </head>
  <body>
    <div class="the-box">
        <div class="the-title"><? echo $_SERVER['HTTP_HOST']; ?> ;)</div>
    </div>
  </body>
</html>

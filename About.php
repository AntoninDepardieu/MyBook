<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
    <style>
        #RETOUR{
            display: none;
        }
        #filtre{
            background-color: aqua;
            z-index: 100;
        }
        #portrait{
            display: flex;
            position: relative;
            margin: 0 0;
            width: 100%;
        }
        .section2{
            justify-self: start;
            display: flex;
            width: 100%;
            border : 1px solid rgba(76, 163, 41, 0);
            overflow: hidden;
        }

    </style>
</head>
<body>
    <?php include"header.php"; ?>
    <section class="section2">
    <a href="index.html" id="RETOUR">RETOUR</a>
    <img id="portrait" src="CV.jpg">
    </section>
</body>
</html>
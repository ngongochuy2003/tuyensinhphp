<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     
        button{
           position: absolute;
           top: 50%;
           left : 50%;


        }
        #container{
            top: 0;
            left: 0;
            width:100vw;
            height: 100vh;;
        }
        @keyframes move{
            0%{
                opacity: 0;
                transform: translateY(0);
            }10%{
                opacity: 1;
            }90%{
                opacity: 1;
            }100%{
                opacity: 0;
                transform: translateY(50vh);
            }

        }
    </style>
</head>
<body>
    <div id = "container"></div>
<script src="index.js"></script>
    <button>huy</button>
</body>
</html>
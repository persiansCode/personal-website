<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            position: absolute;
            height:20rem;
            width:20rem;
            border : 1px solid blue;

        }
        .child{
             display: inline-block;
            position:absolute;
            top:calc(100% - 5rem);
            background-color: red;
            will-change: top;
            transition: all 2.5s ease;
            opacity:0;
            width: 5rem;
            height:5rem;

        }
        .container:hover .child{
            opacity:1;

            top : 0;

        }
    </style>
</head>
<body>
      <div class="container ">
        <div class="child"></div>
      </div>
</body>
</html>
<?php /**PATH G:\programming\code\liara\resources\views\components\modals\filter-modal.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>my name is {{$name}}</h1>
    <h1>my age is {{$age}}</h1>
    <form action="send" method="post">
      @csrf 

        name
         <input type="text" name="myname" id="myname"> <br>
        <input type="submit" value="send">


    </form>
</body>
</html>

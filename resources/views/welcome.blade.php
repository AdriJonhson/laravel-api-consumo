<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
    $.ajax('http://laravel-api-dois.local/api/').done(function () {
        alert('Success');
    });
</script>


</body>
</html>
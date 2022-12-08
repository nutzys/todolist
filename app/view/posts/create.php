<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="<?=URLROOT?>/posts/store" method="post">
        Title:<input type="text" name="title" placeholder="Title">
        Description:<input type="text" name="description" placeholder="Desc">
        End-Date:<input type="date" name="end">
        <button>Create</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="<?=URLROOT?>/posts/update" method="post">
        <input type="text" name="title" value="<?=$data['title']?>">
        <input type="text" name="description" value="<?=$data['description']?>">
        <input type="date" name="end">
        <input type="hidden" name="id" value="<?=$data['id']?>">
        <button>Save</button>
    </form>
</body>
</html>
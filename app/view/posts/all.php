<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
</head>
<body>
    <?php foreach($data['posts'] as $post):?>
        Title: <?= $post->title?>
        Desc: <?= $post->description?>
        Date: <?= $post->created?>
        End-Date: <?= $post->end?>
        By: <?= $post->name?>
        <form action="<?=URLROOT?>/posts/edit/<?=$post->id?>" method="post">
            <button>Edit</button>
        </form>
        <form action="<?=URLROOT?>/posts/delete/<?=$post->id?>" method="post">
            <button>Delete</button>
        </form>
    <?php endforeach;?>
    <a href="<?=URLROOT?>/posts/create">Create</a>
</body>
</html>
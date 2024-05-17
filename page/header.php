<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <?php
        if(@$type==1)
        {?>
              <link rel="stylesheet" href="<?=$action->helper->loadcss('cv_content_1.css')?>">
               <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
               <?php
        }
        if(@$type==2)
        {
            ?>
            <link rel="stylesheet" href="<?=$action->helper->loadcss('cv_content_2.css')?>">
    <script src="<?=$action->helper->loadjs('cv_content_2.js')?>"></script>
            <?php
        }
     ?>
    <link rel="stylesheet" href="<?=$action->helper->loadcss('main.css')?>">
    <link rel="icon" href="<?=$action->helper->loadimage('logo.png')?>">
    <title><?=@$title?></title>
</head>
<body>

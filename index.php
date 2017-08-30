<?php
$data = file_get_contents('https://www.codeschool.com/users/nikipentium.json');
#var_dump($data);
$json_data = json_decode($data,true);
#var_dump($json_data['courses']['completed']);
$courses = $json_data['courses']['completed'] 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $json_data['user']['username'] ?>'s badges</title>
    </head>
    <body>
        <?php
        foreach ($courses as $course) {
            echo '<div>';
            echo '<img src="'.$course["badge"].'"/><br>';
            echo '<a href="'.$course["url"].'">'.$course["title"].'</a><br>';
            echo '</div>';
        }
        ?>
    </body>
</html>
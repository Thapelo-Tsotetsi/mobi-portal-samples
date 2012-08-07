<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $data->name = $_POST["name"];
            $data->surname = $_POST['surname'];
            $data->checkbox = $_POST['checkbox'];

            print('Name: ' . $data->name . '<br />');
            print('Surname: ' . $data->surname . '<br />');
            print('Checkbox: ' . $data->checkbox);
        ?>
        <br /><br />
        <a href="form.php">Back</a>  | <a href="index.php">Home</a>
    </body>
</html>

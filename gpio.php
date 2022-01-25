<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPIO led control</title>
</head>
<body>
    <section class=LedOnOff>
        <h2>Led Control</h2>
        <form method="get" action="gpio.php">
            <input type="submit" value="ON" name="on">
            <input type="submit" value="OFF" name="off">
        </form>
    </section>

    <?php
        $setmode21 = shell_exec("/usr/local/bin/gpio -g mode 21 out");
        if(isset($_GET['on'])){
            $gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 1");
            echo 'LED is on!';
        }
        else if(isset($_GET['off'])){
            $gpio_off = shell_exec("/usr/local/bin/gpio -g write 21 0");
            echo 'LED is off!';
        }
    ?>

</body>
</html>
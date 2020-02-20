<!DOCTYPE html>
<html>
    <head>
        <title>Results Page</title>
    </head>
    <body>
        <div>
            <p>
                These are the GET key:value pairs:<br />
                <?php print_r('fruit:' . htmlspecialchars($_GET['fruit']));?>
                <br />
                <?php print_r('asr:' . htmlspecialchars($_GET['asr']));?>
            </p>
            <p>
                OR
            </p>
            <p>
                <?php print_r($_GET);?>
            </p>
        </div>
        <div>
            <!-- <br>
            <br>
            <br>
            <br> -->
            <p>
                These are the POST key:value pairs:<br />
                <?php print_r('fruit:' . htmlspecialchars($_POST['show']));?>
                <br />
                <?php print_r('asr:' . htmlspecialchars($_POST['game']));?>
            </p>
            <p>
                OR
            </p>
            <p>
                <?php print_r($_POST);?>
        </div>
    </body>
</html>
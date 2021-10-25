<!DOCTYPE html>
<html>
    <head>
        <title>Confirmation submission</title>
    </head>
    <body>
        <div>
            <?php
                if(isset($_GET["id"]) && $_GET["id"] != 0):
            ?>
                <p>Your application has been submitted successfully!</p>
                <p>Your application id is <?php echo $_GET["id"]; ?></p>
            <?php
                else:
            ?>
                <p style="color: red;">Your application submission failed!<br>Please check your given information and submit again.</p>
            <?php
                endif;
            ?>
            <p><a href="index.php">Click here</a> to continue</p>
        </div>
    </body>
</html>
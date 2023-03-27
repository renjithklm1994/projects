<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style1.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="js/bootstrap.min.js" />
</head>

<body>
    <form method="get" action="ex.php">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 header" style="background:white"></div>
            </div>
            <div class="row">
                <div class="col-3 nav" style="background:white"></div>
                <div class="col-3 article" style="background:white">

                    <div class="box">
                        <div class="txt">
                            <h1 style="background:blue">Renjith</h1>
                        </div>
                        <div class="messages" id="m">
                            <?php

                            if (file_exists("chatlist")) {
                                $file = fopen("chatlist", "r");
                                $content = fread($file, filesize("chatlist"));
                                fclose($file);
                                echo nl2br($content);
                            }
                            ?>


                        </div>
                        <div class="footer">
                            <textarea type="text" name="msg" cols="60" rows="4" id="t">
                           </textarea>
                            <input type="submit" id="a" value="submit" id="btn1">
                        </div>

                    </div>
                </div>
                <div class="col-3 article1" style="background:white">
                    <div class="box1">
                        <div class="txt1">
                            <h1 style="background:blue">Ram</h1>
                        </div>
                        <div class="messages1" id="m1">
                            <?php

                            if (file_exists("chatlist")) {
                                $file = fopen("chatlist", "r");
                                $content = fread($file, filesize("chatlist"));
                                fclose($file);
                                echo nl2br($content);
                            }
                            ?>

                                                  </div>
                        <div class="footer1">
                            <form name="form1">
                                <textarea type="text" name="msg1" cols="60" rows="4" id="t1">
                    </textarea>
                                <input type="submit" id="b" value="submit" id="btn">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
   
</body>

</html>
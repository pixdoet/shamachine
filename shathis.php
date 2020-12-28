<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>HaSHed Text</title>
        </head>
        <body style="font-family:Arial;font-size:30px;text-align:Center">
                <h3>Fuhon HaSH machine</h3>
                <div id="ogholder">
                        <p>
                                Your original text is: <br> <?php echo $_POST['inputtext'];?>
                        </p>
                </div>
                <div id="sha1holder">
                        <p>
                                SHA1: <?php echo sha1($_POST['inputtext']);?>
                        </p>
                </div>
                <div id="MD5holder">
                        <p>
                                MD5: <?php echo md5($_POST['inputtext']);?>
                        </p>
                </div>
                <p style="font-size:14px;">
                        HaSH machine is licensed under the GNU license. Visit our <a href="https://github.com/pixdoet/shamachine">Github </a>for more info.</p>
        </body>
</html>



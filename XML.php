<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $myXMLData = "<?xml version = '1.0' encoding = 'UTF - 8'?>
    <note>
    <to> Tov</to>
    <from>Jani</from>
    <heading>Reminder</heading>
    <body>Don't Forgt me this weekend!</body>
    </note>";

    $xml = simplexml_load_string($myXMLData)
           or die("Cannot Create object");
    print_r($xml);
    ?>
    
</body>
</html>
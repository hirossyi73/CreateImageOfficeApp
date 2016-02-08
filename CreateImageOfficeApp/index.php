<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CreateHanko.</title>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css" />
</head>
<body>
    1.Select Mark.
    <br /><input type="radio" name="Mark" id="Mark1" value="1" checked /><label for="Mark1">○</label>&nbsp;
    <input type="radio" name="Mark" id="Mark2" value="2" /><label for="Mark2">×</label>
    <br />
    <br />2.Input FontSize(OnlyNumber).
    <br /><input type="text" id="FontSize" name="FontSize"value="14" placeholder="FontSize" />
    <br />
    <br />3.Click Button.
    <br /><input type="button" id="button_createImage" value="CreateImage" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="index.js"></script>
    <script src="https://appsforoffice.microsoft.com/lib/1/hosted/Office.js" type="text/javascript"></script>
</body>
</html>

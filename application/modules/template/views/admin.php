<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color: red;">
    <table width="900" align="center" border="1" style="background-color: yellow;">
        <tr align="center" valign="center">
            <td><h1 align="center">Admin</h1></td>
        </tr>
        <tr>
            <td height="500" valign="top">
            <?php
                    echo $this->load->view($module.'/'.$view_file);
                ?>
            </td>
        </tr>
    </table>
    
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Two_col</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color: red;">
    <table width="500" align="center" border="1" style="background-color: yellow;">
        <tr align="center" valign="center">
            <td><h1 align="center" valign="center" colspan="2">Two Column</h1></td>
        </tr>
        <tr>
            <td width="200" valign="top">Leave here</td>
            <td height="310" valign="top">
                <?php
                    echo $this->load->view($module.'/'.$view_file);
                ?>
            </td>
        </tr>
    </table>
    
</body>
</html>
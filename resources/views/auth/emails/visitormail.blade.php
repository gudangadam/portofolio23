<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=600">
        <meta name="HandheldFriendly" content="true" />
        <title>GO-JEK VISITOR</title>
    </head>
    
    <body style="background:#FFF; margin:0; padding:0">        
        <table border="0" cellspacing="0" cellpadding="0" style=" display:block; font-family:Helvetica, sans-serif; font-size:1em; width:600px; margin:20px auto; color:#4f4f4f; border:1px solid #f0f1f1;">
            <tr style="display:block;">
                <td colspan="2" style="background:#f0f1f1; padding:15px; border-bottom:3px solid #efefec; width:600px;">
                    <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                        <tr style="width:100%;">
                            <td style="text-align:left; width:50%;"><img src="https://pbs.twimg.com/profile_images/658079986130096129/KOOZYL9p.png" 
                            alt="Go-Jek" style="vertical-align:middle; width:60px; height:60px" /></td>
                            <td style="text-align:right; width:50%;  font-size:1em; font-weight: bold; ">Visitor Alert</td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr style="display:block">
                <td colspan="2" style="position:relative; background:#FFF; padding:15px 15px 35px 15px; border-bottom:3px solid #efefec; display:block; margin: 0px 0 0 0;">
                    <table border="0" cellspacing="0" cellpadding="0" style="width:100%; margin-top:30px;">
                        <tr style=" display:block; width:100%; ">
                            <td style=" width:100%; font-size:1em; line-height:1.5em; display:block; ">
    
                                Sistem Baru saja menerima data visitor Baru sebagai berikut : <br><br>

                                <table border="0" cellspacing="0" cellpadding="0" style=" display:block; width: 100%; color: #566069">
                                    <tbody style="padding: 5px; display: block; width: 100%; margin-bottom: 0; padding: 0">
                                        <tr style="padding: 5px; display: block; width: 100%; margin-bottom: 0; padding: 0; clear: both; ">
                                            <td style="display: inline-block; width: 20%;  ">
                                                Nama 
                                            </td>
                                            <td style="display: inline-block; width: 75%; float: right; ">
                                                : <b>{{ $toName }}</b>
                                            </td>
                                        </tr>

                                        <tr style="padding: 5px; display: block; width: 100%; margin-bottom: 0; padding: 0; clear: both; ">
                                            <td style="display: inline-block; width: 20%;  ">
                                                Email 
                                            </td>
                                            <td style="display: inline-block; width: 75%; float: right; ">
                                                : <b style="color: #2a6494">{{ $fromEmail }}</b>
                                            </td>
                                        </tr>
                                        <tr style="padding: 5px; display: block; width: 100%; margin-bottom: 0; padding: 0; clear: both;">
                                            <td style="display: inline-block; width: 20%;">
                                                Nomer Telepon
                                            </td>
                                            <td style="display: inline-block; width: 75%; float: right;">
                                                : <b>{{ $noTelp }}</b>
                                            </td>
                                        </tr>
                                        <tr style="padding: 5px; display: block; width: 100%; margin-bottom: 0; padding: 0; clear: both;">
                                            <td style="display: inline-block; width: 20%;">
                                                Pekerjaan 
                                            </td>
                                            <td style="display: inline-block; width: 75%; float: right;">
                                                : <b>{{ $occupation }}</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br><br>

                            </td>
                        </tr>
                        
                        <tr style="margin-bottom:15px; display:block">
                            <td style=" width:100%; font-size:1em; line-height:1.5em;">
                                Terima kasih,<br>
                                Go-Jek Visitor Customer Support.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr style="display:block">
                <td style="background:#f0f1f1; padding:15px 15px 5px; border-bottom:3px solid #f0f1f1; display:block">
                    <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                        <tr style=" margin-bottom:10px; display:block">
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    

    </body>
</html>

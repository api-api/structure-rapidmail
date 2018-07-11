<?php

/**
 * Class Data_Recipientlist.
 */
class Data_Recipientlist {
	static $name = 'Test List';
	static $description = 'This is the testdata for the recipients data.';
	static $unsubscribe_blacklist = 'no';
	static $recipient_subscribe_email = 'yes';
	static $subscribe_confirmation_email_from = 'test@awesome.ug';
	static $subscribe_confirmation_email_subject = 'Confirmation of your Registration';
	static $subscribe_confirmation_email_from_name = 'Rapidmail Test List';
	static $subscribe_confirmation_email_body = 'Thank your for your registration. Please confirm your email-address by klicking on this link: {%link}';
	static $subscribe_confirmation_email_body_html = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                        <html>
                            <head>
                                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
                                <title>Confirmation of your Registration</title>
                                <style type="text/css">
                                    #outlook a { padding: 0; }
                                    .ReadMsgBody { width: 100%; }
                                    .ExternalClass { width: 100%; display:block !important; }
                                    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
                                    .yshortcuts, .yshortcuts a, .yshortcuts a:link,.yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span { color: black; text-decoration: none !important; border-bottom: none !important; background: none !important;}
                                    body {-webkit-text-size-adjust:none; -ms-text-size-adjust:none;}
                                    body {margin:0; padding:0;}
                                    table td {border-collapse:collapse;}
                                    a { color: #7fad1a; text-decoration: none; }

                                    @media only screen and (max-width: 480px) {

                                        table[class*=base],
                                        table[class*=xs-full-width] { width:100%!important; }

                                        table[class*=container] {
                                            -webkit-text-size-adjust: none!important;
                                            -ms-text-size-adjust: none!important;
                                            width:100%!important;
                                        }

                                        table[class*=hide], td[class*=hide], img[class*=hide], p[class*=hide], span[class*=hide] { display:none !important; }

                                        body[yahoo] #background-table img { width: 100%!important; height: auto!important; line-height: 100%; }

                                        td[class*=main-content] {
                                            font-size: 12px;
                                            line-height: 18px;
                                        }

                                        td[class*=header-grid-6],
                                        td[class*=grid-3],
                                        td[class*=grid-4],
                                        td[class*=grid-6],
                                        td[class*=grid-8] {
                                            display: block!important;
                                            float: none;
                                            width: 100%!important;
                                        }

                                        table[class*=grid-row] { font-size: 0; }

                                        td[class*=grid-3] {
                                            display: inline-block!important;
                                            width: 50%!important;
                                        }

                                        td[class*=header-grid-6] { text-align: center!important; }

                                    }
                                </style>
                            </head>
                            <body yahoo="fix" width="100%" style="margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;width:100% !important;background-color:#f7f7f7;" >
                                <table id="background-table" cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color:#f7f7f7; width:100%;">
                                    <tr>
                                        <td align="center" valign="top" bgcolor="#f7f7f7" style="background-color:#f7f7f7;">
                                            <table width="580" style="width:580px;" border="0" cellspacing="0" cellpadding="0" class="base">
                                                <tr>
                                                    <td align="center" valign="top" bgcolor="#ffffff" style="background-color: #ffffff; border-top: 1px solid #cccccc; border-right: 1px solid #cccccc; border-bottom: 1px solid #cccccc; border-left: 1px solid #cccccc;">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="580" style="width:580px;" class="container">
                                                            <tr>
                                                                <td valign="top" align="left" style="padding: 10px;" class="main-content">
                                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                        <tr>
                                                                            <td valign="top" style="font-size: 14px; line-height: 20px; color: #666666; font-family: Arial, sans-serif; padding:10px; text-align: left;">
                                                                                Thank your for your registration. Please confirm your email-address by klicking on this link:
                                                                            </td>
                                                                        </tr><tr>
                                                                            <td valign="top" align="center" style="font-size: 14px; line-height: 20px; color: #666666; font-family: Arial, sans-serif; padding:10px; text-align: center;">
                                                                                <table border="0" cellspacing="0" cellpadding="0" align="center" style="margin: 0 auto; text-align: center;">
                                                                                    <tr>
                                                                                        <td class="btn" align="center" style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;" bgcolor="#7fad1a">
                                                                                            <a href="{%link}" target="_blank" style="font-size: 16px;font-weight:bold;font-family: Arial, sans-serif; color: #ffffff; text-decoration: none; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding: 12px 18px; border: 1px solid #7fad1a; display: inline-block;"><span style="color: #ffffff;"><!--[if mso]>&nbsp;<![endif]-->Bestätigen<!--[if mso]>&nbsp;<![endif]--></span></a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr></table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </body>
                        </html>';
	static $subscribe_confirmation_welcome_email_from = 'test@awesome.ug';
	static $subscribe_confirmation_welcome_email_from_name = 'Rapidmail Test List';
	static $subscribe_confirmation_welcome_email_subject = 'Welcome to our test list';
	static $subscribe_confirmation_welcome_email_body = 'Everything is done! You are now registered to our mailinglist.';
	static $subscribe_confirmation_welcome_email_body_html = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                        <html>
                            <head>
                                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
                                <title>Welcome to our test list</title>
                                <style type="text/css">
                                    #outlook a { padding: 0; }
                                    .ReadMsgBody { width: 100%; }
                                    .ExternalClass { width: 100%; display:block !important; }
                                    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
                                    .yshortcuts, .yshortcuts a, .yshortcuts a:link,.yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span { color: black; text-decoration: none !important; border-bottom: none !important; background: none !important;}
                                    body {-webkit-text-size-adjust:none; -ms-text-size-adjust:none;}
                                    body {margin:0; padding:0;}
                                    table td {border-collapse:collapse;}
                                    a { color: #7fad1a; text-decoration: none; }

                                    @media only screen and (max-width: 480px) {

                                        table[class*=base],
                                        table[class*=xs-full-width] { width:100%!important; }

                                        table[class*=container] {
                                            -webkit-text-size-adjust: none!important;
                                            -ms-text-size-adjust: none!important;
                                            width:100%!important;
                                        }

                                        table[class*=hide], td[class*=hide], img[class*=hide], p[class*=hide], span[class*=hide] { display:none !important; }

                                        body[yahoo] #background-table img { width: 100%!important; height: auto!important; line-height: 100%; }

                                        td[class*=main-content] {
                                            font-size: 12px;
                                            line-height: 18px;
                                        }

                                        td[class*=header-grid-6],
                                        td[class*=grid-3],
                                        td[class*=grid-4],
                                        td[class*=grid-6],
                                        td[class*=grid-8] {
                                            display: block!important;
                                            float: none;
                                            width: 100%!important;
                                        }

                                        table[class*=grid-row] { font-size: 0; }

                                        td[class*=grid-3] {
                                            display: inline-block!important;
                                            width: 50%!important;
                                        }

                                        td[class*=header-grid-6] { text-align: center!important; }

                                    }
                                </style>
                            </head>
                            <body yahoo="fix" width="100%" style="margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;width:100% !important;background-color:#f7f7f7;" >
                                <table id="background-table" cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color:#f7f7f7; width:100%;">
                                    <tr>
                                        <td align="center" valign="top" bgcolor="#f7f7f7" style="background-color:#f7f7f7;">
                                            <table width="580" style="width:580px;" border="0" cellspacing="0" cellpadding="0" class="base">
                                                <tr>
                                                    <td align="center" valign="top" bgcolor="#ffffff" style="background-color: #ffffff; border-top: 1px solid #cccccc; border-right: 1px solid #cccccc; border-bottom: 1px solid #cccccc; border-left: 1px solid #cccccc;">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="580" style="width:580px;" class="container">
                                                            <tr>
                                                                <td valign="top" align="left" style="padding: 10px;" class="main-content">
                                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                        <tr>
                                                                            <td valign="top" style="font-size: 14px; line-height: 20px; color: #666666; font-family: Arial, sans-serif; padding:10px; text-align: left;">

Everything is done! You are now registered to our mailinglist.
                                                                            </td>
                                                                        </tr></table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </body>
                        </html>';
	static $unsubscribe_confirmation_email_from = 'test@awesome.ug';
	static $unsubscribe_confirmation_email_from_name = 'Rapidmail Test List';
	static $unsubscribe_confirmation_email_subject = 'Confirmation of your cancellation';
	static $unsubscribe_confirmation_email_body = 'Please confirn the cancellation of your subscription by klicking this link: {%link}';
	static $unsubscribe_confirmation_email_body_html = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                        <html>
                            <head>
                                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
                                <title>Confirmation of your cancellation</title>
                                <style type="text/css">
                                    #outlook a { padding: 0; }
                                    .ReadMsgBody { width: 100%; }
                                    .ExternalClass { width: 100%; display:block !important; }
                                    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
                                    .yshortcuts, .yshortcuts a, .yshortcuts a:link,.yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span { color: black; text-decoration: none !important; border-bottom: none !important; background: none !important;}
                                    body {-webkit-text-size-adjust:none; -ms-text-size-adjust:none;}
                                    body {margin:0; padding:0;}
                                    table td {border-collapse:collapse;}
                                    a { color: #7fad1a; text-decoration: none; }

                                    @media only screen and (max-width: 480px) {

                                        table[class*=base],
                                        table[class*=xs-full-width] { width:100%!important; }

                                        table[class*=container] {
                                            -webkit-text-size-adjust: none!important;
                                            -ms-text-size-adjust: none!important;
                                            width:100%!important;
                                        }

                                        table[class*=hide], td[class*=hide], img[class*=hide], p[class*=hide], span[class*=hide] { display:none !important; }

                                        body[yahoo] #background-table img { width: 100%!important; height: auto!important; line-height: 100%; }

                                        td[class*=main-content] {
                                            font-size: 12px;
                                            line-height: 18px;
                                        }

                                        td[class*=header-grid-6],
                                        td[class*=grid-3],
                                        td[class*=grid-4],
                                        td[class*=grid-6],
                                        td[class*=grid-8] {
                                            display: block!important;
                                            float: none;
                                            width: 100%!important;
                                        }

                                        table[class*=grid-row] { font-size: 0; }

                                        td[class*=grid-3] {
                                            display: inline-block!important;
                                            width: 50%!important;
                                        }

                                        td[class*=header-grid-6] { text-align: center!important; }

                                    }
                                </style>
                            </head>
                            <body yahoo="fix" width="100%" style="margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;width:100% !important;background-color:#f7f7f7;" >
                                <table id="background-table" cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color:#f7f7f7; width:100%;">
                                    <tr>
                                        <td align="center" valign="top" bgcolor="#f7f7f7" style="background-color:#f7f7f7;">
                                            <table width="580" style="width:580px;" border="0" cellspacing="0" cellpadding="0" class="base">
                                                <tr>
                                                    <td align="center" valign="top" bgcolor="#ffffff" style="background-color: #ffffff; border-top: 1px solid #cccccc; border-right: 1px solid #cccccc; border-bottom: 1px solid #cccccc; border-left: 1px solid #cccccc;">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="580" style="width:580px;" class="container">
                                                            <tr>
                                                                <td valign="top" align="left" style="padding: 10px;" class="main-content">
                                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                        <tr>
                                                                            <td valign="top" style="font-size: 14px; line-height: 20px; color: #666666; font-family: Arial, sans-serif; padding:10px; text-align: left;">
                                                                                Please confirn the cancellation of your subscription by klicking this link:
                                                                            </td>
                                                                        </tr><tr>
                                                                            <td valign="top" align="center" style="font-size: 14px; line-height: 20px; color: #666666; font-family: Arial, sans-serif; padding:10px; text-align: center;">
                                                                                <table border="0" cellspacing="0" cellpadding="0" align="center" style="margin: 0 auto; text-align: center;">
                                                                                    <tr>
                                                                                        <td class="btn" align="center" style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;" bgcolor="#7fad1a">
                                                                                            <a href="{%link}" target="_blank" style="font-size: 16px;font-weight:bold;font-family: Arial, sans-serif; color: #ffffff; text-decoration: none; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding: 12px 18px; border: 1px solid #7fad1a; display: inline-block;"><span style="color: #ffffff;"><!--[if mso]>&nbsp;<![endif]-->Bestätigen<!--[if mso]>&nbsp;<![endif]--></span></a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr></table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </body>
                        </html>';
	static $unsubscribe_confirmation_goodbye_email_from = 'test@awesome.ug';
	static $unsubscribe_confirmation_goodbye_email_from_name = 'Rapidmail Test List';
	static $unsubscribe_confirmation_goodbye_email_subject = 'Goodbye!';
	static $unsubscribe_confirmation_goodbye_email_body = 'You have been unsubscribed from our mailinglist.';
	static $unsubscribe_confirmation_goodbye_email_body_html = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                        <html>
                            <head>
                                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
                                <title>Goodbye!</title>
                                <style type="text/css">
                                    #outlook a { padding: 0; }
                                    .ReadMsgBody { width: 100%; }
                                    .ExternalClass { width: 100%; display:block !important; }
                                    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
                                    .yshortcuts, .yshortcuts a, .yshortcuts a:link,.yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span { color: black; text-decoration: none !important; border-bottom: none !important; background: none !important;}
                                    body {-webkit-text-size-adjust:none; -ms-text-size-adjust:none;}
                                    body {margin:0; padding:0;}
                                    table td {border-collapse:collapse;}
                                    a { color: #7fad1a; text-decoration: none; }

                                    @media only screen and (max-width: 480px) {

                                        table[class*=base],
                                        table[class*=xs-full-width] { width:100%!important; }

                                        table[class*=container] {
                                            -webkit-text-size-adjust: none!important;
                                            -ms-text-size-adjust: none!important;
                                            width:100%!important;
                                        }

                                        table[class*=hide], td[class*=hide], img[class*=hide], p[class*=hide], span[class*=hide] { display:none !important; }

                                        body[yahoo] #background-table img { width: 100%!important; height: auto!important; line-height: 100%; }

                                        td[class*=main-content] {
                                            font-size: 12px;
                                            line-height: 18px;
                                        }

                                        td[class*=header-grid-6],
                                        td[class*=grid-3],
                                        td[class*=grid-4],
                                        td[class*=grid-6],
                                        td[class*=grid-8] {
                                            display: block!important;
                                            float: none;
                                            width: 100%!important;
                                        }

                                        table[class*=grid-row] { font-size: 0; }

                                        td[class*=grid-3] {
                                            display: inline-block!important;
                                            width: 50%!important;
                                        }

                                        td[class*=header-grid-6] { text-align: center!important; }

                                    }
                                </style>
                            </head>
                            <body yahoo="fix" width="100%" style="margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;width:100% !important;background-color:#f7f7f7;" >
                                <table id="background-table" cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color:#f7f7f7; width:100%;">
                                    <tr>
                                        <td align="center" valign="top" bgcolor="#f7f7f7" style="background-color:#f7f7f7;">
                                            <table width="580" style="width:580px;" border="0" cellspacing="0" cellpadding="0" class="base">
                                                <tr>
                                                    <td align="center" valign="top" bgcolor="#ffffff" style="background-color: #ffffff; border-top: 1px solid #cccccc; border-right: 1px solid #cccccc; border-bottom: 1px solid #cccccc; border-left: 1px solid #cccccc;">
                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="580" style="width:580px;" class="container">
                                                            <tr>
                                                                <td valign="top" align="left" style="padding: 10px;" class="main-content">
                                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                        <tr>
                                                                            <td valign="top" style="font-size: 14px; line-height: 20px; color: #666666; font-family: Arial, sans-serif; padding:10px; text-align: left;">
                                                                                You have been unsubscribed from our mailinglist.
                                                                            </td>
                                                                        </tr></table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </body>
                        </html>';
	static $default = 'no';
}
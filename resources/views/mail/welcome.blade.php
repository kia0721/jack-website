<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <style type="text/css" rel="stylesheet" media="all">
        /* Media Queries */
        @media  only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }

        body{
            font-family:" Arial, &#039;Helvetica Neue&#039;, Helvetica, sans-serif";
        }
    </style>
</head>



<body style="margin: 0; padding: 0; width: 100%; background-color: #F2F4F6;">
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td style="width: 100%; margin: 0; padding: 0; background-color: #F2F4F6;" align="center">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <!-- Logo -->
                    <tr>
                        <td style="padding: 25px 0; text-align: center;">
                            <a style="font-family: Arial, &#039;Helvetica Neue&#039;, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #2F3133; text-decoration: none; text-shadow: 0 1px 0 white;" href="{!! $URL !!}" target="_blank">
                                Jack Website
                            </a>
                        </td>
                    </tr>

                    <!-- Email Body -->
                    <tr>
                        <td style="width: 100%; margin: 0; padding: 0; border-top: 1px solid #EDEFF2; border-bottom: 1px solid #EDEFF2; background-color: #FFF;" width="100%">
                            <table style="width: auto; max-width: 570px; margin: 0 auto; padding: 0;" align="center" width="570" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="font-family: Arial, &#039;Helvetica Neue&#039;, Helvetica, sans-serif; padding: 35px;">
                                        <!-- Greeting -->
                                        <h1 style="margin-top: 0; color: #2F3133; font-size: 19px; font-weight: bold; text-align: left;">Hello {{ $name }}!</h1>

                                        <!-- Intro -->
                                        <p style="margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em;">
                                             You are receiving this email because you we're registered by Administrator. Below is your credentials:
                                        </p>
                                        
                                        <!-- Action Button -->
                                        <table style="width: 100%; margin: 30px auto; padding: 0; text-align: center;" align="center" width="100%" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <b>Email: </b>{!!$email!!}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <b>Password:</b> {!!$password!!}
                                                    </td>
                                                </tr>
                                            </table>
                                        
                                        <!-- Outro -->
                                         <p style="margin-top: 0; color: #74787E; font-size: 12px; line-height: 1.5em;">
                                                {!! $URL !!}
                                            </p>
                                        
                                        <!-- Salutation -->
                                        <p style="margin-top: 0; color: #74787E; font-size: 16px; line-height: 1.5em;">
                                            Regards,<br>Customer Satisfaction Survey
                                        </p>

                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td>
                            <table style="width: auto; max-width: 570px; margin: 0 auto; padding: 0; text-align: center;" align="center" width="570" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="font-family: Arial, &#039;Helvetica Neue&#039;, Helvetica, sans-serif; color: #AEAEAE; padding: 35px; text-align: center;">
                                        <p style="margin-top: 0; color: #74787E; font-size: 12px; line-height: 1.5em;">
                                            &copy; 2017
                                            <a style="color: #3869D4;" href="{{ $URL }}" target="_blank">Customer Satisfaction Survey</a>.
                                            All rights reserved.
                                        </p>
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
</html>

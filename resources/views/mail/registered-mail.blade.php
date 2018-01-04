<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jack</title>

        <style type="text/css">

            body{
                font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
                font-family: "Calibri";
                color:black;
            }

            ol {list-style-type: none;}
            ol.r {list-style-type: upper-alpha;}
            .form-control{
                margin-bottom: 20px;
            }
            .control-label{
                margin-top: 5px;
            }
        </style>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <p>Dear: <b>{{ $detail->parentName }}</b></p>
                        <p>Thank you for your interest in the Junior Academy for Coding Knowledge classes. This is to confirm we have received your registration for COURSE.</p>
                        <p>COURSE DETAILS</p>
                        @foreach ($categories as $cate => $cat)
                        <p>{{ $detail->schudelue }} - {{ $detail->fee }}

                        </p>
                        @endforeach

                        <p>To complete the registration process and secure your slot/s, proceed by paying for the corresponding course fee through any of the payment procedures below:</p>

                        <p><b>1. BANK DEPOSIT</b><br><br>
                        <b>Bank: UCPB Tektite Branch</b><br>
                        Account Name: Junior Academy for Coding Knowledge, Inc.<br>
                        Account Number: 2019-6001-4377
                        </p>
                        <p><b>Bank: BDO</b><br>
                        Account Name: Junior Academy for Coding Knowledge, Inc.<br>
                        Account Number: 0034-3028-4923
                        </p>

                        <p><b>2. ON-SITE PAYMENT</b><br><br>
                        JACK is located at Penthouse, East Tower, Philippine Stock Exchange Center, Exchange Road, Ortigas Center, Pasig City. 
                        </p>

                        <p>If payment has been made through bank deposit, kindly send a copy of the deposit slip at <b><u>learncoding@jack.com.ph</u></b>. Please use the following <b>subject format</b>: <i>Payment: Student Name. Ex. Payment: Juan dela Cruz.</i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

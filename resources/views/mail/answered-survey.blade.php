<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jack Website</title>

        <style type="text/css">

            body{
                font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
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
                        <p>Survey accomplished by:</p>
                        <div class="form-group">
                            <label for="fullname" class="col-md-3 control-label">Fullname: {{ $detail->fullname }}</label>
                        </div>
                        
                        <div class="form-group">
                            <label for="designation" class="col-md-3 control-label">Company: {{ $detail->company }}</label>

                        </div>

                        <div class="form-group">
                            <label for="designation" class="col-md-3 control-label">Designation: {{ $detail->designation }}</label>

                        </div>
                        <div class="form-group">
                            <label for="designation" class="col-md-3 control-label">Department: {{ $detail->department }}</label>

                        </div>
                    </div>
                    <div class="col-md-10 col-md-offset-1">

                        <div class="col-md-12 margin-top-4">
                           
                             @foreach ($categories as $cate => $cat)

                            <p style="margin-left: 15px;">{{ $cat['category'] }}</p>
                                
                                @foreach ($cat['questions'] as $questions => $q)
                                    <p style="margin-left: 35px;">{{ $q->num.'. '.$q->question }}</p>
                                    
                                        <p style="margin-left: 55px; margin-bottom: 10px;"><b>{{ $q->choice }}</b></p>
                                        <p style="margin-left: 55px;">Remarks/Comments, if any: <u>{{ $q->remarks }}</u></p>
                                   
                                @endforeach
                            @endforeach
                        </div>

                        <div class="col-md-12 margin-top-4" >
                            <p>Any additional comment/s: <u>{{ $detail->remarks }}</u> </p>
                           
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

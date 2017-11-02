@extends('layouts.customer')

@section('css_link')

    <link href="{{ asset('/DataTables-1.10.13/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <style type="text/css">
        

        ol {list-style-type: none;}
        ol.r {list-style-type: upper-alpha;}
        .form-control{
            margin-bottom: 20px;
        }
        .control-label{
            margin-top: 5px;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-8">
                <h2 style="margin-top: 0px;">CUSTOMER SATISFACTION SURVEY</h2>
                
            </div>
        	<div class="col-md-4">
                <img width="90px" src="{{ asset('images/sms_logo.png') }}" class="pull-right" style="width:150px;" >
                
            </div>

            <div class="col-md-12 margin-top-4">
                <h4> Thank you for answering our survey </h4>               

            </div>
            <div class="col-md-12 margin-top-4">
                @foreach ($categories as $cate => $cat)

                <ol>
                    <li>{{ $cat['category'] }}</li>
                    <ol>
                    @foreach ($cat['questions'] as $questions => $q)
                        <li>{{ $q->num.'. '.$q->question }}</li>
                        <ol>
                            <li><b>{{ $q->choice }}</b></li>
                            <li>Remarks/Comments, if any: <input type="text" class="form-control remarksCls" style="width:70%;" value="{{ $q->remarks }}" disabled/></li>
                        </ol>
                    @endforeach
                    </ol>
                </ol>
                @endforeach
            </div>

            <div class="col-md-12 margin-top-4" >
                <p>Any additional comment/s: <textarea class="form-control remarksCls" name="additionalComments" readonly="readonly" >{{ $detail->remarks }}</textarea> </p>

                <p>All information about you will be kept confidential and will not be given to any other third parties.</p>


                <p style="display:none;">Survey accomplished by:</p>
            </div>
            <div class="col-md-10 col-md-offset-1" style="display:none;">
                <div class="form-group">
                    <label for="fullname" class="col-md-3 control-label">Fullname</label>

                    <div class="col-md-8">
                        <input id="fullname" type="text" class="form-control remarksCls" name="fullname" value="{{ $detail->fullname }}" disabled="disabled" />

                    </div>
                </div>

                <div class="form-group">
                    <label for="designation" class="col-md-3 control-label">Designation</label>

                    <div class="col-md-8">
                        <input id="designation" type="text" class="form-control remarksCls" name="designation" value="{{ $detail->designation }}" disabled="disabled" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="designation" class="col-md-3 control-label">Department</label>

                    <div class="col-md-8">
                        <input id="department" type="text" class="form-control remarksCls" name="department" value="{{ $detail->department }}" disabled="disabled" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="designation" class="col-md-3 control-label">Company</label>

                    <div class="col-md-8">
                        <input id="company" type="text" class="form-control remarksCls" name="company" value="{{ $detail->company }}" disabled="disabled" />
                    </div>
                </div>
            </div>

            <div class="col-md-12 margin-top-4" >
                <p>If you have any comments or concerns about this survey, you may directly email us at <a href="mailto:customer-feedback@smsgt.com" >customer-feedback@smsgt.com</a></p>
            </div>

        </div>
    </div>
</div>
@endsection
@section('script_link')
    <script src="{{ asset('/DataTables-1.10.13/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript">
        $("body").on("click","#clearSurvey",function(e){

            $(".radioChoice").val([]);
            $(".remarksCls").val("");
        });
    </script>

@endsection
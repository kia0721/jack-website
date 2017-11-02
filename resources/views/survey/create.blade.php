@extends('layouts.main')

@section('css_link')

    <link href="{{ asset('/DataTables-1.10.13/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/DataTables-1.10.13/extensions/Buttons/css/buttons.dataTables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <!-- <div class="col-md-12 col-md-offset-1"> -->
            <div class="col-md-10">
                
                <h3 style="margin-top: 0px; ">Create survey</h3>

                
            </div>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('createSurvey') }}">
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary pull-right" id="createSurveyBtn"><span class="btn-text">Create</span><i class="btn-loader"></i></button>
            </div>
        	<div class="col-md-12">
                <hr>
                
                {{ csrf_field() }}

                <div class="col-xs-12 col-md-12 form-group">
              
                        <label class="form-control-label" for="title">Title<span class="form-asterisk">*</span></label>
                        <input type="text" class="form-control" name="title" id="title" required="" data-form-field="Title" >
            
                </div>
                <div class="col-xs-12 col-md-12 form-group">
                    <label class="form-control-label" for="message">Message for question</label>
                    <textarea id="message" type="text" class="form-control" maxlength="1000" name="message" required>
                    </textarea>
                </div>
                <div class="col-xs-12 col-md-12 ">
                    
                </div>
            </div>
            </form>
        <!-- </div> -->
    </div>
</div>
@endsection
@section('script_link')
    <script src="{{ asset('/DataTables-1.10.13/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.form.js') }}"></script>
    <script type="text/javascript">
        var SURVEY_URL = "{{ url('survey') }}";
        $("body").on("click","#createSurveyBtn",function(e){

            $(this).parents("form").ajaxForm(createSurveyBtn);
        });
        var createSurveyBtn = { 
            beforeSubmit:function(formData, jqForm, options){
                waitingDialog.show("Creating survey...");
                return true;
            },
            complete: function(response) 
            {
                var res = response.responseJSON;
                if(res.isSuccessful){

                    waitingDialog.show("SUCCESS", {
                        modalHeader: 'success',
                        dialog: res.result,
                        footer: true,
                        onHide: function(){
                          window.location = SURVEY_URL+"/"+res.id;
                        }
                    });   


                } else {
                    waitingDialog.show("FAILED", {
                    modalHeader: 'danger',
                    dialog: res.result,
                    footer: true,
                        
                    });
                }
            }
        };
    </script>

@endsection
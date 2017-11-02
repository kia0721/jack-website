@extends('layouts.main')

@section('css_link')

    <link href="{{ asset('/DataTables-1.10.13/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/DataTables-1.10.13/extensions/Buttons/css/buttons.dataTables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#detail_tab">Detail</a></li>
              <li><a data-toggle="tab" href="#question_tab">Questions</a></li>
              <li><a data-toggle="tab" href="#send_tab">Send</a></li>
              <li><a data-toggle="tab" href="#sent_tab">Sent</a></li>
            </ul>


            <div class="tab-content">
              <div id="detail_tab" class="tab-pane fade in active">
                <br>
                   
                <form class="form-horizontal" role="form" method="POST" action="{{ url('updateSurvey') }}">
        
                <div class="col-md-12">
         
                    {{ csrf_field() }}
                    <input type="hidden" name="surveyId" id="surveyId" value="{{ $detail->id }}">

                    <div class="col-xs-12 col-md-12 form-group">
                  
                        <label class="form-control-label" for="title">Title<span class="form-asterisk">*</span></label>
                        <input type="text" class="form-control" name="title" id="title" required="" data-form-field="Title" value="{{ $detail->title }}" >
                
                    </div>
                    <div class="col-xs-12 col-md-12 form-group">
                        <label class="form-control-label" for="message">Message for question</label>
                        <textarea id="message" class="form-control" maxlength="1000" name="message" required style="height:100px;">{!! $detail->message !!}</textarea>
                    </div>
                    <!-- <div class="col-xs-12 col-md-12 "> -->
                        <button type="submit" class="btn btn-primary pull-left" id="updateSurveyBtn">Update</button>
                    <!-- </div> -->
                </div>
                </form>
               
              </div>
              <div id="question_tab" class="tab-pane fade">
                @include('survey.question-tab')
              </div>
              <div id="send_tab" class="tab-pane fade">
                @include('survey.send-tab')
              </div>
              <div id="sent_tab" class="tab-pane fade">
                @include('survey.sent-tab')
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script_link')
    <script src="{{ asset('/DataTables-1.10.13/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.form.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-confirmation.js') }}"></script>
    <script type="text/javascript">
        var SURVEY_URL = "{{ url('survey') }}";
        $("body").on("click","#updateSurveyBtn",function(e){

            $(this).parents("form").ajaxForm(updateSurveyBtn);
        });
        var updateSurveyBtn = { 
            beforeSubmit:function(formData, jqForm, options){
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

        /** Send tab functions **/

        var recipients = [];
        var recipientCtr = 1;
        var recipientTable = $('#recipient_temp_table').DataTable();
        var sentTable = $('#sent_mail_table').DataTable();
        var fullname = $("#fullname").val();
        var email = $("#email").val();
        var company = $("#company").val();

        $("body").on("click","#addRecipientBtn",function(e){
            fullname = $("#fullname").val();
            email = $("#email").val();
            company = $("#company").val();
            $(this).parents("form").ajaxForm(addRecipientBtn);

        });

        var addRecipientBtn = { 
            beforeSubmit:function(formData, jqForm, options){
                if(checkString(fullname) || checkString(email) || checkString(company)){
                    waitingDialog.show("Error", {
                        modalHeader: 'danger',
                        dialog: "All fields are required",
                        footer: true
                    });

                    return false;
                }
                waitingDialog.show("Adding recipient");

                $('#addRecipientBtn').prop("disabled",true);
                return true;
            },
            complete: function(response) 
            {
                $('#addRecipientBtn').prop("disabled",false);
                var res = response.responseJSON;
                if(res.isSuccessful){

                    var newRow = '<tr data-row-recipient-id="'+res.id+'">'+
                        '<td>'+fullname+'</td>'+
                        '<td>'+email+'</td>'+
                        '<td>'+company+'</td>'+
                    '<td class="action_td"> <button class="btn btn-danger btn-xs row-recipient-delete" data-toggle="confirmation" '+

                    'data-recipient-index="'+res.id+'" >'+
                    '<i class="glyphicon glyphicon-trash"></i></button></td></tr>';

                    // $('#recipient_temp_table tr:last').after(newRow);
                    recipientTable.row.add( $(newRow)[0] ).draw();
                    recipients.push(res.id);
                    resetRecipientDeleteConfirmation();
                    $('#recipients').val(recipients.toString());
                    waitingDialog.hide();
                } else {
                    waitingDialog.show("FAILED", {
                    modalHeader: 'danger',
                    dialog: res.result,
                    footer: true
                    });
                }
            }
        };

        var deleteRecipientId;
        // $(document).on('click','.row-recipient-delete',function(){
        //     deleteRecipientId  = $(this).data('recipientIndex');
        // });

        $('#recipient_temp_table').on('click', '.row-recipient-delete', function(){
           deleteRecipientId  = $(this).data('recipientIndex');
        });

        function resetRecipientDeleteConfirmation(){
            $(document).find('.row-recipient-delete').confirmation({

                onConfirm: function(e) {
                   
                    // $('#recipient_temp_table tr[data-row-recipient-id="'+deleteRecipientId+'"]').remove();
                    $.ajax({
                        url: SURVEY_URL+"/deleteRecipient/"+deleteRecipientId, 
                        success: function(result){
                            recipientTable.row('#recipient_temp_table tr[data-row-recipient-id="'+deleteRecipientId+'"]').remove().draw( false );
                            var x=0; 
                            for(x=0; x<recipients.length; x++){
                                if(recipients[x] == deleteRecipientId){
                                    recipients.splice(x, 1);

                                    x=recipients.length;
                                }
                            }

                            $('#recipients').val(recipients.toString());

                        }
                    });
                },
                btnOkLabel: 'Yes',
                btnOkClass: 'btn btn-xs btn-primary',
                btnCancelLabel: 'No',
                btnCancelClass: 'btn btn-xs btn-default',
                container: 'body'
            });
        }


        $("body").on("click","#sendSurveyBtn",function(e){

            $(this).parents("form").ajaxForm(sendSurveyBtn);
        });
        var sendSurveyBtn = { 
            beforeSubmit:function(formData, jqForm, options){
                if(recipients.length == 0){
                    waitingDialog.show("Error", {
                        modalHeader: 'danger',
                        dialog: "Please add recipients",
                        footer: true
                    });

                    
                    return false;
                }
                waitingDialog.show("Sending email...");

                $('#sendSurveyBtn').prop("disabled",true);
                return true;
            },
            complete: function(response) 
            {
                $('#sendSurveyBtn').prop("disabled",false);
                var res = response.responseJSON;
                if(res.isSuccessful){
                    console.log(res.result.length);
                    for(x=0; x<res.result.length; x++){
                        
                    }
                    resHtml = "<p>"+"</p>";
                    waitingDialog.show("SUCCESS", {
                        modalHeader: 'success',
                        dialog: res.result,
                        footer: true,
                        onHide: function(){
                          location.reload();
                        }
                    });   


                } else {
                    waitingDialog.show("FAILED", {
                    modalHeader: 'danger',
                    dialog: res.result,
                    footer: true
                    });
                }
            }
        };

        function checkString(str){
            if(str == null || str == ""){
                return true;
            }
            return false;
        }
        $( document ).ready(function() {
            resetRecipientDeleteConfirmation();
            var recipient = $('#recipients').val();

            recipients = recipient.split(",");
            recipients.splice(recipients.length-1, 1);
            $('#recipients').val(recipients.toString());
        });


    </script>

@endsection
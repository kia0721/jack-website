<div class="col-md-12">
    <br>
    <form action="{{ url('addRecipient') }}" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    
    <input type="hidden" name="surveyId" id="surveyId" value="{{ $detail->id }}">
    <div class="col-xs-12 col-md-4 form-group">
  
        <label class="form-control-label" for="fullname">Fullname<span class="form-asterisk">*</span></label>
        <input type="text" class="form-control" name="fullname" id="fullname" required="" data-form-field="Fullname" >

    </div>
    <div class="col-xs-12 col-md-4 form-group">
        <label class="form-control-label" for="email">Email<span class="form-asterisk">*</span></label>
        <input type="text" class="form-control" name="email" id="email" required="" data-form-field="Email" >
    </div>
    <div class="col-xs-12 col-md-3 form-group">
        <label class="form-control-label" for="company">Company<span class="form-asterisk">*</span></label>
        <input type="text" class="form-control" name="company" id="company" required="" data-form-field="Company" >
    </div>
    <div class="col-xs-12 col-md-1 ">
        <br>
        <button type="submit" class="btn btn-primary pull-right" id="addRecipientBtn"><span class="btn-text">Add</span><i class="btn-loader"></i></button>

    </form>
    </div>
    <div class="col-xs-12 col-md-12">
        <h3>Recipients</h3><br>
        <table class="table display dt-responsive"  width="100%" id="recipient_temp_table">
            <thead>
                <tr>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Company</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $sendList=""; ?>
                @foreach ($sentList as $sentSurvey)
                @if($sentSurvey->is_sent == 0)

                    <?php $sendList.=$sentSurvey->sent_survey_id.','; ?>
                <tr data-row-recipient-id="{{ $sentSurvey->sent_survey_id }}">
                    <td>
                        @if($sentSurvey->is_answered == 1)
                            <a target="_blank" href="{{ url('/answer/survey/'.$detail->id.'/'.encrypt($sentSurvey->sent_survey_id)) }}"> {{ $sentSurvey->fullname }} </a>
                        @else
                           {{ $sentSurvey->fullname }}
                        @endif </td>
                    <td> {{ $sentSurvey->email }} </td>

                    <td>{{ $sentSurvey->company }} </td>
                    <td class="action_td"> <button class="btn btn-danger btn-xs row-recipient-delete" data-toggle="confirmation" data-recipient-index="{{ $sentSurvey->sent_survey_id }}" ><i class="glyphicon glyphicon-trash"></i></button></td>
                
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>

    </div>

    <div class="col-xs-12  ">
        <br>
        <form action="{{ url('sendSurvey') }}" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="recipients" id="recipients" value="{{ $sendList }}">
            <input type="hidden" name="surveyId" id="surveyId" value="{{ $detail->id }}">
            <button type="submit" class="btn btn-primary pull-right" id="sendSurveyBtn"><span class="btn-text">SEND</span><i class="btn-loader"></i></button>
        </form>
    </div>

</div>
<div class="col-md-12">
<br>
    <table class="table display dt-responsive"  width="100%" id="sent_mail_table">
        <thead>
            <tr>
                <th>Company</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Department</th>
                <th>Survey</th>
                <th>Status</th>
                <!-- <th class="action_td">Action</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($sentList as $sentSurvey)
                @if($sentSurvey->is_sent == 1)
                <tr data-row-ten-id="{{ $sentSurvey->sent_survey_id }}">
                    <td>{{ $sentSurvey->company }} </td>
                    <td>
                        @if($sentSurvey->is_answered == 1)
                            <a target="_blank" href="{{ url('/answer/survey/'.$detail->id.'/'.encrypt($sentSurvey->sent_survey_id)) }}"> {{ $sentSurvey->fullname }} </a>
                        @else
                           {{ $sentSurvey->fullname }}
                        @endif </td>
                    <td> {{ $sentSurvey->email }} </td>
                    <td> {{ $sentSurvey->department }} </td>
                    <td> {{ $sentSurvey->survey_title }} </td>
                    <td> 
                    @if($sentSurvey->is_answered == 0)
                        Inactive
                    @else
                        Done
                    @endif </td>
                
                </tr>
                @endif 
            @endforeach
        </tbody>
    </table>
</div>
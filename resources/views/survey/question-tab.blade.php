<div class="col-md-12">
    <br>
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#creQuestionModal" onclick="">
        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
        Create Question
    </button>
    <table class="table display dt-responsive"  width="100%" id="question_table">
    <thead>
        <tr>
            <th width="5%">Number</th>
            <th width="55%">Question</th>
            
            <th  width="35%">Result</th>
            <th  width="5%">Average</th>
            <!-- <th class="action_td">Action</th> -->
        </tr>
    </thead>
    <tbody>
        <?php $currentIndex = 0; ?>
        @foreach ($questions as $question)
            <?php $sum = 0; $counter = 0; ?>
            <tr data-row-ten-id="{{ $question->survey_question_id }}">
                <td > {{ $question->ques_num }} </td>
                <td > {{ $question->question }} </td>
                
                <td> 
                @for($x=$currentIndex; $x<count($answerList); $x++)
                    @if($answerList[$x]->survey_question_id == $question->survey_question_id)
                          {{ $answerList[$x]->count_ques_id }} = {{ $answerList[$x]->description }} <br>

                        <?php 
                            $counter += $answerList[$x]->count_ques_id;
                            $currentIndex = $x; 
                            $sum+= ($answerList[$x]->value * $answerList[$x]->count_ques_id);
                        ?>
                    @endif
                @endfor
                 </td>
                 <td align="center">
                   <?php  $average = 0; ?>
                    @if($counter > 0 )
                       <?php $average = $sum/$counter; ?>
                    @endif
                   {{ round($average,2) }}% 
                 </td>
            
            </tr>
        @endforeach
    </tbody>
</table>
</div>

<div id="creQuestionModal" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-md">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Create Question</h4>
                </div>

                <form class="form-horizontal"  method="POST" action="{{ url('/create-question') }}">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_type" id="user_type"/>

                    <div class="form-group">
                        <label for="ques_num" class="col-md-4 control-label">Question number</label>

                        <div class="col-md-6">
                            <input id="ques_num" type="text" class="form-control" name="ques_num" value="{{ old('ques_num') }}" required >

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="question" class="col-md-4 control-label">Question</label>

                        <div class="col-md-6">
                            <input id="question" type="text" class="form-control" name="question" value="{{ old('question') }}" required autofocus>


                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ques_category" class="col-md-4 control-label">Category</label>

                        <div class="col-md-6">
                            <input id="ques_category" type="text" class="form-control" name="ques_category" value="{{ old('ques_category') }}" >

                        </div>
                    </div>             
                </div>
                <div class="modal-footer">
                    <div class="text-xs">
                        <button type="submit" class="btn btn-primary" id="addTtwitterUserSubmit"><span class="btn-text">Save</span><i class="btn-loader"></i></button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div><!-- // modal-footer // -->
                </form>
            </div><!-- // modal-content // -->
            
    </div><!-- // modal-dialog // -->
</div>

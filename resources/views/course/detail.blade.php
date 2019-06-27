@extends('layouts.main')

@section('css_link')
   <link href="{{ asset('/DataTables-1.10.13/css/jquery.dataTables.min.css') }}" rel="stylesheet">
   <link href="{{ asset('/DataTables-1.10.13/extensions/Responsive/css/responsive.dataTables.min.css') }}" rel="stylesheet">
   <link href="{{ asset('/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet">
   
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
 			
            <div class="col-md-10">
                <h3>{{ $course->course_title }}</h3>
            </div>
            <div class="col-md-2"><br>
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addScheduleModal" >
                <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                Add Schedule
            </button>
            </div>
        </div>
        <div class="col-md-12"><br>
        	@if($course->course_type_id == 3)
            <table class="table display dt-responsive"  width="100%" id="schedule_table">
                <thead>
                    <tr>
                        <th width="20%">Level</th>
                        <th width="30%">Schedule</th>
                        <th width="10%">No. of students</th>
                        <th width="10%">Status</th>
                        <th width="15%">Created Date</th>
                        <th class="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schedules as $sched)
                        <tr data-row-sched-id="{{ $sched->id }}">
                            <td >
                                <a href="{{ url('admin/courses/detail/'.$sched->id) }}">{{ $sched->course_level }}  </a>
                                 
                            </td>
                            <td> {{ $sched->coder_date }} </td>
                            <td> {{ $sched->is_hidden }}</td>
                            <td> {{ $sched->students }}</td>
                            <td> {{ $sched->created_at }} </td>
                            <td> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        	
        </div>
    </div>
<div id="addScheduleModal" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-md">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header modal-header-default">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Add Schedule</h4>
                </div>

                <form class=""  method="POST" action="{{ url('/admin/addSchedule') }}">
                <input type="hidden" name="course_id" value="{{ $course->course_id }}"/>
                <div class="modal-body">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-sm-12">
                            <label>Level</label>
                            <select name="course_level" id="course_level" class="form-control">
                                
                               @foreach ($courseLevels as $cLevel)
                                <option value="{{ $cLevel->id }}"> {{ $cLevel->course_level }}</option>
                               @endforeach
                               
                            </select>
                        </div>
                        <div class="form-group coderDate" >
                            <div class="col-sm-12">
                                <label>Date</label>
                                <input type="text" class="form-control" name="coder_date" id="coder_date" style="border:2px solid #b3b3b3;" />     
                            </div>
                            
                        </div>
                    </div>                                   
                </div>
                <div class="modal-footer">
                    <div class="text-xs">
                        <button type="submit" class="btn btn-primary" id="addScheduleSubmit"><span class="btn-text">Add</span><i class="btn-loader"></i></button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div><!-- // modal-footer // -->
                </form>
            </div><!-- // modal-content // -->
            
    </div><!-- // modal-dialog // -->
</div>
@endsection

@section('script_link')
    <script src="{{ asset('/DataTables-1.10.13/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.form.js') }}"></script>
    <script src="{{ asset('/DataTables-1.10.13/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker_1.3.0.js') }}"></script>
    <script type="text/javascript">
        var scheduleTable;
        $( document ).ready(function() {
            scheduleTable = $('#schedule_table').DataTable();

            $("#coder_date").datepicker({
                startDate: "+1d",
                multidate: true
            }); 
        });

        $("body").on("click","#addScheduleSubmit",function(e){
            $(this).parents("form").ajaxForm(addScheduleSubmit);
        });
        var addScheduleSubmit = { 
            beforeSubmit:function(formData, jqForm, options){
                
                waitingDialog.show("Adding schedule....");
                $("#addScheduleModal").modal("hide");
                return true;
            },
            complete: function(response) 
            {
                var res = response.responseJSON;
                if(res.isSuccessful){

                    waitingDialog.show("SUCCESS", {
                        modalHeader: 'success',
                        dialog: "Successfully created",
                        footer: true,
                        onHide: function(){
                          var newRow = '<tr data-row-sched-id="'+res.id+'">'+
                            '<td>'+$('#course_level').val()+'</td>'+
                            '<td>'+$('#coder_date').val()+'</td>'+
                            '<td>0</td>'+
                            '<td>'+'date'+'</td>'+
                            '<td class="action_td"> <button class="btn btn-danger btn-xs row-recipient-delete" data-toggle="confirmation" '+
                            'data-recipient-index="'+res.id+'" >'+
                            '<i class="glyphicon glyphicon-trash"></i></button></td></tr>';

                            // $('#recipient_temp_table tr:last').after(newRow);
                            scheduleTable.row.add( $(newRow)[0] ).draw();
                   
                        }
                    });   


                } else {
                    waitingDialog.show("FAILED", {
                    modalHeader: 'danger',
                    dialog: res.result,
                    footer: true,
                        onHide: function(){
                          $("#addScheduleModal").modal("show");
                        }
                    });
                }
            }
        };


    </script>
@endsection
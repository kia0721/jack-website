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
                        <th width="20%">Schedule</th>
                        <th width="30%">Schedule</th>
                        <th width="10%">No. of students</th>
                        <th width="15%">Created Date</th>
                        <th class="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schedules as $sched)
                        <tr data-row-ten-id="{{ $sched->id }}">
                            <td >
                                <a href="{{ url('admin/courses/detail/'.$sched->id) }}">{{ $sched->course_level }}  </a>
                                 
                            </td>
                            <td> {{ $sched->coder_date }} </td>
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
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Add Schedule</h4>
                </div>

                <form class=""  method="POST" action="{{ url('/addSchedule') }}">
                <div class="modal-body">
                    <div class="row">
                        {{ csrf_field() }}
                        <div class="col-sm-12">
                            <label>Level</label>
                            <select  id="course_level" class="form-control">
                                
                               @foreach ($courseLevels as $cLevel)
                                <option value="{{ $cLevel->id }}"> {{ $cLevel->course_level }}</option>
                               @endforeach
                               
                            </select>
                        </div>
                        <div class="form-group coderDate" >
                            <div class="col-sm-12">
                                <label>Date</label>
                                <input type="text" class="form-control" name="coderDate" id="coderDate" style="border:2px solid #b3b3b3;" />     
                            </div>
                            
                        </div>
                    </div>                                   
                </div>
                <div class="modal-footer">
                    <div class="text-xs">
                        <button type="submit" class="btn btn-primary" id="addTweetMsgSubmit"><span class="btn-text">Add</span><i class="btn-loader"></i></button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
        
        $( document ).ready(function() {
            $('#schedule_table').DataTable();

            $("#coderDate").datepicker({
                startDate: "+1d",
                multidate: true
            }); 
        });


    </script>
@endsection
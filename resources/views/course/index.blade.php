@extends('layouts.main')

@section('css_link')
	<link href="{{ asset('/DataTables-1.10.13/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/DataTables-1.10.13/extensions/Responsive/css/responsive.dataTables.min.css') }}" rel="stylesheet">
   
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
 			<h3> Courses </h3>
        	
        	<hr>
        	<table class="table display dt-responsive"  width="100%" id="course_table">
                <thead>
                    <tr>
                        <th width="10%">Course</th>
                        <th width="30%">Description</th>
                        <th width="10%">Course Type</th>
                        <th width="30%">Schedule</th>
                        <th width="10%">Status</th>
                        <th width="10%">Actions</th>
                        <!-- <th class="action_td">Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr data-row-ten-id="{{ $course->course_id }}">
                            <td >
                                <a href="{{ url('admin/courses/detail/'.$course->course_id) }}">{{ $course->course_title }}  </a>
                                 
                            </td>
                            <td> {{ $course->course_description }} </td>
                            <td> {{ $course->course_type }} Coder Class</td>
                            <td> {{ $course->is_hidden }} </td>
                            <td> {{ $course->is_hidden }} </td>
                            <td>  </td>
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
@section('script_link')
    <script src="{{ asset('/DataTables-1.10.13/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.form.js') }}"></script>
    <script src="{{ asset('/DataTables-1.10.13/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript">
    	

    	$('#course_table').DataTable();
    </script>
@endsection
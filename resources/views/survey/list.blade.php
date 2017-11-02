@extends('layouts.main')

@section('css_link')

    <link href="{{ asset('/DataTables-1.10.13/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/DataTables-1.10.13/extensions/Buttons/css/buttons.dataTables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <!-- <div class="col-md-12 col-md-offset-1"> -->

        	<div class="col-md-12">
                <h3 style="margin-top: 0px; ">Survey List</h3>

                <table class="table display dt-responsive"  width="100%" id="tenant_table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Created at</th>
                                <th>Created by</th>
                                <!-- <th class="action_td">Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($surveys as $survey)
                                <tr data-row-ten-id="{{ $survey->id }}">
                                    <td >
                                        <a href="{{ url('/survey') }}/{{ $survey->id }}">{{ $survey->title }}  </a>
                                         
                                    </td>
                                    <td> {{ $survey->created_at }} </td>
                                    <td> {{ $survey->created_fname.' '.$survey->created_lname }} </td>
                                
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        <!-- </div> -->
    </div>
</div>
@endsection
@section('script_link')
    <script src="{{ asset('/DataTables-1.10.13/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript">

    </script>

@endsection
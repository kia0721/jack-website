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
                <table class="display table table-striped" id="c4wiUserTable"  width="100%" style="font-size:11px;">
                    <thead>
                        <tr>
                            <th>Fullname</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Access Point</th>
                            <th>Venue</th>
                            <th>Provider</th>
                            <th>Created Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($c4wiDbUsers as $c4wiDbUser)
                            <tr>
                                <td> {{ $c4wiDbUser->lastname }}, {{ $c4wiDbUser->firstname }} </td>
                                <td> {{ $c4wiDbUser->gender }} </td>
                                <td> {{ $c4wiDbUser->email }} </td>
                                <td> {{ $c4wiDbUser->phone }} </td>
                                <td> {{ $c4wiDbUser->access_point }} </td>
                                <td> {{ $c4wiDbUser->wifi_area }} </td>
                                <td> {{ $c4wiDbUser->provider }} </td>
                                <td> {{ $c4wiDbUser->created_at }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $c4wiDbUsers->render() !!}
@include('pagination.default', ['paginator' => $c4wiDbUsers])

            </div>
        <!-- </div> -->
    </div>
</div>
@endsection
@section('script_link')
    <script src="{{ asset('/DataTables-1.10.13/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/DataTables-1.10.13/extensions/Buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/DataTables-1.10.13/extensions/Buttons/js/buttons.flash.min.js') }}"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
    <script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
    <script src="{{ asset('/DataTables-1.10.13/extensions/Buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/DataTables-1.10.13/extensions/Buttons/js/buttons.print.min.js') }}"></script>
    <script type="text/javascript">

    	$('#c4wiUserTable').DataTable({
                "iDisplayLength": 10,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'print'
                ]
            });
    </script>

@endsection
@extends('layouts.main')

@section('css_link')

    <link href="{{ asset('/DataTables-1.10.13/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/DataTables-1.10.13/extensions/Buttons/css/buttons.dataTables.min.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row">
 
    	<div class="col-md-12">
            Survey Dashboard
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

    </script>

@endsection
@extends('layouts.mobile')

@section('css_link_2')
<style type="text/css">
	#addNewCourse:hover{
		cursor: pointer;
		background-color: #00bdf4;
		color:white;
	}

</style>
@endsection

@section('content')
<div class="main-wrapper">
    <div class="col-md-8 col-md-offset-2">
    	<div class="col-md-12 text-center">
            <h1 class="color-1">CART</h1>
            <h5>Your enlisted courses will be shown here. You may add, delete, or edit courses. Please specify your desired batch/schedule.</h5>
        </div>

        <div class="col-md-12" id="courseListContainer">
        	
        </div>

    	<div class="col-md-12 wishCourse text-center py-3" id="addNewCourse">
    		<h4><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add new course</h4>
    	</div>

        <div class="col-md-12 text-center py-3">
        
    		<button id="continueToRegistration" class="jack-btn btn-orange btn-lg">Save & Continue to Registration Page
			</button>
    	</div>
    </div>
</div>

@endsection
@section('script_link')

<script src="{{ asset('js/moment.js') }}"></script>

<script src="{{ asset('js/mobile/common-html/common-page-register.js') }}"></script>
<script src="{{ asset('js/site/cart.js') }}"></script>

<script type="text/javascript">
	

</script>
@endsection
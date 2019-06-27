@extends('layouts.site_3')

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
<div class="py-4 bg-white w-100"></div>
<section class="header4 align-top p-0 pt-5">
	<div class="container">
        <div class="row justify-content-md-center">
        	<div class="col-md-12 text-center">
                 
                <div class="clearfix float-my-children" style="margin-left: 43%;">
                <img src="{{ asset('assets/images/cart icon-41.png') }}" style="    width: 50px;">
                <div><h1 class="color-1 mbr-section-title">CART</h1></div>
                </div>
                <div class="course_cart_title"><hr></div>
                <h5 class="mbr-section-subtitle display-4 pt-3 space-button-cart">Your enlisted courses will be shown here. You may add, delete, or edit courses. Please specify your desired batch/schedule.</h5>
            </div>

            <div class="col-md-12 mbr-text" id="courseListContainer">
            	
            </div>

        	<div class="col-md-12 wishCourse text-center py-3 mbr-text" id="addNewCourse">
        		<h2><span class="mbri-plus"></span> Add new course</h2>
        	</div>

            <div class="col-md-12 py-3 text-center mbr-text">
	        
        		<button id="continueToRegistration" class="jack-btn btn-orange btn-lg">Save & Continue to Registration Page
				</button>
        	</div>
        </div>
    </div>
</section>

@endsection
@section('script_link')

<script src="{{ asset('js/moment.js') }}"></script>

<script src="{{ asset('js/site/common-html/common-page-register.js') }}"></script>
<script src="{{ asset('js/site/cart.js') }}"></script>
<script type="text/javascript">
	

</script>
@endsection
@extends('myLayout.app')
@section('pluginCss')
<!-- Editatable  Css-->
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/magnific-popup/dist/magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/jquery-datatables-editable/datatables.css') }}" />
 <!-- Notification css (Toastr) -->
        <link href="{{ URL::asset('assets/plugins/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
@endsection()
@section('content')
<div class="row m-t-40">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="newTrainingWrapper">
		<div class="card-box">
		<h1>Add New Loom</h1>
					{!! Form::open(['action' => 'LoomController@store', 'method'=>'POST', 'role' => 'form', 'id' =>'newLoomForm', 'name' => 'newLoomForm', 'data-parsley-validate' ]) !!}                        
					 @include('forms.newLoom', ['submitButtonText'=>'Add Loom'])
			{!! Form::close() !!} 
		</div>
	</div>
</div>


@endsection()
@section('pluginJs')
<script src="http://cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
<script src="{{ URL::to('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::to('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::to('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
 <!-- Toastr js -->
 <script src="{{URL::asset('assets/plugins/toastr/toastr.min.js') }}"></script>
@endsection()
@section('customJs')
<script>
	jQuery(document).ready(function()
	{
		 CKEDITOR.replace( 'loomIssueDetails' );
		 CKEDITOR.replace( 'description' );
	     jQuery( "#loomCreationDate" ).datepicker({ dateFormat: "DD-MM-YYYY" });
	     jQuery( "#blockedDate" ).datepicker({ dateFormat: "DD-MM-YYYY" });
	     jQuery( "#loomMenufacturingDate" ).datepicker({ dateFormat: "DD-MM-YYYY" });
	     
	});
</script>
@endsection()
@extends('myLayout.app')
@section('pluginCss')
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/chartist/dist/chartist.min.css')}}">
@endsection()
@section('content')
<div class="row m-t-40"> 
	<div class="col-lg-6">
		<div class="card-box">
            <div class="dropdown pull-right">
                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="zmdi zmdi-more-vert"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                </ul>
            </div>

			<h4 class="header-title m-t-0 m-b-30">Head Office Training</h4>

			<div id="headOfficeTraining" class="ct-chart ct-golden-section"></div>
		</div>
	</div><!-- end col-->
	<div class="col-lg-6">
		<div class="card-box">
            <div class="dropdown pull-right">
                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="zmdi zmdi-more-vert"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                </ul>
            </div>

			<h4 class="header-title m-t-0 m-b-30">Onfiled Training</h4>
			<div id="onfieldTraining" class="ct-chart ct-golden-section"></div>
		</div>
	</div><!-- end col-->
</div>
@endsection()
@section('pluginJs')
<script src="{{ URL::asset('assets/plugins/chartist/dist/chartist.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/chartist/dist/chartist-plugin-tooltip.min.js')}}"></script>
@endsection()
@section('customJs')
<script> 
	/* Head Office Training Chart */
	new Chartist.Bar('#headOfficeTraining', {
	  labels: ['Sensing Journey', 'Coaching Circle', 'Values', 'Core Statement', 'Skills Based Training', 'Founders Journey'],
	  series: [190, 80, 60, 120, 130, 200]
	}, {
	  distributeSeries: true,
	  plugins: [
				  Chartist.plugins.tooltip()
				]
	});
	/* // Head Office Training Chart */

	/* Head Office Training Chart */
	new Chartist.Bar('#onfieldTraining', {
	  labels: ['YWSEDP', 'SELP', 'WEP', 'BSKSP', 'RFIP', 'HHHFT', 'RPL'],
	  series: [90, 180, 150, 200, 180, 110, 140]
	}, {
	  distributeSeries: true,
	   plugins: [
				  Chartist.plugins.tooltip()
				]

	});
	/* // Head Office Training Chart */
</script>
@endsection()
@extends('layouts.master')
@section('title','disability');
@section('content')
<div class="col-md-12 ">
	<div class="row">
		<div id="container">
			
		</div>
		
	</div>
	


</div>





    
@endsection
@push('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script type="text/javascript">
	Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    title: {
        text: 'Audit Assista Disability  Report'
    },
    subtitle: {
        text: 'Audit Assista Disability Report'
    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 55
        }
    },
    series: [{
        name: 'YES ',
        name: 'NO ',
        data: [
            
            ['YES', 20],
            ['NO', 80],
           
        ]
    }]
});
</script>


@endpush
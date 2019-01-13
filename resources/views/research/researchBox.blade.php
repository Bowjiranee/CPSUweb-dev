{{-- <div class="panel-group" id="accordion"> --}}
<style>
	.panel-heading {background-color: #117167; color: white;}
</style>


	<div class="panel">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$year}}">งานวิจัยปี {{$year}}</a>
			</h4>
		</div>
		<div id="collapse{{$year}}" class="panel-collapse collapse-show" style="background-color:#f5f5f0">
			@foreach ($researchs as $research)
				<div class="panel-body">{{$research->info}}</div>
			@endforeach
		</div>
	</div>
{{-- </div> --}}
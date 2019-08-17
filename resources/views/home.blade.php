@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
        <!--Registered User-->
        <div class="panel media pad-all">
            <div class="media-left">
                <span class="icon-wrap icon-wrap-sm icon-circle bg-primary">
                <i class="fa fa-database fa-2x"></i>
                </span>
            </div>
            <div class="media-body">
                <p class="text-2x mar-no text-thin text-right">{{$d}}</p>
                <p class="h5 mar-no text-right">Total Data</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
        <!--New Order-->
        <div class="panel media pad-all">
            <div class="media-left">
                <span class="icon-wrap icon-wrap-sm icon-circle bg-info">
                <i class="fa fa-shopping-cart fa-2x"></i>
                </span>
            </div>
            <div class="media-body">
                <p class="text-2x mar-no text-thin text-right">  {{$s->id}}</p>
                <p class="h5 mar-no text-right">In Month</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
        <!--Comments-->
        <div class="panel media pad-all">
            <div class="media-left">
                <span class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                <i class="fa fa-comment fa-2x"></i>
                </span>
            </div>
            <div class="media-body">
                <p class="text-2x mar-no text-thin text-right">/p>
                <p class="h5 mar-no text-right">In Day</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
        <!--Sales-->
        <div class="panel media pad-all">
            <div class="media-left">
                <span class="icon-wrap icon-wrap-sm icon-circle bg-danger">
                <i class="fa fa-dollar fa-2x"></i>
                </span>
            </div>
            <div class="media-body">
                <p class="text-2x mar-no text-thin text-right">654</p>
                <p class="h5 mar-no text-right">Sales</p>
            </div>
        </div>
    </div>
</div>

<div class="panel">
  <div class="panel-body">
  <div id='app'>
  <xox>
  </xox>
  </div>
    <canvas id="ssss" style="width: 100px; height: 50px;"></canvas>
    <script>
        var ctx = document.getElementById("ssss").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['',
                @foreach($rd as $fg)
                '{{$fg->date}}',
                @endforeach
                            ],
                datasets: [{
                    label: '# total',
                    data: ['',
                    @foreach($rd as $fg)
                    '{{$fg->id}}',
                    @endforeach
                      
                    ],
                    backgroundColor: [
                        'rgba(15, 193, 116,0.7)',
      
                    ],
                    borderColor: [
                        'rgba(0, 158, 164,0.5)',
                    ],
                    borderWidth: 1
                }]
            },
           
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Chart.js Line Chart'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Value'
						}
					}]
				}
			}
        });
        </script>
       <div style="margin:30px;">
        @foreach ($rd as $i)
        <li>{{$i->date}}
        : {{$i->id}}</li>
        @endforeach
       </div>
     
{{$s->id}}
{{$day}}
{{$r}}
  </div>
</div>
@endsection

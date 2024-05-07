@extends('adminlte::page')

@section('content')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Work',     11],
      ['Eat',      2],
      ['Commute',  2],
      ['Watch TV', 2],
      ['Sleep',    7]
    ]);

    var options = {
      title: 'Atividades'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>

<div class="container">

<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-info">
<div class="inner">
<h3>{{ $categoria_count}}</h3>
<p>Categoria</p>
</div>
<div class="icon">
<i class="ion ion-bag"></i>
</div>
<a href="{{ url('/categoria') }}" class="small-box-footer"> Mais informações <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
<h3>{{ $postagem_count }}<sup style="font-size: 20px"></sup></h3>
<p>Postagem</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a href="{{ url('/postagem') }}" class="small-box-footer"> Mais informações <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<div class="col-lg-3 col-6">

    <div class="small-box bg-warning">
    <div class="inner">
    <h3>44</h3>
    <p>User Registrations</p>
    </div>
    <div class="icon">
    <i class="ion ion-person-add"></i>
    </div>
    <a href="#" class="small-box-footer"> Mais informações  <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>

    <div class="col-lg-3 col-6">

    <div class="small-box bg-danger">
    <div class="inner">
    <h3>65</h3>
    <p>Unique Visitors</p>
    </div>
    <div class="icon">
    <i class="ion ion-pie-graph"></i>
    </div>
    <a href="#" class="small-box-footer"> Mais informações  <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>



</div>

    <div id="piechart" style="width: 600px; height: 300px ;"></div>


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Olá Mundo!</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @can('is_admin')
                        <div class="alert alert-success" role="alert">
                            Você é um administrador!
                        </div>
                    @else
                        <div class="alert alert-success" role="alert">
                            Você é um usuario normal!
                        </div>
                    @endcan

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

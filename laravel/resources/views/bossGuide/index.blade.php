@extends('layouts.app')
{{ $boss_info = false }}
@section('content')
<div class="container content">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-size-fix">
                <div class="panel-heading">Boss Guides</div>

                <div class="boss-panel-body">
                	<div class="boss-info-panel">
                		<img class="boss-image-2" src="{{ URL::to('/') }}/img/corporeal_beast.png">
                		<h4>Corporeal Beast</h4>
                	</div>
                	<div class="boss-info-panel">
                		<img class="boss-image-2" src="{{ URL::to('/') }}/img/kalphite_king.png">
                		<h4>Kalphite King</h4>
                	</div>
                	<div class="boss-info-panel">
                		<img class="boss-image-2" src="{{ URL::to('/') }}/img/corporeal_beast.png">
                		<h4>Corporeal Beast</h4>
                	</div>
                	<div class="boss-info-panel">
                		<img class="boss-image-2" src="{{ URL::to('/') }}/img/kalphite_king.png">
                		<h4>Kalphite King</h4>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
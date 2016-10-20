@extends('layouts.app')
{{ $boss_info = false }}
@section('content')
<div class="container content">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-size-fix">
                <div class="panel-heading">Boss Guides</div>

                <div class="boss-panel-body">
                	<div class="boss-info-panel hvr-grow">
                		<a href="/kalphite_king/2">
                			<img class="boss-image-2" src="{{ URL::to('/') }}/img/kalphite_king.png">
                			<h4>Kalphite King</h4>
                		</a>
                	</div>
                	<div class="boss-info-panel hvr-grow">
                		<a href="/kalphite_queen/3">
                			<img class="boss-image-2" src="{{ URL::to('/') }}/img/kaliphite_queen.png">
                			<h4>Kalphite Queen</h4>
                		</a>
                	</div>
                	<div class="boss-info-panel hvr-grow">
                		<img class="boss-image-2" src="{{ URL::to('/') }}/img/exiled_kalphite_queen.png">
                		<h4>Exiled Kalphite Queen</h4>
                	</div>
                	<div class="boss-info-panel hvr-grow">
                		<a href="/king_black_dragon/5">
                			<img class="boss-image-2" src="{{ URL::to('/') }}/img/king_black_dragon.png">
                			<h4>King Black Dragon</h4>
                		</a>
                	</div>
                	<div class="boss-info-panel hvr-grow">
                		<a href="/queen_black_dragon/6">
                			<img class="boss-image-2" src="{{ URL::to('/') }}/img/queen_black_dragon.png">
                			<h4>Queen Black Dragon</h4>
                		</a>
                	</div>
                	<div class="boss-info-panel hvr-grow">
                		<img class="boss-image-2" src="{{ URL::to('/') }}/img/giant_mole.png">
                		<h4>Giant Mole</h4>
                	</div>
                	<div class="boss-info-panel hvr-grow">
                		<a href="/corporeal_beast/1">
                			<img class="boss-image-2" src="{{ URL::to('/') }}/img/corporeal_beast.png">
                			<h4>Corporeal Beast</h4>
                		</a>
                	</div>
                	<div class="boss-info-panel hvr-grow">
                		<a href="/general_graardor/10">
                			<img class="boss-image-2" src="{{ URL::to('/') }}/img/general_graardor.png">
                			<h4>General Graardor</h4>
                		</a>
                	</div>    	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
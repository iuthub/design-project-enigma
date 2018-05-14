@extends('layouts.app')
@section('content')
<div class="container-fluid padding">
	<div class="row padding" id="frst1">
		<div class="col-md-5 text-center" id="text1">
				<h1>Introducing Your <br> New Workout <br> Wardrobe<br></h1>
				<button type="button" class="btn btn-outline-secondary ">Start Shopping</button>
		</div>
		<div class="col-md-7" id="img1">
			<iframe class="apivideo" src="//www.youtube.com/embed/?listType=user_uploads&list=adidas" width="660px" height="400px" frameborder="0"></iframe>
		</div>
	</div>
	<div class="row" id="text2" >
        <div class="col-md-4 bgimg-1">
            <a href=""><h1>Story</h1></a>
        </div>
        <div class="col-md-4 bgimg-2">
            <a href=""><h1>Collection</h1></a>
        </div>
        <div class="col-md-3 bgimg-3 ">
            <a href="#"><h1>Community </h1></a>
        </div>
        <div class="col-md-offset-1"></div>
    </div>
    </div>
@endsection
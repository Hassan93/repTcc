@if(Session::has('success'))
	<div class="alert alert-success" role="alert">
		<strong>Sucesso</strong> {{Session::get('success')}}
	</div>
@elseif(Session::has('error'))
	<div class="alert alert-danger" role="alert">
		<strong>Oops!</strong> {{Session::get('error')}}
	</div>
@endif
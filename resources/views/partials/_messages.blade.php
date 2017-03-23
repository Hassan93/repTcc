@if(Session::has('success'))
	<div class="alert alert-success" role="alert">
		<h2><strong>Sucesso!</strong> {{Session::get('success')}}</h2>
	</div>
@elseif(Session::has('error'))
	<div class="alert alert-danger" role="alert">
		<h2><strong> Oops!</strong> {{Session::get('error')}}</h2>
	</div>
@endif
{{-- вывод ошибок на странице (начало кода) --}}
	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
{{-- вывод ошибок на странице (конец кода) --}}

@if(session('success'))
	<div class="alert alert-success">
		{{ session('success') }}
	</div>
@endif
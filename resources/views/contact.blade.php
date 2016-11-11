@extends("layouts.application")
@section("content")
	<div class="col-md-3 setcol">
			<h2>Riku Kiranatama</h2>
			<img src="img/riku.jpg" class="avatar">
		</div>

		<div class="col-md-offset-1 col-md-8 well bs-component">
			{!! Form::open(['route' => '.contactpost', 
			'class' => 'form-horizontal', 'role' => 'form']) !!}
				<div class="form-group">
					{!! Form::label('labelemail', 'Email', 
					array('class' => 'col-md-3 control-label')) !!}
					<div class="col-md-8">
						{!! Form::email('email', null, 
						array('class' => 'form-control', 
    					'placeholder'=>"Your Email")) !!}
					</div>
				</div>
				<div class="form-group">
					{!! Form::label('labelmessage', 'Messages', 
					array('class' => 'col-md-3 control-label')) !!}
					<div class="col-md-8">
						{!! Form::textarea('messages', null, 
						array('class' => 'form-control', 
    					'placeholder'=>"Your Messages",
    					'rows' => 12)) !!}
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						{!! Form::submit('Submit', array('class' => 'btn btn-raised btn-primary')) !!}
		            </div>		
				</div>
			{!! Form::close() !!}
		</div>
@stop
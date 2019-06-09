{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('networking_id', 'Networking_id:') !!}
			{!! Form::text('networking_id') !!}
		</li>
		<li>
			{!! Form::label('acountent_d', 'Acountent_d:') !!}
			{!! Form::text('acountent_d') !!}
		</li>
		<li>
			{!! Form::label('acountents_id', 'Acountents_id:') !!}
			{!! Form::text('acountents_id') !!}
		</li>
		<li>
			{!! Form::label('database_id', 'Database_id:') !!}
			{!! Form::text('database_id') !!}
		</li>
		<li>
			{!! Form::label('os_id', 'Os_id:') !!}
			{!! Form::text('os_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}


<!-- Task name -->
<div class="form-group">
	{!! Form::label('name', 'Task: ') !!}
	{!! Form::text('name', null) !!}
</div>

<!-- Body -->
<div class="form-group">
	{!! Form::label('body', 'Body: ') !!}
	{!! Form::text('body', null) !!}
</div>

<!-- General Due Date -->
<div class="form-group">
	{!! Form::label('general_duedate', 'General Due Date:') !!}

	<div class="form-check">
		{!! Form::radio('general_duedate', 'today', true) !!}
		Today
	</div>

	<div class="form-check">
		{!! Form::radio('general_duedate', 'tomorrow') !!}
		Tomorrow
	</div>

	<div class="form-check">
		{!! Form::radio('general_duedate', 'nextweek') !!}
		Next Week
	</div>

	<div class="form-check">
		{!! Form::radio('general_duedate', 'nextmonth') !!}
		Next Month
	</div>

	<div class="form-check">
		{!! Form::radio('general_duedate', 'someday') !!}
		Someday
	</div>
</div>

<!-- Specific due date Form Input -->
<div>
	{!! Form::label('due_date', 'Due: ') !!}
	{!! Form::input('date', 'due_date', date('Y-m-d')) !!}
</div>

<!-- Submit -->
<div class="form-group" style="margin-top: 20px">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>
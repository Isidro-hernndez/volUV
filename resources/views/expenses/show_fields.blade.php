<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $expense->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $expense->name !!}</p>
</div>

<!-- Price Purchase Field -->
<div class="form-group">
    {!! Form::label('price_purchase', 'Price Purchase:') !!}
    <p>{!! $expense->price_purchase !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $expense->description !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $expense->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $expense->updated_at !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $expense->user_id !!}</p>
</div>

<!-- Dinner Id Field -->
<div class="form-group">
    {!! Form::label('dinner_id', 'Dinner Id:') !!}
    <p>{!! $expense->dinner_id !!}</p>
</div>


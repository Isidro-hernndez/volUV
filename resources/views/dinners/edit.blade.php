@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Dinner
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($dinner, ['route' => ['dinners.update', $dinner->id], 'method' => 'patch']) !!}

                        @include('dinners.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
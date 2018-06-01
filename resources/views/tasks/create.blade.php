@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

     <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
            
                <div class="form-group">
                
                    
                    <div class="dropdown">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        ステータス<span class="caret"></span>
                      </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">完了</a></li>
                            <li><a href="#">途中</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">微妙</a></li>
                      </ul>
                </div>
                
                
               
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                    
              
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection
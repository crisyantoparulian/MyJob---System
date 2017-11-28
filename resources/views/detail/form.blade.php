
<div class="form-group">

{!! Form::label('title', 'Title', array('class' => 'col-lg-3 control-label')) !!}

<div class="col-lg-9">
{!! Form::text('title', null, array('class' => 'form-control',
'autofocus' => 'true')) !!}
<div class="text-danger">{!! $errors->first('title') !!}</div>
</div>
<div class="clear"></div>
</div>
<br/>
<div class="form-group">
<div class="clear"></div>
{!! Form::label('image', 'Image', array('class' => 'col-lg-3 control-label')) !!}
		<div class="col-lg-9">     
		{!! Form::file('image', null, array('class' => 'form-control')) !!}  
            <!--     <input type="file" name="image" class="form-control"> -->
            </div>
<div class="text-danger">{!! $errors->first('image') !!}</div>
</div>
<br/>
<div class="form-group">
{!! Form::label('content', 'Content', array('class' => 'col-lg-3 control-label')) !!}
<div class="col-lg-9">

{!! Form::textarea('content', null, array('class' => 'form-control', 'rows' => 10)) !!}

<div class="text-danger">{!! $errors->first('content') !!}</div>

</div>
<div class="clear"></div>
</div>
<div class="form-group">
<div class="col-lg-3"></div>
<div class="col-lg-9">

{!! Form::submit('Save', array('class' => 'btn btn-raised btn-primary')) !!}

{!! link_to(route('articles.index'), "Back", ['class' => 'btn btn-raised btn-info']) !!}

</div>
<div class="clear"></div>
</div>
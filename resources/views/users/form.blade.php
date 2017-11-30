<p>* Please Fill This Form Before You Apply The Job</p>
<div class="clear"></div>
<br/>
<div class="form-group">

{!! Form::label('full_name', 'Full Name', array('class' => 'col-lg-3 control-label')) !!}

<div class="col-lg-9">
{!! Form::text('full_name', null, array('class' => 'form-control',
'autofocus' => 'true')) !!}
<div class="text-danger">{!! $errors->first('full_name') !!}</div>
</div>
</div>
<div class="clear"></div>
<br/>

<div class="form-group">
<div class="clear"></div>
{!! Form::label('photo', 'Choose Photo', array('class' => 'col-lg-3 control-label')) !!}
		<div class="col-lg-9">     
		<!-- {!! Form::file('photo', null, array('class' => 'form-control','type'=>'file','accept' =>'application/pdf')) !!}   -->
		<input type="file" name="photo" id="photo" accept="image/x-png,image/gif,image/jpeg" />
            <!--     <input type="file" name="image" class="form-control"> -->
            </div>
<div class="text-danger">{!! $errors->first('photo') !!}</div>
</div>
<div class="clear"></div>
<br/>

<div class="form-group">
{!! Form::label('place_of_birth', 'Place Of Birth', array('class' => 'col-lg-3 control-label')) !!}
<div class="col-lg-9">
{!! Form::text('place_of_birth', null, array('class' => 'form-control')) !!}
<div class="text-danger">{!! $errors->first('place_of_birth') !!}</div>
</div>
</div>
<div class="clear"></div>
<br/>

<div class="form-group">
{!! Form::label('last_education', 'Last Education', array('class' => 'col-lg-3 control-label')) !!}
<div class="col-lg-9">
{!! Form::text('last_education', null, array('class' => 'form-control')) !!}
<div class="text-danger">{!! $errors->first('last_education') !!}</div>
</div>
</div>
<div class="clear"></div>
<br/>

<div class="form-group">
{!! Form::label('skills', 'Your Skills', array('class' => 'col-lg-3 control-label')) !!}
<div class="col-lg-9">
{!! Form::text('skills', null, array('class' => 'form-control')) !!}
<div class="text-danger">{!! $errors->first('skills') !!}</div>
</div>
</div>
<div class="clear"></div>
<br/>

<div class="form-group">
{!! Form::label('address', 'Address', array('class' => 'col-lg-3 control-label')) !!}
<div class="col-lg-9">
{!! Form::textarea('address', null, array('class' => 'form-control', 'rows' => 10)) !!}
<div class="text-danger">{!! $errors->first('address') !!}</div>
</div>
</div>
<div class="clear"></div>
<br/>

<div class="form-group">
{!! Form::label('phone_number', 'Phone Number', array('class' => 'col-lg-3 control-label')) !!}
<div class="col-lg-9">
{!! Form::text('phone_number', null, array('class' => 'form-control','type'=>'number','onkeypress'=>'return isNumberKey(event)')) !!}
<div class="text-danger">{!! $errors->first('phone_number') !!}</div>
</div>
</div>
<div class="clear"></div>
<br/>

<div class="form-group">
<div class="clear"></div>
{!! Form::label('file_cv', 'Choose Your CV', array('class' => 'col-lg-3 control-label')) !!}
		<div class="col-lg-9">     
			<input type="file" name="file_cv" id="file_cv" accept="application/pdf" />
            <span>*Pdf Only</span>
            </div>
<div class="text-danger">{!! $errors->first('file_cv') !!}</div>
</div>
<div class="clear"></div>
<br/>

<div class="form-group">
{!! Form::label('other_information', 'Other Information', array('class' => 'col-lg-3 control-label')) !!}
<div class="col-lg-9">
{!! Form::textarea('other_information', null, array('class' => 'form-control', 'rows' => 10)) !!}
<div class="text-danger">{!! $errors->first('other_information') !!}</div>
</div>
</div>
<div class="clear"></div>
<br/>

<div class="form-group">
<div class="col-lg-3"></div>
<div class="col-lg-9">

{!! Form::submit('Save Data', array('class' => 'btn btn-raised btn-primary')) !!}


</div>
<div class="clear"></div>
</div>
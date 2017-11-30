@extends("layout.master")
@section("content")
<center><h1>List User Apply</h1></center>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
@foreach($details as $detail) 

		<div class="col-md-6">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2>{{$detail->full_name}}</h2>
                    <p><strong>Last Education :</strong>  {{$detail->last_education}}</p>
                    <p><strong>Skills :</strong> {{$detail->skills}}</p>
                    <p><strong>Phone Number :</strong> {{$detail->phone_number}}</p>
                </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <img src="/photo/{{ $detail->photo }}" alt="" class="img-circle img-responsive">
                        <br/>
                        <figcaption >
                            <a href="{{ URL::to( '/cv/'. $detail->file_cv)  }}" target="_blank"><b>Download CV</b></a>
                            
                        </figcaption>
                    </figure>
                </div>
            </div> 
           
            <div class="col-xs-12 divider text-center">
                 <div class="col-xs-12">        
            <h2>{{$detail->status_cv}}</h2>  
            </div> 
                <div class="col-xs-12 col-sm-4 emphasis">
                    
                    <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    
                    <button class="btn btn-info btn-block show-modal"  data-name="{{$detail->full_name}}" data-birth="{{$detail->place_of_birth}}" data-education="{{$detail->last_education}}" data-skills="{{$detail->skills}}" data-address="{{$detail->address}}" data-phone="{{$detail->phone_number}}" data-other="{{$detail->other_information}}"><span class="fa fa-user"></span> View Profile </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                  
                    <div class="btn-group dropup btn-block">
                      <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu text-left" role="menu">
                        <li>{!! link_to(route('manages.change', $detail->user_id), 'Accept', ['class' => 'ButtonRead']) !!}</li>
                        <li class="divider"></li>
                        <li>{!! link_to(route('manages.reject', $detail->user_id), 'Reject', ['class' => 'ButtonRead']) !!}</li> 
                        <li class="divider"></li>
                        <li><a href="#" class="btn disabled" role="button"> Close </a></li>
                      </ul>
                    </div>
                </div>
            </div>
    	 </div>                 
		
    
</div>
@endforeach
<div>
{!! $details->render() !!}
</div>

<!-- Modal form to show a post -->
    <div id="showModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md panel">
           
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">Name :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Born :</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="birth_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">Education :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="education_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">Skills :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="skills_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Address :</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="address_show" cols="40" rows="5" disabled></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">Phone :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Other :</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="other_show" cols="40" rows="5" disabled></textarea>
                            </div>
                        </div>

                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            
        </div>
    </div>
</div>
    </div>
@stop
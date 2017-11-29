@extends("layout.master")
@section("content")
@foreach($details as $detail) 
<div class="container">    
                <div class="jumbotron">
                  <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                        <div  width="300px" height="400px">
                          <img src="/photo/{{ $detail->photo }}" alt="stack photo" class="img-responsive">
                        </div>
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black">
                            <h2>{{$detail->full_name}}</h2>
                          </div>
                            <hr>
                          <ul class="container details">
                            <h3>Your CV Status : <li><p>{{$detail->status_cv}}</p></li></h3>
                      </div>
                  </div>
                  <div align="center">
                    <span>*Update your profile to increase your chance to accepted</span><br/>
                   <button type="button" class="btn btn-info btn-lg btn3d" ></span> Edit Profile</button>
                   </div>
                </div>


@endforeach
@stop

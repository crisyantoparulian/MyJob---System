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
                        </ul>
                      </div>
                      <p>Please Wait For Next Step</p>
                  </div>
                  </div>
                  <div align="center">
                    <span>*Update your profile to increase your chance to accepted</span><br/>
                   <button type="button" class="edit-modal btn btn-info" data-user_id="{{$detail->user_id}}" data-full_name="{{$detail->full_name}}" data-photo="{{$detail->photo}}" data-place_of_birth="{{$detail->place_of_birth}}" data-last_education="{{$detail->last_education}}" data-skills="{{$detail->skills}}" data-address="{{$detail->address}}" data-file_cv="{{$detail->file_cv}}" data-phone_number="{{$detail->phone_number}}" data-other_information="{{$detail->other_information}}"></span> Edit Profile </button>
                   </div>
                   <div id="editModal" class="modal fade" role="dialog">
               <div class="modal-body">
                    <form class="form-horizontal"  role="form">
                      <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="user_id_edit" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="full_name_edit" autofocus>
                                <p class="errorName text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Photo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="photo_edit" autofocus>
                                <p class="errorPhoto text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Place Born:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="place_of_birth_edit" cols="40" rows="5"></textarea>
                                <p class="errorPlace text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Education:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="last_education_edit">
                                <p class="errorEducation text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Skills:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="skills_edit">
                                <p class="errorSkills text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Address:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="address_edit" cols="40" rows="5"></textarea>
                                <p class="errorAddress text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">CV:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="file_cv_edit">
                                <p class="errorFile text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Phone:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone_number_edit">
                                <p class="errorPhone text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Other:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="other_information_edit" cols="40" rows="5"></textarea>
                                <p class="errorOther text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary edit" data-dismiss="modal">
                            <span class='glyphicon glyphicon-check'></span> Edit
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                     </form>
                </div>
              </div>
                      </div>
        <!-- edit modal -->
   


@endforeach
@stop

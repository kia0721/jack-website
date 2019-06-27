<div id="registerAccModal" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-md">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Register <span id="user_type_span"> </span></h4>
                </div>

                <form class="form-horizontal"  method="POST" action="{{ url('register') }}">
                <div class="modal-body">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_type" id="user_type"/>
                        <div class="form-group">
                            <label for="lastname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required >

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('middlename') ? ' has-error' : '' }}">
                            <label for="middlename" class="col-md-4 control-label">Middle name</label>

                            <div class="col-md-6">
                                <input id="middlename" type="text" class="form-control" name="middlename" value="{{ old('middlename') }}" >

                                @if ($errors->has('middlename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middlename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
               
                </div>
                <div class="modal-footer">
                    <div class="text-xs">
                        <button type="submit" class="btn btn-primary" id="registerSubmit"><span class="btn-text">Register</span><i class="btn-loader"></i></button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div><!-- // modal-footer // -->
                </form>
            </div><!-- // modal-content // -->
            
    </div><!-- // modal-dialog // -->
</div>


@if (false)
<div id="accountDetailModal" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-md">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Details <span id="user_name"> </span></h4>
                </div>

                <form class="form-horizontal"  method="POST" action="/updateAccount">
                <div class="modal-body">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_type" id="user_type"/>
                        <div class="form-group">
                            <label for="lastname_u" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname_u" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname_u" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="firstname_u" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required >

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('middlename') ? ' has-error' : '' }}">
                            <label for="middlename_u" class="col-md-4 control-label">Middle name</label>

                            <div class="col-md-6">
                                <input id="middlename_u" type="text" class="form-control" name="middlename" value="{{ old('middlename') }}" >

                                @if ($errors->has('middlename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middlename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email_u" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email_u" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                
                </div>
                <div class="modal-footer">
                    <div class="text-xs">
                        <button type="submit" class="btn btn-primary" id="updateAccountSubmit"><span class="btn-text">Save</span><i class="btn-loader"></i></button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div><!-- // modal-footer // -->
                </form>
            </div><!-- // modal-content // -->
            
    </div><!-- // modal-dialog // -->
</div>
@endif
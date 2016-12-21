<div class="content">
    <div class="container-fluid">
        @include('public::notifications')
        <div class="row">
            <div class="col-md-6">
            {!!Form::vertical_open()
            ->id('update-profile')
            ->method('POST')
            ->class('update-profile')!!}
                <div class="card">
                    <div class="header  header-icon" data-background-color="blue">
                        <i class="material-icons">account_circle</i>
                    </div>
                    <div class="content">
                        <h4 class="card-title">Update Profile</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="name">Name</label>
                                        {!! Form::text('name')
                                        -> label(trans('user::user.label.name'))
                                        -> raw()!!}
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="datepicker">Date of Birth</label>
                                        {!! Form::text('dob')
                                        -> label(trans('user::user.label.dob'))
                                        -> id('datepicker')
                                        -> raw()!!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="designation">Designation</label>
                                        {!! Form::text('designation')
                                        -> label(trans('user::user.label.designation'))
                                        -> raw() !!}
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                        <label for="mobile" class="control-label">Mobile</label>
                                        {!! Form::number('mobile')
                                        -> label(trans('user::user.label.mobile'))
                                        -> raw() !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="phone">Phone</label>
                                        {!! Form::number('phone')
                                        -> label(trans('user::user.label.phone'))
                                        -> raw() !!}
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="address">Address</label>
                                        {!! Form::text('address')
                                        -> label(trans('user::user.label.address'))
                                        -> raw() !!}
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="street">Street</label>
                                        {!! Form::text('street')
                                        -> label(trans('user::user.label.street'))
                                        -> raw() !!}
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="city">City</label>
                                        {!! Form::text('city')
                                        -> label(trans('user::user.label.city'))
                                        -> raw() !!}
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="district">District</label>
                                        {!! Form::text('district')
                                        -> label(trans('user::user.label.district'))
                                        -> raw() !!}
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="state">State</label>
                                        {!! Form::text('state')
                                        -> label(trans('user::user.label.state'))
                                        -> raw() !!}
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="country">Country</label>
                                        {!! Form::text('country')
                                        -> label(trans('user::user.label.country'))
                                        -> raw() !!}
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="web">Web</label>
                                        {!! Form::text('web')
                                        -> label(trans('user::user.label.web'))
                                        -> raw() !!}
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
                    <div class="footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn-primary btn-raised btn">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
            <div class="col-md-6">
                {!!Form::vertical_open()
                ->id('change-picture')
                ->method('POST')
                ->class('change-password')
                ->enctype('multipart/form-data')
                ->action(url('/upload/litepie.user.user/'.@$user->getRouteKey().'/photo/file'))!!} 
                <div class="card">
                    <div class="header header-icon" data-background-color="orange">
                        <i class="pe-7s-album"></i>
                    </div>
                    <div class="content">
                        <h4 class="card-title">Change Picture</h4>
                        <div class="col-md-4">
                            
                            <div class="card">
            
                                
                                <label>
                                    <input type="file" class="sr-only" id="inputImage" name="photo" accept="image/*">
                                    <img src="{{url('img/female-upload-md.png')}}" class="img-responsive">
                                </label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="test1"></div>
                                <div class="img-container">
                                    <img id="image">
                                    <div class="docs-buttons hide">
                                        <div class="btn-group btn-group-crop pull-right">
                                          <button type="button" class="btn-danger btn-raised btn btn-sm" data-method="getCroppedCanvas">
                                            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)">
                                              Upload Image
                                            </span>
                                          </button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="col-md-6">
                {!!Form::vertical_open()
                ->id('change-password')
                ->method('POST')
                ->class('change-password')!!} 
                <div class="card">
                    <div class="header header-icon" data-background-color="orange">
                        <i class="material-icons">lock</i>
                    </div>
                    <div class="content">
                        <h4 class="card-title">Change Password</h4>
                            <div class="form-group label-floating">
                                <label class="control-label" for="old_password">Current Password</label>
                                {!! Form::password('old_password')
                              -> label(trans('user::user.label.current_password'))
                              -> raw() !!}
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label" for="password">New Password</label>
                                {!! Form::password('password')
                                  -> label(trans('user::user.label.new_password'))
                                  -> raw() !!}
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label" for="password_confirmation">Confirm New Password</label>
                                {!! Form::password('password_confirmation')
                                  -> label(trans('user::user.label.new_password_confirmation'))
                                  -> raw() !!}
                            </div>
                    </div>
                    <div class="footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn-primary btn btn-raised">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        
    </div>
</div>
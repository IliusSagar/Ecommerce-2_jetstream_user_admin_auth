@extends('user.user_master')
@section('user')



<div style="padding: 25px;">
<div class="card" >

    <div class="row" style="padding: 25px;">
        <div class="col-md-6">

            <h4>Change Password</h4>

    <form method="POST" action="{{ route('password.update') }}" >

        @csrf

        <div class="mb-3">
          <label  class="form-label">Current Password</label>
          <input id="current_password" type="password" name="oldpassword" class="form-control">
          
        </div>

        <div class="mb-3">
          <label  class="form-label">New Password</label>
          <input id="password" type="password" name="password" class="form-control" >
        </div>

        <div class="mb-3">
            <label  class="form-label">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" >
          </div>

        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div> <!-- // END COL MD 6 -->
    </div> <!-- // END ROW -->

</div>
</div>



@endsection
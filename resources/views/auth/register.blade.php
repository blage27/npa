@extends('layouts.guest-master')

@section('more-styles')
<style type="text/css">

</style>
@endsection
@section('content')
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Register</h4>
            <p class="center">Join the npa community now !</p>
          </div>
        </div>
        <ul class="collapsible collapsible-accordion" data-collapsible="expandable">
          <li class="active">
              <div class="collapsible-header pink pink-text text-lighten-5 active">Name</div>
              <div class="collapsible-body" style="display: block;">
                <div class="row margin">
                  <div class="input-field col s12 m4 14">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="firstname" type="text" value="{{old('firstname')}}" name="firstname">
                    <label for="firstname" class="center-align">First Name</label>
                  </div>
                  <div class="input-field col s12 m4 14">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="middlename" type="text" value="{{old('middlename')}}" name="middlename">
                    <label for="middlename" class="center-align">Middle Name(opt)</label>
                  </div>
                  <div class="input-field col s12 m4 14">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="lastname" type="text" value="{{old('lastname')}}" name="lastname">
                    <label for="lastname" class="center-align">Last Name</label>
                  </div>
                </div>
                <div class="row margin">
                  <div class="input-field col s12 m6 16">
                    <select id="genger" name="genger">
                      <option value="">--none--</option>
                      <option value="female">Female</option>
                      <option value="male">Male>
                    </select>
                    <label for="genger" class="center-align">Gender</label>
                  </div>                  
                  <div class="input-field col s12 m6 16">
                    <select id="prefix" name="prefix">
                      <option value="">--Select Prefix--</option>
                      <option value="Dr">Dr</option>
                      <option value="Miss">Miss</option>
                      <option value="Mr">Mr</option>
                      <option value="Mrs">Mrs</option>
                      <option value="Ms">Ms</option>
                      <option value="Prof">Prof</option>
                    </select>
                    <label for="prefix" class="center-align">Prefix</label>
                  </div>
                </div>
              </div>
          </li>
          <li class="active">
              <div class="collapsible-header pink pink-text text-lighten-5 active">Contact Information</div>
              <div class="collapsible-body" style="display: block;">
                <div class="row margin">
                  <div class="input-field col s12 m4 14">
                    <i class="mdi-social-public prefix"></i>
                    <input type="text" id="country" list="countries" value="{{old('country')}}" name="country">
                    <datalist id="countries">
                      <option value="Nigeria">Nigeria</option>
                      <option value="South Africa">South Africa</option>
                      <option value="Ghana">Ghana</option>
                    </datalist>
                    <label for="country" class="center-align">Country
                    </label>
                  </div>                  
                  <div class="input-field col s12 m4 14">
                    <i class="mdi-maps-place prefix"></i>
                    <input type="text" id="state" list="states" value="{{old('state')}}" name="state">
                    <datalist id="states">
                      <option value="">--Select State--</option>
                      <option value="Abuja">Abuja</option>
                      <option value="Bauchi">Bauchi</option>
                      <option value="Borno">Borno</option>
                      <option value="Enugu">Enugu</option>
                      <option value="Lagos">Lagos</option>
                    </datalist>
                    <label for="state" class="center-align">State</label>
                  </div>                
                  <div class="input-field col s12 m4 14">
                    <i class="mdi-maps-pin-drop prefix"></i>
                    <input type="text" list="cities" value="{{old('city')}}" name="city">
                    <datalist id="cities">
                      <option value="">--Select City--</option>
                      <option value="Ikorody">Ikorody</option>
                      <option value="Surulere">Surulere</option>
                      <option value="Yaba">Yaba</option>
                      <option value="Bariga">Bariga</option>
                      <option value="Shomolu">Shomolu</option>
                      <option value="Mushin">Mushin</option>
                    </datalist>
                    <label for="city" class="center-align">City</label>
                  </div>
                </div>
                <div class="row margin">
                  <div class="input-field col s12 m8 19">
                    <i class="mdi-maps-directions prefix"></i>
                    <input type="text" id="street" value="{{old('street')}}" name="street">
                    <label for="street" class="center-align">Street</label>
                  </div>
                  <div class="input-field col s12 m4 13">
                    <i class="mdi-maps-directions prefix"></i>
                    <input type="text" class="number_only" id="postal_code" value="{{old('postal_code')}}" name="postal_code">
                    <label for="postal_code" class="center-align">Zip/Postal Code</label>
                  </div>
                </div>
                <div class="row margin">
                  <div class="input-field col s12 m8 16">
                    <i class="mdi-communication-email prefix"></i>
                    <input type="email" id="email" value="{{old('email')}}" name="email">
                    <label for="email" class="center-align">Email</label>
                  </div>
                  <div class="input-field col s12 m4 16">
                    <i class="mdi-communication-email prefix"></i>
                    <input type="email" id="email-confirmation" value="{{old('email-confirmation')}}" name="email-confirmation">
                    <label for="email-confirmation" class="center-align">Confirm Email</label>
                  </div>
                </div>
                <div class="row margin">
                  <div class="input-field col s12 18">
                    <i class="mdi-hardware-phone-iphone prefix"></i>
                    <input type="text" class="number_only" id="mobile_phone" value="{{old('mobile_phone')}}" name="mobile_phone">
                    <label for="mobile_phone" class="center-align">Mobile Phone</label>
                  </div>
                </div>
                <div class="row margin">
                  <div class="input-field col s12 18">
                    <i class="mdi-maps-local-phone prefix"></i>
                    <input type="text" class="number_only" id="work_phone" value="{{old('work_phone')}}" name="work_phone">
                    <label for="work_phone" class="center-align">Work Phone</label>
                  </div>
                </div>
              </div>
          </li>
          <li class="active">
              <div class="collapsible-header pink pink-text text-lighten-5 active">One more Personal Info</div>
              <div class="collapsible-body" style="display: block;">
                <p>Date of Birth</p>
                <div class="row margin">
                  <div class="input-field col s12 m4 14">
                    <i class="mdi-editor-insert-invitation prefix"></i>
                    <select id="month" name="month">
                    <?php
                    $months = ['January', 'February','March','April','May','June','July','August','September','October','November','December']; ?>
                    @foreach($months as $m)
                      @if($m == old('month'))
                      <option value="{{$m}}" selected>{{$m}}</option>
                      @else
                      <option value="{{$m}}">{{$m}}</option>
                      @endif
                    @endforeach
                    </select>
                    <label for="month" class="center-align">Country
                    </label>
                  </div>                  
                  <div class="input-field col s12 m4 14">
                    <i class="mdi-editor-insert-invitation prefix"></i>
                    <select id="day" name="day">
                      <option value="">--Select State--</option>
                    </select>
                    <label for="day" class="center-align">State</label>
                  </div>                
                  <div class="input-field col s12 m4 14">
                    <i class="mdi-editor-insert-invitation prefix"></i>
                    <input type="text" list="cities" value="{{old('city')}}" name="city">
                    <datalist id="cities">
                      <option value="">--Select City--</option>
                      <option value="Ikorody">Ikorody</option>
                      <option value="Surulere">Surulere</option>
                      <option value="Yaba">Yaba</option>
                      <option value="Bariga">Bariga</option>
                      <option value="Shomolu">Shomolu</option>
                      <option value="Mushin">Mushin</option>
                    </datalist>
                    <label for="city" class="center-align">City</label>
                  </div>
                </div>
              </div>
          </li>
        </ul>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email">
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password-again" type="password">
            <label for="password-again">Password again</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="index-2.html" class="btn waves-effect waves-light col s12">Register Now</a>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? <a href="page-login.html">Login</a></p>
          </div>
        </div>
      </form>
    </div>
@endsection
@section('more-scripts')
<script type="text/javascript">
$(document).ready(function(){
  $(".number_only").keypress(
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if ((charCode < 48 || charCode > 57))
            return false;

        return true;
    }
  );
});
</script>
@endsection
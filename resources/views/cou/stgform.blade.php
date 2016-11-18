@extends('layout')
@section('counselling_content')
<div class="header row">
            <div class="col s2 m2 l1"><img src="images/logo.png" alt="college_logo" class="clogo"  style="border-radius:5px;"></div>
            <h1 class="heading col s8 m8 l10"><a href="http://www.iiitdmj.ac.in/" class="cname">PDPM IIITDM</a><br><small><a href="">Counselling Service</a></small></h1> <a href="">
        </div>    
        <div class="main_nav">
            	<nav id="mynav">
                    <div class="nav-wrapper">
                        <ul class="hide-on-med-and-down">
                            <li><a href="/counselling_cell/">Home</a></li>
                            <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Share Public Posts and Announcements Here!" href="/counselling_cell/problemportal" >Forum</a></li>
							@if (Auth::user()->user_type != 'faculty' AND Auth::user()->username != 'coordinator')
                            <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Personal Conversation Portal!" href="/counselling_cell/privateportal" >Problems</a></li>
						  @endif
                            
                            <li><a href="/counselling_cell/study_material">StudyPosts</a></li>
                            
                            @if (Auth::user()->user_type != 'faculty' AND Auth::user()->username != 'coordinator')
							<li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Application Process will be active from month of February."  href="/formfill">Applications</a></li>
                            @endif
						
							@if (Auth::user()->user_type == 'faculty' AND Auth::user()->username == 'counsellinghead')
									<li><a  href="/counselling_cell/faculty_access" >Admin</a></li>	
                            @endif
                            @if (Auth::user()->user_type == 'student' AND Auth::user()->username == 'coordinator')
									<li><a  href="/counselling_cell/assign_guides" >Assign Guides</a></li>
                                    <li><a  href="/counselling_cell/student_guides_list" >View Guides</a></li>
                            @endif
							<li><a href="/counselling_cell#faq">FAQ</a></li>
                            
                        </ul>
                    </div>
				</nav>
        </div>
<h4 class="col s12 m4 offset-m4">Student Guide Application Form</h4>
<div class="container">
<form class="s12" action="#">
<div class="row">
<div class="input-field col s6">
<input id="name" type="text" class="validate">
<label for="name">Name</label>
</div>
<div class="input-field col s6">
<input id="organization" type="text" class="validate">
<label for="organization">Branch</label>
</div>
<div class="input-field col s12">
<input id="address" type="text" class="validate">
<label for="address">CPI (Minimum Requirement >7.0)</label>
</div>
<div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Why You Want To Become Student Guide (150 Words)</label>
        </div>
		
      </div>
	   <div class="center-align">
      <a href="#!" class="waves-effect waves-light btn">Submit</a>
    </div>
 </form>
  </div>
<script>
$(document).ready(function() {
$('select').material_select();
$("dropdown-button").dropdown();
});
$('.datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
selectYears: 15 // Creates a dropdown of 15 years to control year
});
$('#timepicker').pickatime({
autoclose: false,
twelvehour: false
});
</script>
@stop
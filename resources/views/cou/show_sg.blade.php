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
<br>
             <h4 class="center-align">Student Guides</h4><hr>
            
        
        <div>
        <table class="striped bordered hoverable centered">
        <thead>
          <tr>
             <th data-field="name">Student Guide</th>
			 <th data-field="id">Student Assigned</th>
              
          </tr>
        </thead>
	@foreach($c as $cc)
        <tbody>
          <tr>
            <td>  {{$cc->stuguide_id}} </td>
			 <td>
				@foreach($d as $dd)
				
					@if ($cc->stuguide_id == $dd->stuguide_id)
						{{$dd->student_id}}
					@endif
			
				@endforeach
			
			
			</td>

		    </tr>
			@endforeach
      </table>
            </div>
        </div>

   
    
        
        
       <script>$(document).ready(function() {
    $(".dropdown-button").dropdown();
});
      </script> 
      
        <script>
            $(document).ready(function() {
                $('select').material_select();
                $(".dropdown-button").dropdown();
            });
        </script>
@stop
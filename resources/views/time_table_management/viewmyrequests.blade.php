@extends('layout')

@section('title')
  View My Requests
@stop

@section('content')

<nav class="mynav">
        <div class="nav-wrapper">
                <ul>
                        <li><a href="/time_table_management/">Back To Dashboard</a></li>
                        <li><a href="/time_table_management/view_tt/">View Time Table</a></li>
                        <li><a href="/time_table_management/scheduleanextraclass">Schedule an Extra Class</a></li>
                        @if(Auth::user()->hasRole('admin'))
                                <li><a href="/time_table_management/modify_tt">Modify Time Table</a></li>
                                <li><a href="/time_table_management/creatett">Create Time Table</a></li>
				<li><a href="/time_table_management/viewallrequests">Handle Requests</a></li>
                        @endif
                </ul>
        </div>
</nav>

<table class="bordered highlight centered"> 
<thead>
 <tr> 
 <th>Booked On</th> 
 <th>Booked For</th> 
 <th>Start Time</th>
 <th>End Time</th>
 <th>Course Code</th>
 <th>Strength</th> 
  <th>Status</th> 
  <th>Room Alotted</th>
 </tr> 
 </thead>
  <tbody>
  @foreach($requests as $request)
      <tr>
      <td>{{ $request->created_at }}</td>
      <td>{{ $request->date }}</td>
      <td>{{ $request->start_time }}</td>
      <td>{{ $request->end_time }}</td>
      <td>{{ $request->purpose }}</td>
      <td>{{$request->expected_no_of_students }}</td>
      <td>{{ $request->status }}</td>
      <td>{{ $request->room_id }}</td>
    </tr>
  @endforeach
<!--   <tr> 
  <td>19-01-2016</td> 
  <td>25-01-2016</td> 
  <td>09:00</td>
  <td>10:00</td>
  <td>NS101</td>
  <td>Approved</td>
  <td>CR-101</td>
  </tr> --> 
    </tbody> 
    </table>    
    @stop

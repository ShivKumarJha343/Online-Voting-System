@extends('layouts.backend.layouts.master')
@section('content')

<style>

  th, td{
    font-size: 10px;
  }
  td a.ed{
    color:red;
    padding:8px 5px;
    background-color:yellow;
    margin-right:5px;
    font-size: 9px;
  }
  td a.dl{
    color:red;
    padding:8px 5px;
    background-color:orange;
    font-size: 9px;
  }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<table class="table" >
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Citizenship_No</th>
      <th scope="col">Age</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Qualification</th>
      <th scope="col">Marital_Status</th>
      <th scope="col">City</th>
      <th scope="col">Area</th>
      <th scope="col">Upload_Photo</th>
      <th scope="col">Party_Name</th>
      <th scope="col">Election_Symbol</th>
      
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
  @if(isset($candidates))
      @foreach($candidates as $candidate)
      <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$candidate->Name}}</td>
      <td>{{$candidate->Citizenship_No}}</td>
      <td>{{$candidate->Age}}</td>
      <td>{{$candidate->Email}}</td>
      <td>{{$candidate->Gender}}</td>
      <td>{{$candidate->Qualification}}</td>
      <td>{{$candidate->Marital_Status}}</td>
      <td>{{$candidate->City}}</td>
      <td>{{$candidate->Area}}</td>
      <td>
        <img src="{{$candidate->Upload_Photo}}" height="100px" width="100px">
      </td>
      <td>{{$candidate->Party_Name}}</td>
      <td>{{$candidate->Election_Symbol}}</td>
     
          <td> <a class="ed" href="{{ route('candidate.edit',$candidate->id)}}"> Edit </a>
                <a class="dl"  href="{{ route('candidates.delete',$candidate->id)}}">Delete </a></td>
                          </tr>
      @endforeach
    @endif
    
  </tbody>
</table>
@endsection
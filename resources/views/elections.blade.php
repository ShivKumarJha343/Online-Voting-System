@extends('layouts.backend.layouts.master')
@section('content')
<style>

  th, td{
    font-size: 15px;
  }
  td a.ed{
    color:black;
    padding:8px 5px;
    background-color:red;
    margin-right:5px;
    font-size: 9px;
  }
  td a.dl{
    color:black;
    padding:8px 5px;
    background-color:blue;
    font-size: 9px;
  }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<table class="table" >
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">SN</th>
      <th scope="col">Title</th>
     <th scope="col">Date</th>
      <th scope="col">Area</th>
      <th scope="col">Candidate</th>
      
      
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
  @if(isset($elections))
      @foreach($elections as $election)
      <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$election->SN}}</td>
      <td>{{$election->Title}}</td>
      <td>{{$election->Date}}</td>
      <td>{{$election->Area}}</td>
      <td>{{$election->Candidate_List}}</td>
     
     
          <td> <a class="ed" href="{{route('election.edit',$election->id)}}" > Edit </a>
                <a class="dl"  href="{{route('election.delete',$election->id)}}">Delete </a></td>
                          </tr>
      @endforeach
    @endif
    
  </tbody>
</table>
@endsection
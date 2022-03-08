@extends('layouts.backend.layouts.master')
@section('content')



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form action="{{route('election.submit')}}" method="post">
    @csrf

    <div class="form-group">
    <label for="SN">SN</label>
    <input type="text" name="SN" class="form-control"   placeholder="Enter Serial Number">
    

  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" name="Title" class="form-control"   placeholder="Enter Election Title">
    
  </div>
  <div class="form-group">
    <label for="Date">Date</label>
    <input type="date" name="Date"  />
  </div>
  
  <div class="form-group">
    <label for="Area">Area</label>
    <input type="text" name="Area" class="form-control"  placeholder="Enter Area">
  </div>

  <div class="form-group">
    <label for="Candidate">Candidate</label>
   <select name="Candidate_List" class="form-control"  placeholder="Enter Candidate Name" witdth="">
    <option value="Merceders"> Merceders </option>  
    <option value="BMW"> BMW </option>  
    <option value="Jaguar"> Jaguar </option>  
    <option value="Lamborghini"> Lamborghini </option>  
    <option value="Ferrari"> Ferrari </option>  
    <option value="Ford"> Ford </option>  
</select> 
  </div>
<br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
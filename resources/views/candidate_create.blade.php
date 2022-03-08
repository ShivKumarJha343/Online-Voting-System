@extends('layouts.backend.layouts.master')
@section('content')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form action="{{route('candidate.submit')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="Name" class="form-control"  placeholder="Name">
    
  </div>
  <div class="form-group">
    <label>Age</label>
    <input type="text" name="Age" class="form-control" placeholder="Author">
  </div>
  <div class="form-group">
  <label>Email</label>
  <input type="text" name="Email" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Gender</label>
  <input type="text" name="Gender" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Qualification</label>
  <input type="text" name="Qualification" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Marital_Status</label>
  <input type="text" name="Marital_Status" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>City</label>
  <input type="text" name="City" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Area</label>
  <input type="text" name="Area" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Upload_Photo</label>
  <input type="file" name="Upload_Photo" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Party_Name</label>
  <input type="text" name="Party_Name" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Election_Symbol</label>
  <input type="text" name="Election_Symbol" class="form-control"  placeholder="Price">
  </div>

  <!-- <div class="form-group">
  <label>Cover</label>
  <input type="file" name="cover" class="form-control">
 
  
  </div> -->

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
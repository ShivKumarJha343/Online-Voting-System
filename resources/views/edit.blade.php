<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form action="{{route('candidates.update',$candidates->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="Name"  value="{{ $candidates->Name ?? null }}" class="form-control"  placeholder="Name">
    
  </div>
  <div class="form-group">
    <label>Age</label>
    <input type="text" name="Age" value="{{ $candidates->Age ?? null }}"  class="form-control" placeholder="Author">
  </div>
  <div class="form-group">
  <label>Email</label>
  <input type="text" name="Email"  value="{{ $candidates->Email ?? null }}" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Gender</label>
  <input type="text" name="Gender" value="{{ $candidates->Gender ?? null }}" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Qualification</label>
  <input type="text" name="Qualification" value="{{ $candidates->Qualification ?? null }}" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Marital_status</label>
  <input type="text" name="Marital_status" value="{{ $candidates->Marital_status ?? null }}" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>City</label>
  <input type="text" name="City" value="{{ $candidates->City ?? null }}" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Area</label>
  <input type="text" name="Area" value="{{ $candidates->Area ?? null }}" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Upload_Photo</label>
  <input type="file" name="Upload_Photo" value="{{ $candidates->Upload_Photo ?? null }}" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Party_Name</label>
  <input type="text" name="Party_Name" value="{{ $candidates->Party_Name ?? null }}" class="form-control"  placeholder="Price">
  </div>

  <div class="form-group">
  <label>Election_Symbol</label>
  <input type="text" name="Election_Symbol" value="{{ $candidates->Election_Symbol ?? null }}" class="form-control"  placeholder="Price">
  </div>

  <!-- <div class="form-group">
  <label>Cover</label>
  <input type="file" name="cover" class="form-control">
 
  
  </div> -->

  <button type="Update" class="btn btn-primary">Submit</button>
</form>

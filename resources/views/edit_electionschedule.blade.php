<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form action="{{route('election.update',$elections->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label>SN</label>
    <input type="text" name="SN"  value="{{ $elections->SN ?? null }}" class="form-control"  placeholder="Enter Serial Number">
    
  </div>
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="Title" value="{{ $elections->Title ?? null }}"  class="form-control" placeholder="Enter Election Title">
  </div>
  <div class="form-group">
  <label>Date</label>
  <input type="text" name="Date"  value="{{ $elections->Date ?? null }}" class="form-control"  placeholder="Enter Election Date">
  </div>

  <div class="form-group">
  <label>Area</label>
  <input type="text" name="Area" value="{{ $elections->Area ?? null }}" class="form-control"  placeholder="Enter Election Area">
  </div>

  <div class="form-group">
  <label>Candidate_List</label>
  <input type="text" name=">Candidate_List" value="{{ $elections->Candidate_List ?? null }}" class="form-control"  placeholder="Enter Candidate Name">
  </div>

  
  

  <button type="Update" class="btn btn-primary">Update</button>
</form>
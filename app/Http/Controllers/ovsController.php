<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades;
use Illuminate\Http\Request;
use App\candidate;
use App\election;
class ovsController extends Controller
{
   
    public function index(){
       $candidates = candidate::all();
        return view('candidates', compact('candidates')); 
    }
    public function create(){
        return view('candidate_create');
    }
    public function candidate_submit(Request $request){

      $image_url='';
      if($request->hasFile('Upload_Photo')){
          $file=$request->file('Upload_Photo');
          $new_name=str_random(5).time().$file->getClientOriginalName();
          $path=public_path('/uploads');
          $file->move($path,$new_name);
          $image_url=asset('uploads/'.$new_name);
       //    dd('$image_url');
      }
       try{

      $data=[
            
        'Name'=>$request->get('Name'),
        'Citizenship_No'=>$request->get('Citizenship_No'),
        'Age'=>$request->get('Age'),
        'Email'=>$request->get('Email'),
        'Gender'=>$request->get('Gender'),
        'Qualification'=>$request->get('Qualification'),
        'Marital_Status'=>$request->get('Marital_Status'),
        'City'=>$request->get('City'),
        'Area'=>$request->get('Area'),
        'Upload_Photo'=>$image_url ?? '',
       // 'Upload_Photo'=>$request->get('Upload_Photo'),
        'Party_Name'=>$request->get('Party_Name'),
        'Election_Symbol'=>$request->get('Election_Symbol'),
       // 'Upload_Photo'=>$image_url ?? '',
    ];
    candidate::insert($data);
    return redirect()->route('candidate.index'); 
  
    }catch(\Exception $exception){
      dd($exception);
    }

  } 

 // public function election(){
    //$elections = election::all();
    // return view('elections'); 
//}
// public function election_create(){
   //  return view('shiv');
//}
  public function edit($id){
        
        $candidates=candidate::where('id',$id)->first();
       // dd(candidate);
        if($candidates){
            return view('edit',compact('candidates'));
        }
    }

    public function candidate_update(Request $request,$id){

        $image_url='';
        if($request->hasFile('Upload_Photo')){
            $file=$request->file('Upload_Photo');
            $new_name=str_random(5).time().$file->getClientOriginalName();
            $path=public_path('/uploads');
            $file->move($path,$new_name);
            $image_url=asset('uploads/'.$new_name);
         //    dd('$image_url');
        }
         
  
        $data=[
              
          'Name'=>$request->get('Name'),
          'Citizenship_No'=>$request->get('Citizenship_No'),
          'Age'=>$request->get('Age'),
          'Email'=>$request->get('Email'),
          'Gender'=>$request->get('Gender'),
          'Qualification'=>$request->get('Qualification'),
          'Marital_Status'=>$request->get('Marital_Status'),
          'City'=>$request->get('City'),
          'Area'=>$request->get('Area'),
          'Upload_Photo'=>$image_url ?? '',
         // 'Upload_Photo'=>$request->get('Upload_Photo'),
          'Party_Name'=>$request->get('Party_Name'),
          'Election_Symbol'=>$request->get('Election_Symbol'),
         // 'Upload_Photo'=>$image_url ?? '',
      ];
      candidate::where('id',$id)->update($data);
      return redirect()->route('candidate.index'); 
       }

       public function delete($id){
        $candidates=candidate::find($id);
        if($candidates){
            candidate::destroy($id);
        }
        return redirect()->back();
    }
    
     // Book::where('id',$id)->update($data);



    public function election(){
         $elections = election::all();
          return view('elections',compact('elections')); 
      }
      public function election_create(){
          return view('election_create');
          }
          public function election_submit(Request $request){
            $data=[
            
              'SN'=>$request->get('SN'),
              'Title'=>$request->get('Title'),
              'Date'=>$request->get('Date'),
              'Area'=>$request->get('Area'),
              'Candidate_List'=>$request->get('Candidate_List'),
            ];
            election::insert($data);
            return redirect()->route('election.index'); 
      }

      public function electionschedule_edit($id){
        
        $elections=election::where('id',$id)->first();
       // dd(candidate);
        if($elections){
            return view('edit_electionschedule',compact('elections'));
        }
    }

public function electionschedule_update(Request $request,$id){

  $data=[
            
    'SN'=>$request->get('SN'),
    'Title'=>$request->get('Title'),
    'Date'=>$request->get('Date'),
    'Area'=>$request->get('Area'),
    'Candidate_List'=>$request->get('Candidate_List'),
  ];

  election::where('id',$id)->update($data);
  return redirect()->route('election.index');


}


      public function electionschedule_delete($id){
        $elections=election::find($id);
        if($elections){
            election::destroy($id);
        }
        return redirect()->back();
    }

// Frontend Functions
public function Schedule(){
  $elections = election::all();
   return view('Election_Schedule', compact('elections')); 
}

}
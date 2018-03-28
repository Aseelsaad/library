<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Student;

class FrontendController extends Controller
{
    public function index()
    {
        //to display the last 4 books added to the database
       $books = Book::orderBy('id', 'desc')->take(4)->get();
        return view('frontend.home',compact('books'));
    }

    public function books()
    {
      //if we specify a type only books of this type will be retrieved
      //pagination allow me to divide the results into pages
      if(request()->has('type')){
        $books = Book::where('type',request('type'))->paginate(8)->appends('type',request('type'));
      }else{
        //if type is not speciified all books wikk be displayed
        $books = Book::paginate(8);
      }
      //return the books I asked for in the books view to use it
        return view('frontend.books',compact('books'));
    }

    public function book($id)
    {
          $book = Book::find($id);
           return view ('frontend.book',compact('book'));
    }

    public function gd()
    {
           return view ('frontend.studentsGD');
    }

    public function done(Request $request)
    {
      //this will get all the form inputs except the image because it needs some work to do on
      $formInput=$request->except('image');

//        validation
    $this->validate($request,[
      //name should be something
        'name'=>'required',
        'fname'=>'required',
        'gname'=>'required',
        'idCard'=>'required|numeric',
        'birth'=>'required',
        'collegeName'=>'required',
        'deptName'=>'required',
        'graduationYear'=>'required',
        'address'=>'required',
        //image type and size
        'image'=>'image|mimes:png,jpg,jpeg|max:10000'
    ]);
//        image upload, get it from the form
    $image=$request->image;
    //if there is an image save it to db
    if($image){
      //this will get us the original name
        $imageName=$image->getClientOriginalName();
        //here we will call the move method so will move it to images folder
        $image->move('images',$imageName);
        //add it to the array of formInput
        $formInput['image']=$imageName;
    }
    //after getting all the form information let's create new item
    Student::create($formInput);
    //after creating the new student redirect us to the admin index page
    return redirect('/')->with('status', 'You can receive the graduation documentation in 3 weeks!');
      }
}

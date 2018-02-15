<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.book.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //to pass the categories from database to the form
        $categories = Category::pluck('name','id');
        return view ('admin.book.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //this will get all the form inputs except the image because it needs some work to do on
      $formInput=$request->except('image');

//        validation
    $this->validate($request,[
      //name should be something
        'name'=>'required',
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
    Book::create($formInput);
    //after creating the new book redirect us to the admin index page
    return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

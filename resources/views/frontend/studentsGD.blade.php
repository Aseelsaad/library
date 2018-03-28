@extends('layout.main')

@section('title','Graduated students')
@section('content')
<div class="container mt-3">
  <h3>Graduated student information</h3>
  <form method="POST" action="{{route('success')}}" enctype="multipart/form-data">
    <!-- add enctype="multipart/form-data" to enable to store image in my product and database -->
      {{csrf_field()}}
    <div class="form-group">
      <label>First name</label>
      <input type="text" class="form-control" placeholder="Your name" name="name" required>
    </div>

    <div class="form-group">
      <label>Second name</label>
      <input type="text" class="form-control" placeholder="Father's name" name="fname" required>
    </div>

    <div class="form-group">
      <label>Third name</label>
      <input type="text" class="form-control" placeholder="Grandfather's name" name="gname" required>
    </div>

    <div class="form-group">
      <label>Birth date</label>
      <input type="date" class="form-control" name="birth" required>
    </div>

    <div class="form-group">
      <label>Card ID number</label>
      <input type="text" class="form-control" placeholder="Your national identity" name="idCard" required>
    </div>

<div class="row justify-content-center">
  <div class="form-group col-md-4">
    <label for="college">College name</label>
    <select id="college" class="custom-select mr-sm-2" name="collegeName" required>
      <option value="College of Law">College of Law</option>
      <option value="College of Medicine">College of Medicine</option>
      <option selected value="College of Engineering">College of Engineering</option>
      <option value="College of Sciences">College of Sciences</option>
      <option value="College of Political Sciences">College of Political Sciences</option>
      <option value="College of Information Engineering">College of Information Engineering</option>
      <option value="College of Business Eeconomics">College of Business Eeconomics</option>
      <option value="College of Biotechnology">College of Biotechnology</option>
      <option value="College of Pharmacy">College of Pharmacy</option>
    </select>
  </div>

  <div class="form-group col-md-4">
    <label for="dept">Department name</label>
    <select id="dept" class="custom-select mr-sm-2" name="deptName">
      <option selected value="Civil Engineering dept">Civil Engineering dept</option>
      <option value="Electronic Engineering and Communications dept">Electronic Engineering and Communications dept</option>
      <option value="Mechanical Engineering dept">Mechanical Engineering dept</option>
      <option value="Chemical Engineering dept">Chemical Engineering dept</option>
      <option value="Computer Engineering dept">Computer Engineering dept</option>
      <option value="Laser and Optical Electronics Engineering dept">Laser and Optical Electronics Engineering dept</option>
      <option value="Medical Engineering dept">Medical Engineering dept</option>
      <option value="Architecture Engineering dept">Architecture Engineering dept</option>
      <option value="Prosthetic and Orthotic Engineering dept">Prosthetic and Orthotic Engineering dept</option>
      <option value="Chemistry dept">Chemistry dept</option>
      <option value="Physics dept">Physics dept</option>
      <option value="Computer Science dept">Computer Science dept</option>
      <option value="Mathmatics and Computer dept">Mathmatics and Computer dept</option>
      <option value="Applications dept">Applications dept</option>
      <option value="No department">No department</option>
    </select>
  </div>

  <div class="form-group col-md-4" required>
    <label for="year">Graduation year</label>
    <select id="year" class="custom-select mr-sm-2" name="graduationYear">
      <option value="2018" selected>2018</option>
      <option value="2017">2017</option>
      <option value="2016">2016</option>
      <option value="2015">2015</option>
      <option value="2014">2014</option>
      <option value="2013">2013</option>
      <option value="2012">2012</option>
      <option value="2011">2011</option>
      <option value="2010">2010</option>
      <option value="2009">2009</option>
      <option value="2008">2008</option>
      <option value="2007">2007</option>
      <option value="2006">2006</option>
      <option value="2005">2005</option>
      <option value="2004">2004</option>
      <option value="2003">2003</option>
      <option value="2002">2002</option>
      <option value="2001">2001</option>
      <option value="2000">2000</option>
    </select>
  </div>
</div>

  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" placeholder="Your address" name="address" required>
  </div>

    <div class="form-group">
  <label for="exampleInputFile">Upload your photo</label>
  <input type="file" class="form-control-file" id="exampleInputFile" name="image" aria-describedby="fileHelp">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection

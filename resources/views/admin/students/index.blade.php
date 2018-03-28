@extends('admin.layout.admin')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12">
        <h3>Students</h3>
      <table class="table table-responsive table-bordered table-hover">
        <thead>
          <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">First name</th>
            <th scope="col">Second name</th>
            <th scope="col">Third name</th>
            <th scope="col">Birth date</th>
            <th scope="col">Card id</th>
            <th scope="col">College</th>
            <th scope="col">Department</th>
            <th scope="col">Graduation year</th>
            <th scope="col">Address</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
        <tbody>
          @forelse($students as $student)
          <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->fname}}</td>
            <td>{{$student->gname}}</td>
            <td>{{$student->birth}}</td>
            <td>{{$student->idCard}}</td>
            <td>{{$student->collegeName}}</td>
            <td>{{$student->deptName}}</td>
            <td>{{$student->graduationYear}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->image}}</td>
          </tr>
          @empty

          <h3>No students added yet</h3>

      @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

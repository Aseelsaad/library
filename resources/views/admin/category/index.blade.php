@extends('admin.layout.admin')

@section('content')

    <div class="navbar">
        <a class="navbar-brand" href="#">Available Categories : </a>
        <ul class="nav navbar-nav">
          <!-- if categories not empty means there are categories available -->
            @if(!empty($categories))
            @forelse($categories as $category)
                <li class="active">
                  <!-- this link will display the books that related to this category name based on its id -->
                    <a href="{{route('category.show',$category->id)}}">{{$category->name}}</a>
                     </form>

                </li>
            @empty
                <li>No Categories added yet</li>
            @endforelse
                @endif

        </ul>


        <!-- Modal to add new category to the database -->
    <a class="btn btn-primary " data-toggle="modal" href="#category">Add Category</a>
    <div class="modal fade" id="category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add New</h4>
                </div>
                {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
                <div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                {!! Form::close() !!}
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </div>

    {{--Books--}}
    @if(isset($books))

    <h3>Books</h3>

    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th>Books</th>
    		</tr>
    	</thead>
    	<tbody>
@forelse($books as $book)
    <tr><td>{{$book->name}}</td></tr>
    	@empty
        <tr><td>no books added yet</td></tr>
        @endforelse

        </tbody>
    </table>
    @endif

@endsection

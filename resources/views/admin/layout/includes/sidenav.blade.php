{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Books
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('book.index')}}">Books</a></li>
                    <li><a href="{{route('book.create')}}">Add Book</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Categories
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('category.index')}}">Categories</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Orders
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{url('admin/orders/pending')}}">Pending orders</a></li>
                    <li><a href="{{url('admin/orders/retrieved')}}">Retrieved orders</a></li>
                    <li><a href="{{url('admin/orders')}}">All orders</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->

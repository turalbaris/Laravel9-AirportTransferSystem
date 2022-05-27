<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="{{asset('assets')}}/admin/img/user.png" class="img-thumbnail" />

                    <div class="inner-text">
                        {{ Auth::user()->name }}

                        <br />
                        <small> {{ Auth::user()->email }}</small>
                        <br>
                        <div>
                            <a class="btn btn-primary py-3 px-5" href="/user-logout">Log out</a>
                        </div>
                    </div>
                </div>

            </li>


            <li>
                <a href="/admin"><i class="glyphicon glyphicon-home"></i>Dashboard</a>
            </li>


            <li>
                <a href="#"><i class="glyphicon glyphicon-plane"></i>Reservations <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="form.html"><i class="glyphicon glyphicon-chevron-right"></i>New Reservations</a>
                    </li>
                    <li>
                        <a href="form-advance.html"><i class="glyphicon glyphicon-chevron-right"></i>Accepted Reservations</a>
                    </li>
                    <li>
                        <a href="form-advance.html"><i class="glyphicon glyphicon-chevron-right"></i>Completed Reservations</a>
                    </li>

                </ul>
            </li>


            <li>
                <a href="/admin/category"><i class="glyphicon glyphicon-list"></i>Categories</a>
            </li>
            <li>
                <a href="/admin/product"><i class="glyphicon glyphicon-transfer"></i>Transfer(Product)</a>
            </li>
            <li>
                <a href="/admin/comment"><i class="glyphicon glyphicon-comment"></i>Comments</a>
            </li>
            <li>
                <a href="{{route('admin.message.index')}}"><i class="glyphicon glyphicon-bullhorn"></i>Messages</a>
            </li>
            <li>
                <a href="/admin/user"><i class="glyphicon glyphicon-user"></i>Users</a>
            </li>
            <li>
                <a href="/admin/location"><i class="glyphicon glyphicon-link"></i>Locations</a>
            </li>
            <li>
                <a href="{{route('admin.faq.index')}}"><i class="glyphicon glyphicon-question-sign"></i>FAQ</a>
            </li>
            <li>
                <a class="active-menu" href="/admin/setting"><i class="glyphicon glyphicon-cog"></i>Settings</a>
            </li>




        </ul>
    </div>

</nav>

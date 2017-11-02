<div class="sidebar" data-color="purple" data-image="{{ asset('img/sidebar-5.jpg') }}">
	<div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                {{ config('app.name') }}
            </a>
        </div>

        <ul class="nav">
            <li class="active">
                <a href="{{url('/home')}}">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            
            <li>
                <a href="{{route('categories.index')}}">
                    <i class="pe-7s-note2"></i>
                    <p>Categories</p>
                </a>
            </li>
            <li>
                <a href="{{route('files.create')}}">
                    <i class="pe-7s-note2"></i>
                    <p>Archives</p>
                </a>
            </li>           
           
            <li>
                <a href="#">
                    <i class="pe-7s-bell"></i>
                    <p>Notifications</p>
                </a>
            </li>
        </ul>
	</div>
</div>
<ul class="nav navbar-nav">
    <li><a href="#">Home</a></li>
    @if(Auth::user()->active)
        @if(Auth::user()->type == 'siswa')
            @include('layout.navigation.type.siswa')
        @elseif(Auth::user()->type == 'guru')
            @include('layout.navigation.type.guru')
        @elseif(Auth::user()->type == 'wali_murid')
            @include('layout.navigation.type.wali_murid')
        @elseif(Auth::user()->type == 'admin')
            @include('layout.navigation.type.admin')
        @endif
    @endif
</ul>
<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
            {{Auth::user()->username}} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="{{action('auth.logout')}}">Logout</a></li>
        </ul>
    </li>
</ul>
<ul class="nav navbar-nav">
    <li><a href="#">Home</a></li>
    @if(Auth::user()->confirmed)
        @if(Auth::user()->type == 'siswa')
            @include('layout.navigation.type.siswa')
        @elseif(Auth::user()->type == 'guru')
            @include('layout.navigation.type.guru')
        @elseif(Auth::user()->type == 'wali_murid')
            @include('layout.navigation.type.auth.register.type.wali_murid')
        @endif
    @endif
</ul>
<ul class="nav navbar-nav navbar-right">
    <li><p class="navbar-text">{{Auth::user()->username}}</p></li>
    <li><a href="{{action('auth.logout')}}">Logout</a></li>
</ul>
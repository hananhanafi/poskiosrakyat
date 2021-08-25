<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            @if(Auth::guard('retailer')->check())
              {{ Auth::user()->nama_pemilik }}
            @else
              {{ Auth::user()->nama }}
            @endif
              <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              @if(Auth::guard('retailer')->check())
                <a class="dropdown-item" href="{{url('/profile/retailer')}}">
                  <ion-icon name="person"></ion-icon> {{ __('Profil') }}
                </a>
              @else
                <a class="dropdown-item" href="{{url('/profile/retailer_operator')}}">
                  <ion-icon name="person"></ion-icon> {{ __('Profil') }}
                </a>
              @endif

              <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                  <ion-icon name="log-out"></ion-icon> {{ __('Keluar') }}
              </a>
                        </form>

              

              <!-- <a class="dropdown-item" href="{{url('/login')}}">
                <ion-icon name="log-out"></ion-icon> {{ __('Logout') }}
              </a> -->

              <form id="logout-form" action="" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

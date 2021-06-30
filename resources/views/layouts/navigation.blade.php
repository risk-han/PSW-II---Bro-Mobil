  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="/"><h2>Bro <em>Mobil</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
                  <a class="nav-link" href="/">Home
                    <span class="sr-only">(current)</span>
                  </a>
              </li>  
              @can('buy-product')
              <li class="nav-item{{ request()->is('daftarmobil') ? ' active' : '' }}">
                <a class="nav-link" href="/daftarmobil">Daftar Mobil</a>
              </li>
              <li class="nav-item{{ request()->is('contact') ? ' active' : '' }}">
                <a class="nav-link" href="/contact">Contact
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              @endcan
              @can('manage-car')
              <li class="nav-item{{ request()->is('products') ? ' active' : '' }}">
                  <a class="nav-link" href="/products">Manage - Car
                    <span class="sr-only">(current)</span>
                  </a>
              </li>
              @endcan
              @can('manage-user')
              <li class="nav-item{{ request()->is('user') ? ' active' : '' }}">
                  <a class="nav-link" href="{{ route('users.index')}}">Manage - User
                    <span class="sr-only">(current)</span>
                  </a>
              </li>
              @endcan
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item nav-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

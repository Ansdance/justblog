<div class="row">
  <h5 class="my-0 me-md-auto fw-normal col-6">Ans</h5>
  <nav class="my-2 my-md-0 me-md-3 col-6 text-right">
    <a class="p-2 text-dark" href="{{ route('homeD') }}">Home</a>
    <a class="p-2 text-dark" href="{{ route('aboutD') }}">About</a>
    <a class="p-2 text-dark" href="{{ route('contactD') }}">Contacts</a>
    <a class="p-2 text-dark" href="{{ route('contactD-data') }}">Сообщения</a>
                        @guest
                            @if (Route::has('login'))
                                <a class="p-2 text-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif
                            @if (Route::has('register'))
                                <a class="p-2 text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            <div class="nav-item dropdown text-right">

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
  </nav>
</div>


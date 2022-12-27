<header>
  <a class="{{ ($active === "home") ? 'active' : ''}}" href="/"><img src="/assets/img/w.png" class="logo"></a>
  
  
  <ul>
    <li><a class="{{ ($active === "home") ? 'active' : ''}}" href="/">Home</a></li>
    <li><a class="{{ ($active === "about") ? 'active' : ''}}" href="/about">About</a></li>
    <li><a class="{{ ($active === "rooftop") ? 'active' : ''}}" href="/rooftop">Rooftoop Moments</a></li>
    <li><a class="{{ ($active === "menu") ? 'active' : ''}}" href="/menus">Menu Fav</a></li>
    <li><a class="{{ ($active === "categories") ? 'active' : ''}}" href="/categories">Category</a></li>
  
    @auth
      <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome back, {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/dashboard" style="margin-left: 0px"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
            </form>
          </li>
        </ul>
      </li>
    @else
      <li>
        <a class="{{ ($active === "login") ? 'active' : ''}}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
      </li>
    @endauth 
  </ul>
</header>
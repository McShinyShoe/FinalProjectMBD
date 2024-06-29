<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ trim($__env->yieldContent('active')) == 'home' ? 'active' : '' }}" aria-current="page" href="{{route('home')}}"><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ trim($__env->yieldContent('active')) == 'login' ? 'active' : '' }}" href="{{route('login')}}"><i class="fa fa-user"></i> Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ trim($__env->yieldContent('active')) == 'register' ? 'active' : '' }}" href="{{route('register')}}"><i class="fa fa-address-book"></i> Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ trim($__env->yieldContent('active')) == 'logout' ? 'active' : '' }}" href="{{route('logout')}}"><i class="fa fa-share"></i> logout</a>
        </li>
        @if(auth()->user())
          @if(auth()->user()->name == 'admin' && auth()->user()->email == 'admin@shinyshoe.net')
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-list"></i> List</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item {{ trim($__env->yieldContent('active')) == 'list_customers' ? 'active' : '' }}" href="{{route('insert.customers')}}">Customers</a></li>
              <li><a class="dropdown-item {{ trim($__env->yieldContent('active')) == 'list_items' ? 'active' : '' }}" href="{{route('insert.items')}}">Items</a></li>
              <li><a class="dropdown-item {{ trim($__env->yieldContent('active')) == 'list_orders' ? 'active' : '' }}" href="{{route('insert.orders')}}">Orders</a></li>
              <li><a class="dropdown-item {{ trim($__env->yieldContent('active')) == 'list_payments' ? 'active' : '' }}" href="{{route('insert.payments')}}">Payments</a></li>
              <li><a class="dropdown-item {{ trim($__env->yieldContent('active')) == 'list_serviceprices' ? 'active' : '' }}" href="{{route('insert.serviceprices')}}">ServicePrices</a></li>
              <li><a class="dropdown-item {{ trim($__env->yieldContent('active')) == 'list_services' ? 'active' : '' }}" href="{{route('insert.services')}}">Services</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-plus"></i> Insert</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item {{ trim($__env->yieldContent('active')) == 'insert_customers' ? 'active' : '' }}" href="{{route('insert.customers')}}">Customers</a></li>
              <li><a class="dropdown-item {{ trim($__env->yieldContent('active')) == 'insert_items' ? 'active' : '' }}" href="{{route('insert.items')}}">Items</a></li>
              <li><a class="dropdown-item {{ trim($__env->yieldContent('active')) == 'insert_orders' ? 'active' : '' }}" href="{{route('insert.orders')}}">Orders</a></li>
              <li><a class="dropdown-item {{ trim($__env->yieldContent('active')) == 'insert_payments' ? 'active' : '' }}" href="{{route('insert.payments')}}">Payments</a></li>
              <li><a class="dropdown-item {{ trim($__env->yieldContent('active')) == 'insert_serviceprices' ? 'active' : '' }}" href="{{route('insert.serviceprices')}}">ServicePrices</a></li>
              <li><a class="dropdown-item {{ trim($__env->yieldContent('active')) == 'insert_services' ? 'active' : '' }}" href="{{route('insert.services')}}">Services</a></li>
            </ul>
          </li>
          @endif
        @endif
      </ul>
    </div>
  </div>
</nav>
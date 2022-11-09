<nav class="navbar navbar-expand-lg " style="background-color: #008069;">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}"> <b>24/7 HealthCare Pharma</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('products.list')}}">Shop</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('cart.list') }}">cart</a>
          <a href="{{ route('cart.list') }}" class="nav-link">
                            <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            {{ Cart::getTotalQuantity()}}
                        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
      </ul>
      
    </div>
    <form action="" class="d-flex">
        <a class="btn btn-danger" href="{{route('registration')}}" role="button">For SignUp</a>
        <a class="btn btn-secondary" href="{{route('login')}}" role="button">Login</a>
      </form>
  </div>
</nav>
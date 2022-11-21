<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/imgs/2022-10-17-38.png') }}" alt="Logo" width="30" height="24"
                class="d-inline-block align-text-top">
            Web Name
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
            </ul>

            @if(session()->get('is_admin'))
                <a type="button" class="btn btn-outline-light me-2" href="/addproduct">Add Product</a>
            @endif
            @if(session()->has('email'))

            <div class="text-end text-light">{{session()->get('email')}}</div>
            <a type="button" class="btn btn-outline-light me-2" href="/cart">My Cart</a>
            <a type="button" class="btn btn-outline-light me-2" href="/logout">Logout</a>
            @else
                <div class="text-end">
                    <a type="button" class="btn btn-outline-light me-2" href="/login">Login</a>
                    <a type="button" class="btn btn-warning" href="/signup">Sign-up</a>
                </div>
            @endif

           
        </div>
    </div>
</nav>

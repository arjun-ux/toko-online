<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">Toko Online</a>
        <form method="post" action="{{ route('logout') }}" class="d-flex" role="search">
            @csrf
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
    </div>
</nav>

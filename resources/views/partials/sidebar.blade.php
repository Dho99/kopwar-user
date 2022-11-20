<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky mt-5 mb-0 sidebar-sticky">
        <div class="ms-3 mb-3 fw-bold text-secondary">
            MENU
        </div>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Dashboard') ? 'bg-success text-light' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-items-center align-text-center mb-1 ms-2 {{ ($title === 'Dashboard') ? 'text-light' : '' }}"></span>
              Dashboard
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Pinjaman') ? 'bg-success text-light' : '' }}" aria-current="page" href="/pinjaman">
              <span data-feather="dollar-sign" class="align-items-center align-text-center mb-1 ms-2 {{ ($title === 'Pinjaman') ? 'text-light' : '' }}"></span>
              Pinjaman
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Simpanan') ? 'bg-success text-light' : '' }}" aria-current="page" href="/simpanan">
              <span data-feather="save" class="align-items-center align-text-center mb-1 ms-2 {{ ($title === 'Simpanan') ? 'text-light' : '' }}"></span>
              Simpanan
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Angsuran') ? 'bg-success text-light' : '' }}" aria-current="page" href="/angsuran">
              <span data-feather="credit-card" class="align-items-center align-text-center mb-1 ms-2 {{ ($title === 'Angsuran') ? 'text-light' : '' }}"></span>
              Angsuran
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Akun') ? 'bg-success text-light' : '' }}" aria-current="page" href="/akun">
              <span data-feather="user" class="align-items-center align-text-center mb-1 ms-2 {{ ($title === 'Akun') ? 'text-light' : '' }}"></span>
              Info Akun 
            </a>
          </li>

        
          <li class="nav-item p-2 mt-6">
            <div class="bg-grey rounded pt-3 p-2 px-4">
                Halo, 
                <div class="fw-bold">{{ auth()->user()->nama_lengkap }}</div>
                    <form action="/logout" method="post">
                      @csrf
                      <button class="btn btn-danger btn-sm w-100 mt-2"><span class="me-1" data-feather="log-out"></span> Log Out</button>
                    </form>
    
                   
                
                    
                </div>
            </div>
          </li>


        </ul>
      </div>
    </nav>
  </div>
</div>
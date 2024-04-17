<div class="kiri" style="width: 20%; padding: 20px;border-radius: 40px; background-color: white; height: 90vh;">
    <div class="header-content d-flex justify-content-between w-100 p-2" style="border-bottom: 1px solid grey; ">
        <div class="header-kiri">
            <h3>Hello</h3>
            @auth
            <p><strong>{{Auth::user()->username}}</strong></p>
            @endauth
        </div>
        <div class="header-kanan d-flex justify-content-center align-items-center">
            <img src="asset/Logo Suedespacec -01 1.png" alt="" style="height: 50px;">
        </div>
    </div>
    <nav class="sidebar py-2 mb-4">
        <ul class="nav flex-column" id="nav_accordion">
            <li class="nav-item has-submenu">
                <a class="nav-link" href="#"><i class="fa-solid fa-bars-progress" style="margin-right: 5px;"></i> <strong>Project</strong> <i class="fa-solid fa-caret-right"></i></a>
                <ul class="submenu collapse">
                    <li><a class="nav-link" href="/admin/project">Project Photo & video</a></li>
                    <li><a class="nav-link" href="/admin/project">Media social</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/kelola-admin"><i class="fa-solid fa-user" style="margin-right: 5px;"></i> <strong>Kelola Admin</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/sesi/logout"><i class="fa-solid fa-right-from-bracket" style="margin-right: 5px;"></i><strong>Logout</strong> </a>
            </li>
        </ul>
        </nav>
</div>
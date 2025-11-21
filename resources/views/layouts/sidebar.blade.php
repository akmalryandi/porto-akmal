<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('img/user.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
        </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                </li>
                <li class="nav-header">TABLE</li>
                <li class="nav-item">
                    <a href="{{ route('profiles.index') }}" class="nav-link">
                        <i class="bi bi-list-ul me-2"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('resumes.index') }}" class="nav-link ">
                        <i class="bi bi-list-ul me-2"></i>
                        <p>
                            Resume
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('projects.index') }}" class="nav-link ">
                        <i class="bi bi-list-ul me-2"></i>
                        <p>
                            Project
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tools.index') }}" class="nav-link ">
                        <i class="bi bi-list-ul me-2"></i>
                        <p>
                            Tool
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<section x-cloak class="sidebar" :class="open || 'inactive'">
  <div class="d-flex align-items-center justify-content-between justify-content-lg-center">
    <h4 class="fw-bold">{{ config('admin.local-name') }}</h4>
    <i @click="toggle" class="d-lg-none fs-1 bi bi-x" style="cursor: pointer"></i>
  </div>
  <div class="mt-4">
    <ul class="list-unstyled">
      <li class="sidebar-item {{ active_route('admin.panel.dashboard') }}">
        <a class="sidebar-link" href="{{ route('admin.panel.dashboard') }}">
          <i class="me-2 bi bi-grid-fill"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="sidebar-item {{ active_route('admin.panel.home.index') }}">
        <a class="sidebar-link" href="{{ route('admin.panel.home.index') }}">
          <i class="me-2 bi bi-house-door"></i>
          <span>Home</span>
        </a>
      </li>

      <li x-data="{{ active_route('admin.panel.about.index') == 'active' ? '{dropdown, open: true}' : 'dropdown' }}" class="sidebar-item">
        <div @click="toggle" class="sidebar-link">
          <i class="bi bi-file-person me-2"></i>
          <span>About me</span>
          <i class="ms-auto bi bi-chevron-down"></i>
        </div>
        <ul x-show="open" x-transition class="submenu">
          <li class="submenu-item {{ active_route('admin.panel.about.personal.index') }}">
            <a class="sidebar-link" href="{{ route('admin.panel.about.personal.index') }}">
              <i class="bi bi-file-earmark-person me-2"></i>
              <span>Personal Information</span>
            </a>
          </li>
          <li class="submenu-item {{ active_route('admin.panel.about.skills.index') }}">
            <a class="sidebar-link" href="{{ route('admin.panel.about.skills.index') }}">
              <i class="bi bi-wrench-adjustable-circle me-2"></i>
              <span>My skills</span>
            </a>
          </li>
          <li class="submenu-item {{ active_route('admin.panel.about.qualifications.index') }}">
            <a class="sidebar-link" href="{{ route('admin.panel.about.qualifications.index') }}">
                <i class="bi bi-briefcase me-2"></i>
              <span>My experience and education</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="sidebar-item {{ active_route('admin.panel.portfolios.index') }}">
        <a class="sidebar-link" href="{{ route('admin.panel.portfolios.index') }}">
          <i class="bi bi-diagram-3 me-2"></i>
          <span>Sample</span>
        </a>
      </li>

      <li x-data="{{ active_route('admin.panel.contact.index') == 'active' ? '{dropdown, open: true}' : 'dropdown' }}" class="sidebar-item">
        <div @click="toggle" class="sidebar-link">
          <i class="bi bi-person-lines-fill me-2"></i>
          <span>Communication with me</span>
          <i class="ms-auto bi bi-chevron-down"></i>
        </div>
        <ul x-show="open" x-transition class="submenu">
          <li class="submenu-item {{ active_route('admin.panel.contact.details.index') }}">
            <a class="sidebar-link" href="{{ route('admin.panel.contact.details.index') }}">
              <i class="bi bi-sign-merge-right me-2"></i>
              <span>Communication ways</span>
            </a>
          </li>
          <li class="submenu-item {{ active_route('admin.panel.contact.messages.index') }}">
            <a class="sidebar-link" href="{{ route('admin.panel.contact.messages.index') }}">
              <i class="bi bi-envelope me-2"></i>
              <span>My messages</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="sidebar-item {{ active_route('admin.panel.blogs.index') }}">
        <a class="sidebar-link" href="{{ route('admin.panel.blogs.index') }}">
          <i class="bi bi-file-earmark-richtext me-2"></i>
          <span>Articles</span>
        </a>
      </li>

      <li class="sidebar-item {{ active_route('admin.panel.profile.index') }}">
        <a class="sidebar-link" href="{{ route('admin.panel.profile.index') }}">
          <i class="bi bi-person me-2"></i>
          <span>Profile</span>
        </a>
      </li>
    </ul>
  </div>
</section>

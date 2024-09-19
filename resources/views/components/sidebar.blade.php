<!-- Sidebar and Content -->
<div class="d-flex">
    <!-- Sidebar -->
    <div class="bg-dark text-white p-3" id="sidebar">
        <h4 class="text-center py-3">Menu</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active text-white" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Teachers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Reports</a>
            </li>
        </ul>
    </div>

    <!-- Main content -->
    {{-- <div class="p-4 w-100" id="content">
        <h1>Welcome to the Dashboard</h1>
        <p>This is the content area. Add your widgets, charts, or other data here.</p>
    </div> --}}{{ $slot }}

    <!-- Profile Page (Hidden by default) -->
    
    </div>
</div>
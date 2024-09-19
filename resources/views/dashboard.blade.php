<x-admin-layout>
    <x-navbar>

    </x-navbar>

    <x-sidebar>

        <div class="p-4 w-100" id="content">
            <h1>Welcome to the Dashboard</h1>
            <p>This is the content area. Add your widgets, charts, or other data here.</p>
        </div>

        <div class="p-4 w-100" id="profile-page" style="display:none;">
            <h1>Profile</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ Auth::user()->name ?? 'Guest' }}</h5>
                    <p class="card-text"><strong>Email:</strong>{{ Auth::user()->email ?? '' }}</p>
                    <p class="card-text"><strong>Role:</strong> Admin</p>
                </div>
            </div>
        </div>
    </x-sidebar>
</x-admin-layout>
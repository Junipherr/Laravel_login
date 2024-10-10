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
                    <h5 class="card-title">User List</h5>
                    <p class="card-text">Below is the list of all users:</p>


                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>

                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#editUserModal{{ $user->id }}">
                                            Edit
                                        </button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1"
                                    aria-labelledby="editUserModalLabel{{ $user->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editUserModalLabel{{ $user->id }}">Edit
                                                    User: {{ $user->name }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <form action="{{ route('user.update', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <label for="name{{ $user->id }}"
                                                            class="form-label">Name</label>
                                                        <input type="text" class="form-control"
                                                            id="name{{ $user->id }}" name="name"
                                                            value="{{ $user->name }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email{{ $user->id }}"
                                                            class="form-label">Email</label>
                                                        <input type="email" class="form-control"
                                                            id="email{{ $user->id }}" name="email"
                                                            value="{{ $user->email }}" required>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </x-sidebar>
</x-admin-layout>
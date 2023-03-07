<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
</head>

<body>
    <h2>Data</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mentors as $mentor)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                    {{ $mentor->name }}
                </td>
                <td>
                    {{ $mentor->role }}
                </td>
                <td class="row">
                    <form>
                        <button type="submit">Edit</button>
                    </form>
                    <form action="{{ route('mentors.destroy', $mentor->id_mentor) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Form</h2>
    <form method="POST" action="{{ route('mentors.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required placeholder="Enter name...">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" name="role" class="form-control" required placeholder="Enter role...">
        </div>
        <button type="submit" class="btn btn-primary">Add Mentor</button>
    </form>

</body>

</html>
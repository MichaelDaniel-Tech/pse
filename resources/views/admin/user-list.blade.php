<div class="card offset-3 col-6">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">IMAGE</th>
                <th scope="col">TITLE</th>
                <th scope="col">PRICE</th>
                <th scope="col">STOCK</th>
                <th scope="col" style="width: 20%">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    {{-- <td class="text-center">
                        <img src="{{ asset('/storage/users/'.$product->image) }}" class="rounded" style="width: 150px">
                    </td> --}}
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Are you sure ?');" action="{{ route('users.destroy', $user->id) }}" method="POST">
                            <a href="{{ route('users.show', $product->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                            <a href="{{ route('users.edit', $product->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                    </td>
                </tr>
            @empty
                <div class="alert alert-danger">
                    Data User belum Tersedia.
                </div>
            @endforelse
        </tbody>
    </table>
    {{ $users->links() }}

    {{-- <h5 class="card-header">Userlist</h5>
    <div class="card-body">
        @if ($getRecord)
            <h5 class="card-title">ID: {{ $getRecord->id }} </h5>
            <h5 class="card-title">Name: {{ $getRecord->name }}</h5>
            <h5 class="card-title">Email: {{ $getRecord->email }}</h5>
            <h5 class="card-title">Phone: {{ $getRecord->phone }}</h5>
        @else
            <p>User not found</p>
        @endif
    </div> --}}
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    //message with sweetalert
    @if(session('success'))
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @elseif(session('error'))
        Swal.fire({
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @endif

</script>

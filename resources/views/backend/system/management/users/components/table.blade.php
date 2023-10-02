<table class="table table-hover text-nowrap w-full whitespace-no-wrap">
    <thead>
    <tr>
        <th class="col-xs-1 text-center">#</th>
        <th class="px-4 py-3 text-left">Name</th>
        <th class="px-4 py-3 text-left">E mail</th>
        <th class="px-4 py-3 text-left">Created At</th>
        <th>Manage</th>
    </tr>
    </thead>
    <tbody>
    @forelse($users as $user)
        <tr>
            <td class="col-xs-1  text-left">{{$loop->iteration}}</td>
            <td class="px-4 py-3 text-left text-sm">{{$user->name}}</td>
            <td class="px-4 py-3 text-left text-sm">{{$user->email}}</td>
            <td class="px-4 py-3 text-left text-sm">{{$user->created_at->toDayDateTimeString()}}</td>
            <td class="px-4 py-3 align-items-center text-sm flex ">
                <div class="d-flex flex-row  align-items-center">
                    <form action="" method="POST" class="px-1 py-1>
                        @csrf
                        <button
                            class="btn btn-light flex items-center justify-between px-0 py-0 btn-sm ">
                            <i class="fa fa-edit fa-fw text-primary"></i>
                        </button>
                    </form>
                    <form action="{{route('system.management.user.delete', $user->id)}}" method="POST">
                        @csrf
                        <button
                            class="btn btn-light flex items-center justify-between px-0 py-0 btn-sm ">
                            <i class="fa fa-trash text-danger flex items-center justify-between px-0 py-0"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    @empty
    @endforelse

    </tbody>
</table>

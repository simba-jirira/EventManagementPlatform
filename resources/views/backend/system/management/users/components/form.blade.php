@empty($user)
    <form id="quickForm" novalidate="novalidate"
          method="POST" action="{{route('system.management.users.create-user')}}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Enter Fullname</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                       id="name" placeholder="Enter fullname" value="{{old('name')}}"
                       fdprocessedid="m5hej4" aria-describedby="name-error" aria-invalid="true">
                @error('name')
                <span id="name-error" class="error invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">E mail Address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                       id="email" placeholder="Enter email address" fdprocessedid="y7fr8i"
                       value="{{old('email')}}"
                       aria-describedby="email-error">
                @error('email')
                <span id="email-error" class="error invalid-feedback">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="card-footer justify-content-end">
            <div class="float-right">
                <a href="{{route('system.management.users')}}">
                    <button type="button" class="btn btn-danger ">
                        <i class="fa fa-undo fa-faw text-white"></i>
                        Cancel
                    </button>
                </a>
                <button type="submit" class="btn btn-primary" fdprocessedid="bfk73n">
                    <i class="fa fa-user-plus fa-faw text-white"></i>
                    Add user
                </button>
            </div>
        </div>
    </form>
@else
    <form id="quickForm" novalidate="novalidate"
          method="POST" action="{{route('system.management.users.edit-user',$user->id)}}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Enter Fullname</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                       id="name" placeholder="Enter fullname" value="{{$user->name}}"
                       fdprocessedid="m5hej4" aria-describedby="name-error" aria-invalid="true">
                @error('name')
                <span id="name-error" class="error invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">E mail Address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                       id="email" placeholder="Enter email address" fdprocessedid="y7fr8i"
                       value="{{$user->email}}"
                       aria-describedby="email-error">
                @error('email')
                <span id="email-error" class="error invalid-feedback">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="card-footer justify-content-end">
            <div class="float-right">
                <a href="{{route('system.management.users')}}">
                    <button type="button" class="btn btn-danger ">
                        <i class="fa fa-undo fa-faw text-white"></i>
                        Cancel
                    </button>
                </a>
                <button type="submit" class="btn btn-primary" fdprocessedid="bfk73n">
                    <i class="fa fa-edit fa-faw text-white"></i>
                    Edit Record
                </button>
            </div>
        </div>
    </form>
@endempty



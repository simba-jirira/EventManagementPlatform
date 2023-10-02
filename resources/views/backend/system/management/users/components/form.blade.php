<form id="quickForm" novalidate="novalidate">
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control is-invalid"
                   id="exampleInputEmail1" placeholder="Enter email"
                   fdprocessedid="m5hej4" aria-describedby="exampleInputEmail1-error" aria-invalid="true">
            <span id="exampleInputEmail1-error" class="error invalid-feedback">Please enter a email address</span>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control is-invalid"
                   id="exampleInputPassword1" placeholder="Password" fdprocessedid="y7fr8i"
                   aria-describedby="exampleInputPassword1-error">
            <span id="exampleInputPassword1-error" class="error invalid-feedback">Please provide a password</span>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control is-invalid"
                   id="exampleInputPassword1" placeholder="Password" fdprocessedid="y7fr8i"
                   aria-describedby="exampleInputPassword1-error">
            <span id="exampleInputPassword1-error" class="error invalid-feedback">Please provide a password</span>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control is-invalid"
                   id="exampleInputPassword1" placeholder="Password" fdprocessedid="y7fr8i"
                   aria-describedby="exampleInputPassword1-error">
            <span id="exampleInputPassword1-error" class="error invalid-feedback">Please provide a password</span>
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

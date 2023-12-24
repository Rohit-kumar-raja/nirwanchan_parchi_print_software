<form id="form_update" action="{{ route('app-users.index') }}" method="POST">
    <div class="row">
        @csrf
        @method('POST')
         <div class="col-sm-4">
            <div class="form-group">
                <label class="required">Name</label>
                {{$data->name}}
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label class="required">email</label>
                {{$data->email}}"
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label class="required">Gender</label>
               {{$data->gender}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="required">mobile</label>
               {{$data->mobile}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="required">dob</label>
               {{$data->dob}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="required">blood group</label>
                {{$data->blood_group}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="required">profile pic</label>
                <img class="img-fluid" src="{{ asset($data->profile_pic) }}" alt="" height="30px"
                        width="30px">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="required">address</label>
                {{$data->address}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="required">description</label>
                {{$data->description}}
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="required">status</label>
            <label for="">   {{$data->status}}</label>
            </div>
        </div>
        </div>

    </div>

</form>

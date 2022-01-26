@extends('dashboard.main')

@section('dashboard-content')


<form class="row g-3" method="POST" action="{{route('season.store')}}">
    @csrf
    <label class="form-check-label" for="inputCategory">Season ticket Category</label>
    <div class="col-md-9">

        <div class="form-check form-check-inline" id="inputCategory1">

            <input class="form-check-input @error('category')
        is-invalid
      @enderror" type="radio" name="category" id="category1" value="students">
            <label class="form-check-label" for="category1">Students</label>
        </div>
        <div class="form-check form-check-inline" id="inputCategory2">
            <input class="form-check-input @error('category')
        is-invalid
      @enderror" type="radio" name="category" id="category2" value="adults">
            <label class="form-check-label" for="category2">Adults</label>
        </div>
        <div class="form-check form-check-inline" id="inputCategory3">
            <input class="form-check-input @error('category')
        is-invalid
      @enderror" type="radio" name="category" id="category3" value="universities/technical collage">
            <label class="form-check-label" for="category3">Universities/Technical collages</label>
        </div>
        @error('category')
        <span class="invalid-feedback" role="alert">
            {{$message}}
        </span>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="inputNic" class="form-label">NIC</label>
        <div class="input-group mb-3">
            <input type="text" id="inputNic" name="nic" class="form-control @error('nic')
        is-invalid
      @enderror" placeholder="National Identity Card No" aria-label="Username" aria-describedby="basic-addon1">
            @error('nic')
            <span class="invalid-feedback" role="alert">
                {{$message}}
            </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <label for="inputReg_No" class="form-label">Student Reg No</label>
        <div class="input-group mb-3">
            <input type="text" id="inputReg_No" name="student_reg_no" class="form-control @error('student_reg_no')
      is-invalid
    @enderror" placeholder="Student Register No" aria-label="student_reg_no">
            @error('student_reg_no')
            <span class="invalid-feedback" role="alert">
                {{$message}}
            </span>
            @enderror
        </div>
    </div> 
    <div class="col-md-12">
        <label for="inputName" class="form-label">Name</label>
        <div class="input-group mb-3">
            <input type="text" id="inputName" name="name" class="form-control @error('name')
        is-invalid
      @enderror" placeholder="Name" aria-label="Name">
            @error('name')
            <span class="invalid-feedback" role="alert">
                {{$message}}
            </span>
            @enderror
        </div>
    </div>

    <label class="form-check-label" for="inputGender">Gender</label>
    <div class="col-md-9">

        <div class="form-check form-check-inline" id="inputGender">

            <input class="form-check-input @error('gender')
        is-invalid
      @enderror" type="radio" name="gender" id="gender1" value="male">
            <label class="form-check-label" for="GenderMale">Male</label>
        </div>
        <div class="form-check form-check-inline" id="inputGender">
            <input class="form-check-input @error('gender')
        is-invalid
      @enderror" type="radio" name="gender" id="gender2" value="female">
            <label class="form-check-label" for="GenderFemale">Female</label>
        </div>
        @error('gender')
        <span class="invalid-feedback" role="alert">
            {{$message}}
        </span>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="age" class="form-label">Age</label>
        <div class="input-group mb-3">
            <input type="number" id="age" name="age" class="form-control @error('age')
        is-invalid
      @enderror" placeholder="Age" aria-label="age">
            <span class="input-group-text" id="basic-addon1">Years Old</span>
        </div>
        @error('age')
        <span class="invalid-feedback" role="alert">
            {{$message}}
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="date_of_birth" class="form-label">Date Of Birth</label>
        <div class="input-group mb-3">
            <input type="date" id="date_of_birth" name="date_of_birth" class="form-control @error('date_of_birth')
        is-invalid
      @enderror" placeholder="Date Of birth" aria-label="date_of_birth">
        </div>
        @error('date_of_birth')
        <span class="invalid-feedback" role="alert">
            {{$message}}
        </span>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="inputAddress" class="form-label">Address</label>
        <div class="input-group mb-3">
            <input type="text" id="inputAddress" name="address" class="form-control @error('address')
        is-invalid
      @enderror" placeholder="Address" aria-label="Address">
            @error('address')
            <span class="invalid-feedback" role="alert">
                {{$message}}
            </span>
            @enderror
        </div>
    </div>

    <div class="col-md-9">
        <div class="col-md-4">
            <label for="inputContactNo" class="form-label">Contact No</label>
            <div class="input-group mb-3">
                <input type="text" id="inputContactNo" name="contact_no" class="form-control @error('contact_no')
          is-invalid
        @enderror" placeholder="Contact No" aria-label="Contact No">
                @error('contact_no')
                <span class="invalid-feedback" role="alert">
                    {{$message}}
                </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <label for="province" class="form-label">Province</label>
        <div class="input-group mb-3">
            <select class="form-select @error('province')
        is-invalid
      @enderror" id="province" name="province">
                <option selected>Choose Province...</option>
                <option value="Uva">Uva</option>
            </select>
        </div>
        @error('province')
        <span class="invalid-feedback" role="alert">
            {{$message}}
        </span>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="district" class="form-label">District</label>
        <div class="input-group mb-3">
            <select class="form-select @error('district')
        is-invalid
      @enderror" id="district" name="district">
                <option selected disabled>Choose District...</option>
                <option value="Badulla">Badulla</option>
                <option value="Monaragala">Monaragala</option>
            </select>
        </div>
        @error('district')
        <span class="invalid-feedback" role="alert">
            {{$message}}
        </span>
        @enderror
    </div>
    


    <div class="col-md-4">
        <label for="postal_code" class="form-label">Postal Code</label>
        <div class="input-group mb-3">
            <input type="text" id="postal_code" name="postal_code" class="form-control @error('postal_code')
      is-invalid
    @enderror" placeholder="Postal Code" aria-label="Postal Code">
            @error('postal_code')
            <span class="invalid-feedback" role="alert">
                {{$message}}
            </span>
            @enderror
        </div>
    </div>
   
    <div class="col-md-6">
        <label for="inputPostalDepot" class="form-label">Depot</label>
        <div class="input-group mb-3">
            <select class="form-select @error('depot')
      is-invalid
    @enderror" id="inputPostalDepot" name="depot">
                <option disabled selected>Choose Depot...</option>
                <option value="Badulla">Badulla</option>
                <option value="Bandarawela">Bandarawela</option>
                <option value="Mahiyanganaya">Mahiyanganaya</option>
                <option value="Monaragala">Monaragala</option>
                <option value="Siyabalanduwa">Siyabalanduwa</option>
                <option value="Bibile">Bibile</option>
            </select>
            @error('depot')
            <span class="invalid-feedback" role="alert">
                {{$message}}
            </span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <label for="inputInstitute" class="form-label">Institute/College or School</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputInstitute"><i class="bi bi-building"></i></span>
            <input type="text" id="inputInstitute" name="institute" class="form-control @error('institute')
      is-invalid
    @enderror" placeholder="Institute/College or School your a working or studying" aria-label="Institute/College or School your a working or studying">
        </div>
        @error('institute')
        <span class="invalid-feedback" role="alert">
            {{$message}}
        </span>
        @enderror
    </div>
    <div class="col-md-9">
      <label for="route_no" class="form-label">Route No</label>
      <div class="input-group mb-3">
          <span class="input-group-text" id="From"><i class="bi bi-cursor-fill"></i></span>
          <input type="text" id="route_no" name="route_no" class="form-control @error('route_no')
    is-invalid
  @enderror" placeholder="Route_no" aria-label="From">
      </div>
      @error('route_no')
      <span class="invalid-feedback" role="alert">
          {{$message}}
      </span>
      @enderror
  </div>
    <div class="col-md-4">
        <label for="inputStartPoint" class="form-label">Journey Starting From</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="From"><i class="bi bi-cursor-fill"></i></span>
            <input type="text" id="inputStartPoint" name="starting_point" class="form-control @error('starting_point')
      is-invalid
    @enderror" placeholder="From" aria-label="From">
        </div>
        @error('starting_point')
        <span class="invalid-feedback" role="alert">
            {{$message}}
        </span>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="inputInterchanging" class="form-label">Interchanging Points <small class="text-muted">(optional)</small>
        </label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputInterchanging"><i class="bi bi-signpost-split-fill"></i></span>

            <input type="text" id="inputInterchanging" name="interchanging_point" class="form-control @error('interchanging_point')
      is-invalid
    @enderror" placeholder="Interchanging Point" aria-label="Interchanging Point">
        </div>
        @error('interchanging_point')
        <span class="invalid-feedback" role="alert">
            {{$message}}
        </span>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="destination_point" class="form-label">Destination Point</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="To"><i class="bi bi-geo-alt-fill"></i></span>
            <input type="text" id="destination_point" name="destination_point" class="form-control @error('destination_point')
      is-invalid
    @enderror" placeholder="To" aria-label="To">

        </div>
        @error('destination_point')
        <span class="invalid-feedback" role="alert">
            {{$message}}
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="inputTicketFee" class="form-label">Ticket fee</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputTicketFee">Rs.</span>
            <input type="text" id="inputTicketFee" name="ticket_fee" class="form-control @error('ticket_fee')
      is-invalid
    @enderror" placeholder="Please enter the amount with cents..(.00)" aria-label="inputTicketFee">
            <span class="input-group-text" id="To">.00</span>
        </div>
        @error('ticket_fee')
        <span class="invalid-feedback" role="alert">
            {{$message}}
        </span>
        @enderror
    </div>
    <div class="col-md-12">
        <label for="inputPermissionLetter" class="form-label">Upload the soft copy or photograph of Permission Letter Issued
            by Your Institute <br>
            <small>file types only pdf,docx,jpg are allowed.</small><small class="text-muted"> (image must be cleared)</small>
        </label>
        <div class="input-group mb-3">
            <input type="file" enctype="multipart/form-data" class="form-control @error('letter')
      is-invalid
    @enderror" id="inputPermissionLetter">
        </div>
        @error('letter')
        <span class="invalid-feedback" role="alert">
            {{$message}}
        </span>
        @enderror
    </div>



    <div class="col-12">
        <button type="submit" class="btn btn-primary">Sign up</button>
    </div>

</form>

@endsection
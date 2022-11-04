<form action="" class="this-form">
  <div class="content-form-page">
    @include('client.membership.membership-application-form.personal-info-text')
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>FIRST NAME</small><span class="asterisk">*</span>
          <input type="text" class="form-control" name="firstname" placeholder="ENTER FIRST NAME">
        </div>
      </div>
  
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>MIDDLE NAME</small><span class="asterisk">*</span>
          <input type="text" class="form-control" name="middlename" placeholder="ENTER MIDDLE NAME">
        </div>
      </div>
  
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>LAST NAME</small><span class="asterisk">*</span>
          <input type="text" class="form-control" name="lastname" placeholder="ENTER LAST NAME">
        </div>
      </div>
  
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>SUFFIX</small><span class="asterisk">*</span>
          <input type="text" class="form-control" name="suffix" placeholder="ENTER SUFFIX">
        </div>
      </div>
  
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>GENDER</small><span class="asterisk">*</span>
          <select name="gender" id="gender" class="form-control">
            <option value="" disabled selected >SELECT GENDER</option>
            <option value="Male">MALE</option>
            <option value="Female">FEMALE</option>
          </select>
        </div>
      </div>
  
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>BIRTH DATE</small><span class="asterisk">*</span>
          <input type="date" class="form-control" name="birhtdate">
        </div>
      </div>
  
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>BIRTH PLACE</small><span class="asterisk">*</span>
          <input type="text" class="form-control" name="birhtplace" placeholder="ENTER BIRTH PLACE">
        </div>
      </div>
  
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>ADDRESS</small><span class="asterisk">*</span>
          <input type="text" class="form-control" name="address" placeholder="ENTER ADDRESS">
        </div>
      </div>
  
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>OCCUPATION</small><span class="asterisk">*</span>
          <input type="text" class="form-control" name="occupation" placeholder="ENTER OCCUPATION">
        </div>
      </div>
  
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>UNIT</small><span class="asterisk">*</span>
          <select name="unit" id="unit" class="form-control">
            <option value="" disabled selected >SELECT UNIT</option>
            <option value="CU(main)">CU(main)</option>
            <option value="CUMC">CUMC</option>
            <option value="CUBE">CUBE</option>
            <option value="Associate">ASSOCIATE</option>
          </select>
        </div>
      </div>
  
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>EDUCATIONAL ATTAINMENT</small><span class="asterisk">*</span>
          <select name="educ" id="educ" name="education" class="form-control">
            <option value="" disabled selected >SELECT EDUCATIONAL ATTAINMENT</option>
            <option value="Doctor's">Doctor's</option>
            <option value="Master's">Master's</option>
            <option value="College Graduate">College Graduate</option>
            <option value="Undergraduate">Undergraduate</option>
          </select>
        </div>
      </div>
  
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>MONTHLY INCOME</small><span class="asterisk">*</span>
          <input type="text" class="form-control" name="monthly" placeholder="ENTER MONTHLY INCOME">
        </div>
      </div>
  
      <div class="col-lg-4 col-md-4">
        <small>CIVIL STATUS</small><span class="asterisk">*</span>
        <select name="civilStatus" id="civilStatus" class="form-control">
          <option value="" disabled selected >SELECT CIVIL STATUS</option>
          <option value="Single">Single</option>
          <option value="Married">Married</option>
          <option value="Divorce">Divorced</option>
          <option value="Siparated">Siparated</option>
          <option value="Widowed">Widowed</option>
        </select>
      </div>
  
      <div class="col-lg-4 col-md-4">
        <div class="form-group">
          <small>RELIGION</small><span class="asterisk">*</span>
          <input type="text" class="form-control" name="religion" placeholder="ENTER RELIGION">
        </div>
      </div>
    </div>
  </div>
</form>
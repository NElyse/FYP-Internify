<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Internfy</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
               <h2 class="text-nowrap logo-img text-center d-block py-3 w-100">School registration form</h2>
                <form method="POST" action="server_login" enctype="multipart/form-data">
                  <div class="mb-3">
                    <p>School Name: <p>
                      <input type="text" name="sc_name" class="form-control" placeholder="school name" required>

                      <p>School Abbreviation name</p>
                      <input type="text" name="sc_abbr" class="form-control" required placeholder="school abbr ex: GS XYZ"><br> 

                       <p>School email</p>
                      <input type="text" name="sc_email" class="form-control" required placeholder="school abbr ex:school@gmail.com"><br>

                      <p>School personal to contact First name</p>
                      <input type="text" name="person" class="form-control" required placeholder="ex: name of Head teacher or Principal or other"><br>

                       <p>School personal to contact last name</p>
                      <input type="text" name="fp" class="form-control" required placeholder="ex: name of Head teacher or Principal or other"><br>

                       <p>School Contacts </p>
                      <input type="text" name="sc_contact" class="form-control" required placeholder="078......"><br>

                       <p>School Logo</p>
                      <input type="file"  id="file" name="file-input" class="form-control" placeholder="Email..." aria-label="First name" required><br>

                  <p>Province <i style="color: red">*</i>:
                  <select name="province"  id="province" onchange="showResult();" class="form-control" autocomplete="nope" required ="required"  oninvalid="this.setCustomValidity('Please Select Province')"
                      oninput="this.setCustomValidity('')">
                      <option value="">----Select province----</option>
                          <option value="Northern Province">Northern Province</option>
                              <option value="Western Province">Western Province</option>
                              <option value="Kigali City">Kigali City</option>
                              <option value="Eastern Province">Eastern Province</option>
                              <option value="Southern Province">Southern Province</option>
                                
        </select> </p>  
       <p>District <i style="color: red">*</i>:
      <select name="district"  id = "district" class="form-control" onchange="showResult2();" autocomplete="nope" required ="required"  oninvalid="this.setCustomValidity('Please Select District')"
                      oninput="this.setCustomValidity('')">
                 <option>----District----</option>
                 </select> </p>
       <p>Sector <i style="color: red">*</i>:
      <select name="sector"  id = "district"  onchange="showResult3();" class="form-control" autocomplete="nope" required ="required"  oninvalid="this.setCustomValidity('Please Select Sector')"
                      oninput="this.setCustomValidity('')">
          <option>----Sector----</option>
           </select></p>
                  <button type="submit" name="register_school" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Submit data</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/res.js"></script>
</body>

</html>
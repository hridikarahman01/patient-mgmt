<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors' Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/style.css">
</head>
<body>
    <header class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img class="logo-pic" src="/ASSETS/IMAGES/logo.png" alt=""></a>
              <a class="navbar-brand" href="#">North South Hospitals Ltd.</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Make an Appointment
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="PatientForm.php">Find a Doctor</a></li>
                        <li><a class="dropdown-item" href="Test Form.html">Book a Test</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="Ambulance Form.html">Ambulance</a></li>
                      </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="index.html#doctors">Doctors</a>
                  </li>
                </ul>
                </ul>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                  </div>
              </div>
            </div>
          </nav>

    </header>

    <section class="container">
         <h1>
        Doctor Appointment Form
    </h1>
    </section>



    <section class="container mt-5">
        <form class="row g-3" action="pform.php" method = "POST" >

          <div class="col-md-6">
                <label for="inputSlot" class="form-label">Name of the patient</label>
                <input type="text" class="form-control" id= 'name' name = 'name' placeholder="Patient's Name" required="required" data-validation-required-message="Please enter your name" />
                <p class="help-block text-danger"></p>
            </div>
            <div class="col-md-6">
                  <label for="inputSlot" class="form-label">Age</label>
                  <input type="number" class="form-control" id= 'age' name = 'age' placeholder="Age" required="required" data-validation-required-message="Please enter your first name" />
                  <p class="help-block text-danger"></p>
              </div>

              <div class="col-md-6">
                                    <label for="inputSlot" class="form-label">DEPARTMENT</label>
                                        <select class="form-select" name="department">
                                            <option disabled selected>Select Depertment</option>
                                            <?php
                                              $db = mysqli_connect("localhost","root","","nsu_pms");

                                              if(!$db)
                                              {
                                                die("Connection failed: " . mysqli_connect_error());
                                              }

                                              $records = mysqli_query($db, "SELECT DISTINCT department_name From doctor");  // Use select query here

                                              while($data = mysqli_fetch_array($records))
                                              {
                                                  echo "<option value='". $data['department_name'] ."'>" .$data['department_name'] ."</option>";  // displaying data in option menu
                                              }
                                          ?>

                                        </select>

                                    </div>

                                    <div class="col-md-6">
                                    <label for="inputSlot" class="form-label">DOCTORS</label>
                                        <select class="form-select" name="dname">
                                            <option disabled selected>Select doctor</option>
                                            <?php
                                              $db = mysqli_connect("localhost","root","","nsu_pms");

                                              if(!$db)
                                              {
                                                die("Connection failed: " . mysqli_connect_error());
                                              }

                                              $records = mysqli_query($db, "SELECT DISTINCT doctor_name From doctor");  // Use select query here

                                              while($data = mysqli_fetch_array($records))
                                              {
                                                  echo "<option value='". $data['doctor_name'] ."'>" .$data['doctor_name'] ."</option>";  // displaying data in option menu
                                              }
                                          ?>

                                        </select>

                                    </div>
              <div class="col-md-6">
                <label for="inputaptdt" class="form-label">Appointment Date</label>
                <input type="aptdt" class="form-control" id="inputaptdt" placeholder="YYYY-MM-DD" name="date"required>
              </div>

              <div class="col-md-4">
                <label for="time" class="form-label">Select Time</label>
                <input type="time" class="form-control" id="time" name="time"required>
              </div>

            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    I hereby confirm that the information provided herein is accurate
                </label>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary"  name="submit" type="submit" id="sendMessageButton">Submit</button>
            </div>
          </form>
    </section>

</body>


</html>

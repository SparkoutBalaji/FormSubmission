<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer>
    </script>
</head>
<body>
<section class="form_3">
    <h1>Translator Certification</h1>
    <div class="row pb-2">
        <h6>Employee Name:</h6>
        <div class="col md-4">
            <label for="last_name" class="form-label">Last Name <small>(Family Name)</small></label>
            <input type="text" name="last_name" class="form-control" id="last_name">
        </div>
        <div class="col md-4">
            <label for="first_name" class="form-label">First Name <small>(Given Name)</small></label>
            <input type="text" name="first_name" class="form-control" id="first_name">
        </div>
        <div class="col md-4">
            <label for="middle" class="form-label">Middle Initial</label>
            <input type="text" name="middle" class="form-control" id="middle">
        </div>
        <p class="mt-3"> <strong>Instructions:</strong> This supplement may be used if extra spaces are
            required to document more than one preparer and/or translator
            assisting an employee in completing Section 1 of Form I-9. The preparer and/or translator must
            enter the employee's name in
            the spaces provided. Each preparer or translator must complete, sign and date a separate
            certification area. Employers must
            retain completed supplement sheets with the employee's completed Form I-9.</p>
    </div>
    <div class="row pb-2">
        <p><b>I attest, under penalty of perjury, that I have assisted in the completion of Section 1 of
                this form and that to the best of my
                knowledge the information is true and correct.</b></p>
        <div class="col-md-10">
            <label for="preparer" class="form-label">Signature of Preparer or Translator (if new
                position):</label>
            <input type="text" name="preparer" class="form-control" id="preparer">

        </div>
        <div class="col-md-2">
            <label for="date" class="form-label">Date</label>
            <input type="text" name="date" class="form-control" id="date" placeholder="DD/MM/YYYY">
        </div>
        <div class="col-md-6">
            <label for="last_name" class="form-label">Last Name (Family Name)</label>
            <input type="text" name="last_name" class="form-control" id="last_name">
        </div>
        <div class="col-md-6">
            <label for="first_name" class="form-label">First Name (Given Name)</label>
            <input type="text" name="first_name" class="form-control" id="first_name">
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Address <small>Address (Street Number and
                    Name)</small></label>
            <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St">
        </div>
        <div class="col-md-2">
            <label for="inputcity" class="form-label">City or town</label>
            <input type="text" name="inputcity" class="form-control" id="inputcity">
        </div>
        <div class="col-md-2">
            <label for="state" class="form-label">State</label>
            <input type="text" name="state" class="form-control" id="state">
        </div>
        <div class="col-md-2">
            <label for="inputzip" class="form-label">Zip</label>
            <input type="text" name="inputzip" class="form-control" id="inputzip">
        </div>
    </div>
</section>
</body>
</html>

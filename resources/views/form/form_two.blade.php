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
<section class="form_2">
    <h1>Job Requisition Form</h1>
    <div class="input-group mb-3">
        <span class="input-group-text" id="date">Today's Date :</span>
        <input type="text" name="date" class="form-control" id="date" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="position">Position Title:</span>
        <input type="text" name="position" class="form-control" id="position" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="department">Department:</span>
        <input type="text" name="department" class="form-control" id="department" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="division">Which Division of Department (if applicable - e.g.
            DPW)</span>
        <input type="text" name="division" class="form-control" id="division" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
    </div>
    <div class="row pb-2">
        <label for="union" class="form-label">Is this a Union position? If so, which Union?:</label>
        <div class="col md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="check1" id="check1" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
                <label class="form-check-label" for="check1">
                    BCHASA (Admin. Assts.)
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="check2" id="check2" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
                <label class="form-check-label" for="check2">
                    Department Head Union
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="check3" id="check3" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
                <label class="form-check-label" for="check3">
                    Water and Sewer
                </label>
            </div>
        </div>
        <div class="col md-4">
            <div class="form-check">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="check4" id="check4" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
                    <label class="form-check-label" for="check4">
                        BCEU (City Employees' Union)
                    </label>
                </div>
                <input class="form-check-input" type="checkbox" name="check5" id="check5" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
                <label class="form-check-label" for="check5">
                    Library Union
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="check6" id="check6" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
                <label class="form-check-label" for="check6">
                    Buildings and Trades
                </label>
            </div>
        </div>
        <div class="col md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="check7" id="check7" value="{{ isset($employees['date']) ? $employees['date'] : '' }}" >
                <label class="form-check-label" for="check7">
                    BAETI (Engs., Techs, Insp.)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="check8" id="check8" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
                <label class="form-check-label" for="check8">
                    Laborers'
                </label>
            </div>
        </div>
    </div>

    <div class="row pb-2">
        <h4>Reason for Filling Position</h4>
        <div class="col md-6">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio1" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
                <label class="form-check-label" for="flexRadio1">
                    Backfilling Position (i.e., replacing a person who is leaving / vacant position)
                </label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="person leaving">Name of person leaving:</span>
                    <input type="text" class="form-control" id="person leaving" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="person date">Date that the position became / will
                        be vacant:</span>
                    <input type="text" class="form-control" id="person_date" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
                </div>
            </div>
        </div>

        <div class="col md-6">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio2" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
                <label class="form-check-label" for="flexRadio2">
                    Budgeted New Position (Job Description Attached) *Mayor's approval needed
                </label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="Grade">Budgeted Pay Grade / Range:</span>
                    <input type="text" class="form-control" id="Grade" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
                </div>
            </div>
        </div>
    </div>

    <div class="row pb">
        <div class="col md-12">
            <p>If this is a non-budgeted new position, provide the reason(s) for requesting below:</p>
        </div>
    </div>
    <div class="row pb-2">
        <div class="col-md-10">
            <label for="head_signature" class="form-label">Department Head Signature:</label>
            <input type="text" name="head_signature" class="form-control" id="head_signature" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">

        </div>
        <div class="col-md-2">
            <label for="date" class="form-label">Date</label>
            <input type="text" class="form-control" id="date" placeholder="DD/MM/YYYY" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
        </div>
    </div>
    <div class="row pb-2">
        <div class="col-md-10">
            <label for="cfo_signature" class="form-label">CFO Signature:</label>
            <input type="text" name="cfo_signature" class="form-control" id="cfo_signature">

        </div>
        <div class="col-md-2">
            <label for="date" class="form-label">Date</label>
            <input type="text" class="form-control" id="date" placeholder="DD/MM/YYYY">
        </div>
    </div>
    <div class="row pb-2">
        <div class="col-md-10">
            <label for=" mayor_signature" class="form-label">Mayor's Signature (if new position):</label>
            <input type="text" name="mayor_signature" class="form-control" id="mayor_signature">

        </div>
        <div class="col-md-2">
            <label for="date" class="form-label">Date</label>
            <input type="text" name="date" class="form-control" id="date" placeholder="DD/MM/YYYY">
        </div>
    </div>
</section>
</body>
</html>

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
<section class="form_1">
    <div class="container mt-5" id="forms">
        {{-- {{ dd($employees['identificatiion_Number']) }} --}}
        <h1>Fitness Reimbursement Form</h1>
        <div id="Subscriber's Information">
            <h4>Subscriber's Information</h4>
            <div class="row pb-2">
                <div class="col-md-3">
                    <label for="identificatiion_Number"class="form-label">Identification Number</label>
                    <input type="text" class="form-control" name="identificatiion_Number" id="identificatiion_Number" value="{{ isset($employees['identificatiion_Number']) ? $employees['identificatiion_Number'] : '' }}">

                </div>
                <div class="col-md-3">
                    <label for="lastname" class="form-label">Subscriber's Lastname</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" value="{{ isset($employees['lastname']) ? $employees['lastname'] : '' }}">
                </div>
                <div class="col-md-3">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" value="{{ isset($employees['firstname']) ? $employees['firstname'] : '' }}">
                </div>
                <div class="col-md-3">
                    <label for="middle" class="form-label">Middle Initial</label>
                    <input type="text" class="form-control" name="middle" id="middle" value="{{ isset($employees['middle']) ? $employees['middle'] : '' }}">
                </div>
            </div>

            <div class="row pb-2">
                <div class="col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" value="{{ isset($employees['address']) ? $employees['address'] : '' }}">
                </div>
                <div class="col-md-2">
                    <label for="inputcity" class="form-label">City</label>
                    <input type="text" class="form-control" name="inputcity" id="inputcity" value="{{ isset($employees['inputcity']) ? $employees['inputcity'] : '' }}">
                </div>
                <div class="col-md-2">
                    <label for="state" class="form-label">State</label>
                    <input type="text" name="state" class="form-control" id="state" value="{{ isset($employees['state']) ? $employees['state'] : '' }}">
                </div>
                <div class="col-md-2">
                    <label for="inputzip" class="form-label">Zip</label>
                    <input type="text" name="inputzip" class="form-control" id="inputzip" value="{{ isset($employees['inputzip']) ? $employees['inputzip'] : '' }}">
                </div>
            </div>

            <div class="row pb-2">
                <div class="col-12">
                    <label for="employer_name" class="form-label">Employer's Name</label>
                    <input type="text" name="employer_name" class="form-control" id="employer_name" value="{{ isset($employees['employer_name']) ? $employees['employer_name'] : '' }}">
                </div>
            </div>
        </div>

        <div id="Member" class="mt-4">
            <h4>Member and Claim Information</h4>
            <div class="row pb-2">
                <div class="col-md-3">
                    <label for="member_lastname" class="form-label">Member's Lastname</label>
                    <input type="text" name="member_lastname" class="form-control" id="member_lastname" value="{{ isset($employees['member_lastname']) ? $employees['member_lastname'] : '' }}">
                </div>
                <div class="col-md-3">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input type="text" name="firstname" class="form-control" id="firstname" value="{{ isset($employees['firstname']) ? $employees['firstname'] : '' }}">
                </div>
                <div class="col-md-3">
                    <label for="middle" class="form-label">Middle Initial</label>
                    <input type="text" name="middle" class="form-control" id="middle" value="{{ isset($employees['middle']) ? $employees['middle'] : '' }}">
                </div>
                <div class="col-md-3">
                    <label for="date"class="form-label">Date of Birth</label>
                    <input id="date" name="date" class="form-control" type="text" placeholder="DD/MM/YYYY" value="{{ isset($employees['date']) ? $employees['date'] : '' }}"/>
                </div>


            </div>
            <div class="row pb-2">
                <div class="col-md-6">
                    <label for="address" class="form-label">Mailing Address <small>(if different from subscriber's)</small></label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" value="{{ isset($employees['address']) ? $employees['address'] : '' }}">
                </div>
                <div class="col-md-2">
                    <label for="inputcity" class="form-label">City</label>
                    <input type="text" name="inputcity" class="form-control" id="inputcity" value="{{ isset($employees['inputcity']) ? $employees['inputcity'] : '' }}">
                </div>
                <div class="col-md-2">
                    <label for="state" class="form-label">State</label>
                    <input type="text" name="state" class="form-control" id="state" value="{{ isset($employees['state']) ? $employees['state'] : '' }}">
                </div>
                <div class="col-md-2">
                    <label for="inputzip" class="form-label">Zip</label>
                    <input type="text" name="inputzip" class="form-control" id="inputzip" value="{{ isset($employees['inputzip']) ? $employees['inputzip'] : '' }}">
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-md-3">
                    <h6>Gender</h6>
                    <div class="form-check">
                        <input class="form-check-input-male" type="radio" name="radio_gender" value="{{ isset($employees['radio_gender']) ? $employees['radio_gender'] : '' }}"
                            id="radio1">
                        <label class="form-check-label" for="radio1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input-female" type="radio" name="radio_gender" value="{{ isset($employees['radio_gender']) ? $employees['radio_gender'] : '' }}"
                            id="radio2">
                        <label class="form-check-label" for="radio2">
                            Female
                        </label>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6>Claim is for</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios"
                            id="gridRadios1" value="{{ isset($employees['gridRadios']) ? $employees['gridRadios'] : '' }}">
                        <label class="form-check-label" for="gridRadios1">
                            Subscriber <small>(policyholder)</small>
                        </label>
                        <div>
                            <input class="form-check-input" type="radio" name="gridRadios"
                                id="gridRadios2" value="{{ isset($employees['gridRadios']) ? $employees['gridRadios'] : '' }}">
                            <label class="form-check-label" for="gridRadios2">
                                Spouse <small>(of policyholder)</small>
                            </label>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios"
                            id="gridRadios1" value="{{ isset($employees['gridRadios']) ? $employees['gridRadios'] : '' }}">
                        <label class="form-check-label" for="gridRadios1">
                            Ex-Spouse
                        </label>
                        <div>
                            <input class="form-check-input" type="radio" name="gridRadios"
                                id="gridRadios2" value="{{ isset($employees['gridRadios']) ? $employees['gridRadios'] : '' }}">
                            <label class="form-check-label" for="gridRadios2">
                                Dependent <small>(up to age 26)</small>
                            </label>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios"
                            id="gridRadios1" value="{{ isset($employees['gridRadios']) ? $employees['gridRadios'] : '' }}">
                        <label class="form-check-label" for="gridRadios1">
                            Other<small>(specify)</small>
                            <label for="address" class="form-label"></label>
                            <input type="text" name="address" class="form-control" id="address" value="{{ isset($employees['address']) ? $employees['address'] : '' }}">
                        </label>

                    </div>

                </div>
            </div>
            <div class="row pb-2">
                <div class="col-12">
                    <label for="employer_name" class="form-label">Name, Address, and Phone Number of
                        Qualified
                        Health Club</label>
                    <input type="text" name="employer_name" class="form-control" id="employer_name" value="{{ isset($employees['employer_name']) ? $employees['employer_name'] : '' }}">
                </div>
            </div>
            <div class="row pb-2">
                <p>I am due $ <input type="text" name="due" value="{{ isset($employees['due']) ? $employees['due'] : '' }}">for the following reimbursement (check one) :</p>
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Radio" id="Radio1" value="{{ isset($employees['Radio']) ? $employees['Radio'] : '' }}">
                        <label class="form-check-label" for="Radio1">
                            Membership at a qualified health club.My monthly fee is $
                            <input type="text" name="health" value="{{ isset($employees['health']) ? $employees['health'] : '' }}">
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Radio" id="Radio2" value="{{ isset($employees['Radio']) ? $employees['Radio'] : '' }}">
                        <label class="form-check-label" for="Radio2">
                            Fitness classes at a qualified health club.My fee per class is $
                            <input type="text" name="fitness" value="{{ isset($employees['fitness']) ? $employees['fitness'] : '' }}">
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div id="Certification" class="mt-4">
            <h4>Certification and Authorization <sub>(This form must be signed and dated below.)</sub></h4>
            <p>I authorize the release of any information to Blue Cross Blue Shield of Massachusetts about
                my
                health
                club membership. I certify that
                the information provided in support of this submission is complete and correct and that I
                have
                not
                previously submitted for these services .
                I understand that Blue Cross may require additional evidence of health club membership and
                proof
                of
                payment for my membership
                before reimbursement is provided.</p>
            <div class="row pb-2">
                <div class="col-md-10">
                    <label for="signature" class="form-label">Subscriber's or Member's Signature:</label>
                    <input type="text" name="signature" class="form-control" id="signature" value="{{ isset($employees['signature']) ? $employees['signature'] : '' }}">

                </div>
                <div class="col-md-2">
                    <label for="date" class="form-label">Date</label>
                    <input type="text" class="form-control" id="date" name="date" placeholder="DD/MM/YYYY" value="{{ isset($employees['date']) ? $employees['date'] : '' }}">
                </div>
            </div>
        </div>
</section>
</body>
</html>

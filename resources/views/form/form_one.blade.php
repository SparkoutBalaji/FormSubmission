<section class="form_1">
    <div class="container mt-5" id="forms">

        <h1>Fitness Reimbursement Form</h1>
        <div id="Subscriber's Information">
            <h4>Subscriber's Information</h4>
            <div class="row pb-2">
                <div class="col-md-3">
                    <label for="identificatiion_Number"class="form-label">Identification Number</label>
                    <input type="text" class="form-control" name="identificatiion_Number"
                        id="identificatiion_Number" value="{{$employee->id}}">
                </div>
                <div class="col-md-3">
                    <label for="lastname" class="form-label">Subscriber's Lastname</label>
                    <input type="text" class="form-control" name="lastname" id="lastname">
                </div>
                <div class="col-md-3">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input type="text" class="form-control" name="firstname" id="firstname">
                </div>
                <div class="col-md-3">
                    <label for="middle" class="form-label">Middle Initial</label>
                    <input type="text" class="form-control" name="middle" id="middle">
                </div>
            </div>

            <div class="row pb-2">
                <div class="col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St">
                </div>
                <div class="col-md-2">
                    <label for="inputcity" class="form-label">City</label>
                    <input type="text" class="form-control" name="inputcity" id="inputcity">
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

            <div class="row pb-2">
                <div class="col-12">
                    <label for="employer_name" class="form-label">Employer's Name</label>
                    <input type="text" name="employer_name" class="form-control" id="employer_name">
                </div>
            </div>
        </div>

        <div id="Member" class="mt-4">
            <h4>Member and Claim Information</h4>
            <div class="row pb-2">
                <div class="col-md-3">
                    <label for="member_lastname" class="form-label">Member's Lastname</label>
                    <input type="text" name="member_lastname" class="form-control" id="member_lastname">
                </div>
                <div class="col-md-3">
                    <label for="firstname" class="form-label">Firstname</label>
                    <input type="text" name="firstname" class="form-control" id="firstname">
                </div>
                <div class="col-md-3">
                    <label for="middle" class="form-label">Middle Initial</label>
                    <input type="text" name="middle" class="form-control" id="middle">
                </div>
                <div class="col-md-3">
                    <label for="date"class="form-label">Date of Birth</label>
                    <input id="date" name="date" class="form-control" type="text" placeholder="DD/MM/YYYY" />
                </div>


            </div>
            <div class="row pb-2">
                <div class="col-md-6">
                    <label for="address" class="form-label">Mailing Address <small>(if different from subscriber's)</small></label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St">
                </div>
                <div class="col-md-2">
                    <label for="inputcity" class="form-label">City</label>
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
            <div class="row pb-2">
                <div class="col-md-3">
                    <h6>Gender</h6>
                    <div class="form-check">
                        <input class="form-check-input-male" type="radio" name="radio_gender"
                            id="radio1">
                        <label class="form-check-label" for="radio1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input-female" type="radio" name="radio_gender"
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
                            id="gridRadios1" value="option1">
                        <label class="form-check-label" for="gridRadios1">
                            Subscriber <small>(policyholder)</small>
                        </label>
                        <div>
                            <input class="form-check-input" type="radio" name="gridRadios"
                                id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Spouse <small>(of policyholder)</small>
                            </label>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios"
                            id="gridRadios1" value="option1">
                        <label class="form-check-label" for="gridRadios1">
                            Ex-Spouse
                        </label>
                        <div>
                            <input class="form-check-input" type="radio" name="gridRadios"
                                id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Dependent <small>(up to age 26)</small>
                            </label>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios"
                            id="gridRadios1" value="option1">
                        <label class="form-check-label" for="gridRadios1">
                            Other<small>(specify)</small>
                            <label for="address" class="form-label"></label>
                            <input type="text" name="address" class="form-control" id="address">
                        </label>

                    </div>

                </div>
            </div>
            <div class="row pb-2">
                <div class="col-12">
                    <label for="employer_name" class="form-label">Name, Address, and Phone Number of
                        Qualified
                        Health Club</label>
                    <input type="text" name="employer_name" class="form-control" id="employer_name">
                </div>
            </div>
            <div class="row pb-2">
                <p>I am due $ <input type="text">for the following reimbursement (check one) :</p>
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Radio" id="Radio1">
                        <label class="form-check-label" for="Radio1">
                            Membership at a qualified health club.My monthly fee is $ <input
                                type="text">
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Radio" id="Radio2">
                        <label class="form-check-label" for="Radio2">
                            Fitness classes at a qualified health club.My fee per class is $<input
                                type="text">
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
                    <input type="text" name="signature" class="form-control" id="signature">

                </div>
                <div class="col-md-2">
                    <label for="date" class="form-label">Date</label>
                    <input type="text" class="form-control" id="date" placeholder="DD/MM/YYYY">
                </div>
            </div>
        </div>
</section>

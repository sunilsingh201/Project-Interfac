<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seat application</title>

    <!-- 
        Fontawesome icons
     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- 
        Custom css
    -->
    <link rel="stylesheet" href="css/index.css">


    <!-- 
        Bootstrap 
     -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- 
        Google fonts
     -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200&display=swap" rel="stylesheet">
</head>

<body>



    <?php
    include_once("connection.php");
    include_once("function.php");

    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $var_applicant = $_POST["applicant"];
        $var_gender = $_POST["gender"];
        $var_dob = $_POST["dob"];
        $var_address = $_POST["address"];
        $var_email = $_POST["email"];
        $var_contact = $_POST["contact"];
        $var_father = $_POST["father"];
        $var_foccupation = $_POST["foccupation"];
        $var_fdesignation = $_POST["fdesignation"];
        $var_mother = $_POST["mother"];
        $var_moccupation = $_POST["moccupation"];
        $var_mdesignation = $_POST["mdesignation"];
        $var_rent = $_POST["rent"];
        $var_interest = $_POST["interest"];
        $var_other = $_POST["other"];
        $var_tv = $_POST["tv"];
        $var_washing = $_POST["washing"];
        $var_two = $_POST["two"];
        $var_four = $_POST["four"];
        $var_mobile = $_POST["mobile"];
        $var_mobilebill = $_POST["mobilebill"];
        $var_ebill = $_POST["Ebill"];
        $var_std = $_POST["std"];
        $var_marks = $_POST["scoring"];
        $var_outof = $_POST["outof"];
        $var_percent = $_POST["percent"];
        $var_atkt = $_POST["atkt"];
        $var_otherscholarship = $_POST["otherscholarship"];
        $var_seatscholarship = $_POST["seatscholarship"];
        $var_other2 = $_POST["other2"];
        $var_feesfunding = $_POST["feesfunding"];
        $var_feepaid = $_POST["feepaid"];
        $var_balance = $_POST["balance"];
        $var_rationcard = $_POST["rationcard"];
        $var_aadhar = $_POST["aadhar"];
        $var_marklist1 = $_POST["marklist1"];
        $var_marklist2 = $_POST["marklist2"];
        $var_salary = $_POST["salary"];
        $var_mobileupload = $_POST["mobileupload"];
        $var_electricupload = $_POST["electricupload"];
        $var_feeupload = $_POST["feeupload"];
        $var_bank = $_POST["bank"];
        $var_cheque = $_POST["cheque"];
        $var_photo = $_POST["photo"];
        $var_sign = $_POST["sign"];







        $query = "INSERT INTO `applicant`(`Name_of_the_applicant`, `Gender`, `Date_of_birth`, `Residence_address`, `Email`, `Contact`, `Father_name`, `Father_occupation`, `Father_designation`, `Mother_name`, `Mother_occupation`, `Mother_designation`, `Rental_income_if_any`, `Interest_on_investment`, `Other_income`, `Family_owns_tv_fridge`, `Family_owns_washing _mc`, `Family_owns_tw`, `Family_owns_fw`, `Mobile_in_family`, `Average_mobile_bill`, `Average_electric_bill`, `Current_studying_in`, `Marks_scored`, `Out_of`, `Marks_in_percent`, `Atkt_status`, `Other_scholarship_details`, `Awarded_seat_in_past`, `Scholarship_endowments_or_grant`, `Funding_source_for_current_year`, `Fee_paid`, `Fee_balance`, `Ration_card`, `Aadhar_card`, `Marksheet_1`, `Marksheet_2`, `Salary_certificate`, `Mobile_bills`, `Electric_bills`, `Fee_receipt`, `Bank_statement`, `Cancelled_cheque`, `Passport_size_photo`, `Signature`) VALUES ('$var_applicant','$var_gender','$var_dob','$var_address','$var_email','$var_contact','$var_father','$var_foccupation','$var_fdesignation','$var_mother','$var_moccupation','$var_mdesignation','$var_rent','$var_interest','$var_other','$var_tv','$var_washing','$var_two','$var_four','$var_mobile','$var_mobilebill','$var_ebill','$var_std','$var_marks','$var_outof','$var_percent','$var_atkt','$var_otherscholarship','$var_seatscholarship','$var_other2','$var_feesfunding','$var_feepaid','$var_balance','$var_rationcard','$var_aadhar','$var_marklist1','$var_marklist2','$var_salary','$var_mobileupload','$var_electricupload','$var_feeupload','$var_bank','$var_cheque','$var_photo','$var_sign')";




        if (!mysqli_query($conn, $query)) {
            echo ("Error description: " . mysqli_error($conn));
        }
        mysqli_close($conn);
        header("location:logout.php");
        $_SESSION['name'] = $var_applicant;
    }

    ?>

    <div class="init-app-titl mt-5">
        <div class="container">
            <div class="row">
                <div class="init-app-title-top col-sm-10 col-md-6 mx-auto">
                    <div class="init-app-img">
                        <figure>
                            <img src="potrait/slogo.jpg" alt="">
                        </figure>
                    </div>
                    <div class="init-app-title-name">
                        <h1>SEAT</h1>
                    </div>
                </div>
                <div class="init-app-sm-title col-md-12">
                    <p class="text-center">SIES Education Assistance Trust</p>
                </div>
                <div class="init-app-head col-sm-10 col-md-12">
                    <h2 class="text-center ">SEAT SCHOLARSHIP APPLICATION FORM</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="init-app-instruction-section col-sm-6 col-md-8 mx-auto my-3">
                    <div class="init-app-instruction-title">
                        <P class="text-danger mx-3">Important Instruction*</P>
                    </div>
                    <div class="init-inst-num">
                        <ol class="text-danger">
                            <li>Please do not leave any column blank</li>
                            <li>Failure to complete this application fully and correctly may prejudice the applicant's
                                chances of obtaining Scholarship</li>
                            <li>If a question is not applicable, put N.A. Please attach all documents as required</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="init-app-form-1">





        <form action="" method="POST" class="hello init-app-form">
            <div class="container">
                <div class="row">
                    <div class="init-form-dimesion col-sm-6 col-md-8  mx-auto">

                        <div class="form-group row mb-4">
                            <label for="nameof" class="col-sm-3 col-form-label">Applicant's Name<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control p-2  border border-1" id="nameof" name="applicant" required>
                            </div>
                        </div>

                        <div class="form-group row  mb-4">
                            <label class="col-sm-3 col-form-label">Male/Female<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control p-2 border border-1" name="gender" required>
                            </div>
                        </div>

                        <div class="form-group row  mb-4">
                            <label class="col-sm-3 col-form-label">Date of Birth<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control p-2 border border-1" name="dob" placeholder="dd/mm/yyyy" required>
                            </div>
                        </div>

                        <div class="form-group row  mb-4">
                            <label for="inputtext3" class="col-sm-3 col-form-label">Residence Address<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control p-2 border border-1" id="inputtext3" name="address" required>
                            </div>
                        </div>

                        <div class="form-group row  mb-4">
                            <label for="email" class="col-sm-3 col-form-label">Email<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control p-2 border border-1" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-group row  mb-4">
                            <label class="col-sm-3 col-form-label">Mobile Number<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control p-2 border border-1" name="contact" required>
                            </div>
                        </div>

                        <div class="form-group row  mb-4">
                            <label class="col-sm-3 col-form-label">Father Name<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control p-2 border border-1" name="father" required>
                            </div>
                        </div>

                        <div class="form-group row  mb-4">
                            <label class="col-sm-3 col-form-label">Occupation<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control p-2 border border-1" name="foccupation" required>
                            </div>
                        </div>

                        <div class="form-group row  mb-4">
                            <label class="col-sm-3 col-form-label">Designation<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control p-2 border border-1" name="fdesignation" required>
                            </div>
                        </div>

                        <div class="form-group row  mb-4">
                            <label class="col-sm-3 col-form-label">Mother Name<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control p-2 border border-1" name="mother" required>
                            </div>
                        </div>

                        <div class="form-group row  mb-4">
                            <label class="col-sm-3 col-form-label">Occupation<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control p-2 border border-1" name="moccupation" required>
                            </div>
                        </div>

                        <div class="form-group row  mb-4">
                            <label class="col-sm-3 col-form-label">Designation<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control p-2 border border-1" name="mdesignation" required>
                            </div>
                        </div>

                        <div class="form-group row  mb-4">
                            <label class="col-sm-4 col-form-label">Rental Income if any<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control p-2 border border-1" name="rent" required>
                            </div>
                        </div>
                        <div class="form-group row  mb-4">
                            <label class="col-sm-4 col-form-label">Interest on investment<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control p-2 border border-1" name="interest" required>
                            </div>
                        </div>

                        <div class="form-group row  mb-4">
                            <label class="col-sm-4 col-form-label">Other income (specify)<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control p-2 border border-1" name="other" required>
                            </div>
                        </div>

                        <label>If your family owns any of the following(Yes/No) :</label>
                        <div class="init-app-fees mb-4">
                            <div class="init-app-left col-md-3">
                                <label>Tv / Frideg<sup class="text-danger">*</sup>:</label>
                                <div class="init-app-just col-md-3 mx-2">
                                    <input type="text" class="form-control p-2 border border-1" name="tv" required>
                                </div>
                            </div>
                            <div class="init-app-right col-md-3">
                                <label class="mx-3">Waching M/C<sup class="text-danger">*</sup>:</label>
                                <div class="init-app-just col-md-3 mx-2">
                                    <input type="text" class="form-control p-2 border border-1" name="washing" required>
                                </div>
                            </div>
                            <div class="init-app-right col-md-3">
                                <label class="mx-3 col-md-7">Two Wheeler<sup class="text-danger">*</sup>:</label>
                                <div class="init-app-just col-md-3">
                                    <input type="text" class="form-control p-2 border border-1" name="two" required>
                                </div>
                            </div>
                            <div class="init-app-right col-md-3">
                                <label class="mx-3 col-md-7">Four Wheeler<sup class="text-danger">*</sup>:</label>
                                <div class="init-app-just col-md-3">
                                    <input type="text" class="form-control p-2 border border-1" name="four" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row  mb-4">
                            <label class="col-sm-6 col-form-label">How many mobiles are there in the
                                family?<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control p-2 border border-1" name="mobile" required>
                            </div>
                        </div>



                        <!-- here -->
                        <div class="form-group row  mb-4">
                            <label class="col-sm-6 col-form-label">What is the average payment for all
                                mobiles in the family<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control p-2 border border-1" name="mobilebill" required>
                            </div>
                        </div>
                        <div class="form-group row  mb-4">
                            <label class="col-sm-6 col-form-label">What is the amount paid for
                                electricity in last 3 months<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control p-2 border border-1" name="Ebill" required>
                            </div>
                        </div>


                        <div class="form-group row  mb-5">
                            <label class="col-sm-6 col-form-label">Currently studying in<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control p-2 border border-1" name="std" required>
                            </div>
                        </div>
                        <label>Academic Performance for last 2 years exams (Give semester wise, if
                            applicable)</label>
                        <div class="init-app-fees mb-4">
                            <div class="init-app-left col-md-4">
                                <label>Marks scored<sup class="text-danger">*</sup>:</label>
                                <div class="init-app-just col-md-4 mx-2">
                                    <input type="text" class="form-control p-2 border border-1" name="scoring" required>
                                </div>
                            </div>

                            <div class="init-app-right col-md-4">
                                <label class="mx-3">Out of<sup class="text-danger">*</sup>:</label>
                                <div class="init-app-just col-md-4 mx-2">
                                    <input type="text" class="form-control p-2 border border-1" name="outof" required>
                                </div>
                            </div>
                            <div class="init-app-right col-md-4">
                                <label class="mx-3 col-md-7">% marks scored<sup class="text-danger">*</sup>:</label>
                                <div class="init-app-just col-md-4">
                                    <input type="text" class="form-control p-2 border border-1" name="percent" required>
                                </div>
                            </div>

                        </div>
                        <div class="form-group row  mb-5">
                            <label class="col-sm-8 col-form-label">Do you have any ATKT papers to be
                                cleared?(Yes/No)<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control p-2 border border-1" name="atkt" required>
                            </div>
                        </div>
                        <div class="form-group row  mb-4">
                            <label class="col-sm-6 col-form-label">Are you entitled to any Scholarship
                                from any source including government? If yes please specify the details else No<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control p-2 border border-1" name="otherscholarship" required>
                            </div>
                        </div>
                        <div class="form-group row  mb-4">
                            <label class="col-sm-6 col-form-label">Have you been awarded SEAT
                                scholarship in the past. If yes, mention the year and amount.<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control p-2 border border-1" name="seatscholarship" required>
                            </div>
                        </div>
                        <div class="form-group row  mb-4">
                            <label class="col-sm-6 col-form-label">Have you been awarded of any other
                                scholarship/endowments or grant in the past? If yes please specify the year and
                                amount.<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control p-2 border border-1" name="other2" required>
                            </div>
                        </div>
                        <div class="form-group row  mb-5">
                            <label class="col-sm-6 col-form-label">Please specify the source of
                                funding for your fees paid for the current academic year.<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control p-2 border border-1" name="feesfunding" required>
                            </div>
                        </div>
                        <div class="init-app-fees mb-4">
                            <div class="init-app-left col-md-6">
                                <label for="">Fees paid for current academic year<sup class="text-danger">*</sup>:</label>
                                <div class="init-app-just col-md-3">
                                    <input type="text" class="form-control p-2 border border-1" name="feepaid" required>
                                </div>

                            </div>
                            <div class="init-app-right col-md-5">
                                <label class="mx-3">Balance fees<sup class="text-danger">*</sup>:</label>
                                <div class="init-app-just col-md-4 mx-3">
                                    <input type="text" class="form-control p-2 border border-1" name="balance" required>
                                </div>
                            </div>
                        </div>












                        <hr>
                        <label for="" class="mt-5 mb-5 mx-auto col-md-12 text-center"><strong>Please upload the
                                following. All copies are to be self attested </strong></label>
                        <div class="form-group row  mb-4">
                            <label class="col-sm-6 col-form-label">Copy of Ration Card<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control-file mb-2" required name="rationcard">
                            </div>
                        </div>
                        <div class="form-group row  mb-4">
                            <label class="col-sm-6 col-form-label">Aadhar Card<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control-file mb-2" name="aadhar" required>
                            </div>
                        </div>
                        <div class="form-group row  mb-5">
                            <label for="inputtext3" class="col-sm-6 col-form-label">Copy of mark list of previous 2
                                years exams<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control-file mb-2" name="marklist1" required>
                                <input type="file" class="form-control-file" name="marklist2" required>
                            </div>
                        </div>
                        <div class="form-group row  mb-4">
                            <label for="inputtext3" class="col-sm-6 col-form-label">Salary certficate / Income Tax
                                return of all earning members of your family<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control-file mb-2" name="salary" required>
                            </div>
                        </div>
                        <div class="form-group row  mb-4">
                            <label class="col-sm-6 col-form-label">Mobile bills for last 3 months<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control-file mb-2" name="mobileupload" required>

                            </div>
                        </div>
                        <div class="form-group row  mb-4">
                            <label class="col-sm-6 col-form-label">Electricity bills of last 3
                                months<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control-file mb-2" name="electricupload" required>
                            </div>
                        </div>
                        <div class="form-group row  mb-4">
                            <label class="col-sm-6 col-form-label">Copy of fee receipt paid for the
                                current year<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control-file mb-2" name="feeupload" required>
                            </div>
                        </div>
                        <div class="form-group row  mb-4">
                            <label class="col-sm-6 col-form-label">Copy of last 6 months bank
                                statement of all earning members of your family<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control-file mb-2" name="bank" required>
                            </div>
                        </div>
                        <div class="form-group row  mb-4">
                            <label class="col-sm-6 col-form-label">Parents cancelled cheque folio of
                                the bank with name of the account holder. (having a bank account is a must)<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control-file mb-2" name="cheque" required>
                            </div>
                        </div>
                        <div class="form-group row  mb-4">
                            <label class="col-sm-6 col-form-label">Passport size photo (size should
                                not exceed 200kb)<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control-file mb-2" name="photo" required>
                            </div>
                        </div>
                        <div class="form-group row  mb-4">
                            <label class="col-sm-6 col-form-label">Signature(Use plain paper)<sup class="text-danger">*</sup>:</label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control-file mb-2" name="sign" required>
                            </div>
                        </div>


                        <button type="submit" name="submit" class="btn btn-primary col-md-2">Submit</button>
                    </div>
                </div>
        </form>
    </div>
</body>

</html>
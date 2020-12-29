<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Managent System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class="p-3">
    <form action="studentdbs.php" name="student" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h2 class="bg-secondary font-weight-bold text-white"><b>Course Information</b></h2>
                    <hr class="mb-3">
                    <table class="table table-bordered btn-secondary display-5 font-weight-bold">
                        <tr>
                            <td>Course ID:</td>
                            <td>
                                <select name="courseID" id="iCourseID" style="width: 200px; margin: 2px; text-align: right;">
                                    <option value="space"></option>
                                    <option value="STEM">STEM04954</option>
                                    <option value="Legal Studies">LS905865</option>
                                    <option value="Medical Science">Med290045</option>
                                    <option value="Education">Edu390045</option>
                                    <option value="Business">Bus490045</option>
                                    <option value="Management">Man590045</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Faculty:</td>
                            <td>
                                <select name="faculty" id="iFaculty" style="width: 200px; margin: 2px; text-align: right;">
                                    <option value="space"></option>
                                    <option value="STEM">Science Technology Engineering & Maths</option>
                                    <option value="Legal Studies">Law School</option>
                                    <option value="Medical Science">Medical School</option>
                                    <option value="Hospitality">Social Science</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>School:</td>
                            <td>
                                <select name="school" id="iSchool" style="width: 200px; margin: 2px; text-align: right;">
                                    <option value="space"></option>
                                    <option value="BIS">Business Information</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="Maths">Maths</option>
                                    <option value="SoftwareEng">Software Engineering</option>
                                    <option value="Games">Computer Games</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Attendance:</td>
                            <td>
                                <select name="attendance" id="iAttendance" style="width: 200px; margin: 2px; text-align: right;">
                                    <option value="space"></option>
                                    <option value="fulltime">fulltime</option>
                                    <option value="parttime">parttime</option>
                                    <option value="distance">distance</option>
                                    <option value="sandwich">sandwich</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Academic Year:</td>
                            <td>
                                <select name="academic" id="iAcamedic" style="width: 200px; margin: 2px; text-align: right;">
                                    <option value="space"></option>
                                    <option value="2018-2019">2018-2019</option>
                                    <option value="2019-2020">2019-2020</option>
                                    <option value="2020-2021">2020-2021</option>
                                    <option value="2021-2022">2021-2022</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Year Level:</td>
                            <td>
                                <select name="yearLevel" id="iYearLevel" style="width: 200px; margin: 2px; text-align: right;">
                                    <option value="space"></option>
                                    <option value="zero">0</option>
                                    <option value="one">1</option>
                                    <option value="two">2</option>
                                    <option value="third">3</option>
                                    <option value="fourth">4</option>
                                </select>
                            </td>
                        </tr>
                    </table>

                    <table class="table table-bordered btn-secondary display-5 font-weight-bold">
                        <tr>
                            <td>Course Tutor:</td>
                            <td>
                                <input type="text" name="tutor" id="iTutor" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>Course Code:</td>
                            <td>
                                <input type="text" name="courseCode" id="iCourseCode" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>Course Title:</td>
                            <td>
                                <input type="text" name="courseTitle" id="iCourseTitle" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Undergraduate:</td>
                            <td>
                                <input type="text" name="undergraduate" id="iUndergraduate" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>Postgraduate:</td>
                            <td>
                                <input type="text" name="postgraduate" id="iPostgraduate" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>Research:</td>
                            <td>
                                <input type="text" name="research" id="iResearch" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                    </table>
                    <br>
                </div>

                <div class="col-sm-4">
                    <h2 class="bg-secondary font-weight-bold text-white"><b>Student Details</b></h2>
                    <hr class="mb-3">
                    <table class="table table-bordered btn-secondary display-5 font-weight-bold">
                        <tr>
                            <td>Student ID:</td>
                            <td>
                                <input type="text" name="studentID" id="iStudentID" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>Title:</td>
                            <td>
                                <select name="title" id="iTitle" style="width: 200px; margin: 2px; text-align: right;">
                                    <option value="space"></option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Miss">Miss</option>
                                    <option value="Doctor">Doctor</option>
                                    <option value="Professor">Professor</option>
                                    <option value="Rev">Rev</option>
                                    <option value="Captain">Captain</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Firstname:</td>
                            <td>
                                <input type="text" name="firstname" id="iFirstname" style="width: 200px; margin: 2px; text-align: right;" value="firstname" required>
                            </td>
                        </tr>

                        <tr>
                            <td>Surname:</td>
                            <td>
                                <input type="text" name="surname" id="iSurname" style="width: 200px; margin: 2px; text-align: right;" value="surname" required>
                            </td>
                        </tr>

                        <tr>
                            <td>Date of Birth:</td>
                            <td>
                                <input type="text" name="dateofbirth" id="idob" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>Gender:</td>
                            <td>
                                <input type="radio" name="gender" id="gender" value="m"> Male
                                <input type="radio" name="gender" id="gender" value="f"> Female
                            </td>
                        </tr>
                    </table>

                    <table class="table table-bordered btn-secondary display-5 font-weight-bold">
                        <tr>
                            <td>Address:</td>
                            <td>
                                <input type="text" name="address" id="iAddress" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>Email:</td>
                            <td>
                                <input type="text" name="email" id="iEmail" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>Telephone:</td>
                            <td>
                                <input type="text" name="telephone" id="iTelephone" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Mobile:</td>
                            <td>
                                <input type="text" name="mobile" id="iMobile" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>Emeg Contact:</td>
                            <td>
                                <input type="text" name="econtact" id="iContant" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>Relationship:</td>
                            <td>
                                <input type="text" name="relationship" id="iRelationship" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                    </table>
                    <br>
                </div>

                <div class="col-sm-4">
                    <h2 class="bg-secondary font-weight-bold text-white"><b>Qualification Grades</b></h2>
                    <hr class="mb-3">
                    <table class="table table-bordered btn-secondary display-5 font-weight-bold">
                        <tr>
                            <td>Games:</td>
                            <td>
                                <input type="text" name="games" id="iGames" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>Animation:</td>
                            <td>
                                <input type="text" name="animation" id="iAnimation" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>IT Business:</td>
                            <td>
                                <input type="text" name="business" id="iBusiness" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>Software Testing:</td>
                            <td>
                                <input type="text" name="softwaretesting" id="iSoftwareTesting" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>OBject Oriented:</td>
                            <td>
                                <input type="text" name="objectoriented" id="iObject" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>Computer System:</td>
                            <td>
                                <input type="text" name="computersystem" id="iComputer" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>
                    </table>

                    <table class="table table-bordered btn-secondary display-5 font-weight-bold">
                        <tr>
                            <td>Project x 2:</td>
                            <td>
                                <input type="text" name="project" id="iProject" style="width: 200px; margin: 2px; text-align: right;" value="">
                            </td>
                        </tr>

                        <tr>
                            <td>Total Score:</td>
                            <td>
                                <input type="text" name="score" id="iScore" style="width: 200px; margin: 2px; text-align: right;" value="" readonly>
                            </td>
                        </tr>

                        <tr>
                            <td>Overall Average:</td>
                            <td>
                                <input type="text" name="average" id="iAverage" style="width: 200px; margin: 2px; text-align: right;" value="" readonly>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Classification:</td>
                            <td>
                                <input type="text" name="class" id="iClass" style="width: 200px; margin: 2px; text-align: right;" value="" readonly>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="button" style="width: 140px; height: 54px; font-size:60; border-radius: 8px;" value="Reset" onClick="btnClear()">
                            </td>
                            <td>
                                <input type="submit" style="width: 140px; height: 54px; font-size:60; " value="Academic Grade" onClick="btnResult()" class="btn-secondary">
                            </td>
                        </tr>
                    </table>
                    <br>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <h3 class="display-5 font-weight-bold text-white bg-secondary ">Student Management System</h3>
        </div>

    
    </form>


    <script>
            function btnResult() {
                var u1 = parseInt(document.getElementById("iGames").value);
                var u2 = parseInt(document.getElementById("iAnimations").value);
                var u3 = parseInt(document.getElementById("iBusiness").value);
                var u4 = parseInt(document.getElementById("iSoftwareTesting").value);
                var u5 = parseInt(document.getElementById("iObject").value);
                var u6 = parseInt(document.getElementById("iComputer").value);
                var u7 = parseInt(document.getElementById("iProject").value);

                var checkTotal = u1 + u2 + u3 + u4 + u5 + u6 + (u7 * 2);
                console.log(checkTotal);

                if(checkTotal > 800) {
                    alert("Total mark entered is invalid.");
                    document.Student.games.value = "";
                    document.Student.animation.value = "";
                    document.Student.business.value = "";
                    document.Student.softwaretesting.value = "";
                    document.Student.objectoriented.value = "";
                    document.Student.computersystem.value = "";
                    document.Student.project.value = "";
                    document.Student.score.value = "";
                    document.Student.average.value = "";
                    document.Student.class.value = "";
                } else {
                    document.Student.iScore.value = checkTotal;
                    document.Student.iAverage.value = checkTotal/8;
                }
            }

            function btnClear() {

            }
        </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
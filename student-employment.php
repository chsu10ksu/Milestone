<!DOCTYPE html>
<html lang="en-US">
<head>
        <meta charset="utf-8">
<title>Student Employment</title>
<link rel="stylesheet" type="text/css" href="rcstyle.css">

</head>
<body>
     <!-- navigation -->
     <?php include 'navigation.php';?>

    <img src="internship-2.jpg" alt="student-employment" style="opacity: 0.8;">    
    <h1>Joy Applied Research Center in Information Technology (JCARIT)</h1>
    <!-- Content    -->
    <div id="content">
    <h2>Student Employment</h2>
    <h3>Eligibility</h3>
    <p>The summer is coming. JCARIT is pleased to offer 4 student assistant positions. In order to be eligible to apply for a Student Assistant position, the student must have completed the required courses listed below and meet the minimum average grade requirement.</p>

    <h3>Courses Required Completion for Undergraduates:</h3>
    <ul>
        <li>CSE 3203 Mobile System Overview</li>
        <li>IT 3203 Introduction to Web Development</li>
        <li>IT 3423 Operating Systems Concepts & Administration</li>
        <li>IT 4213 Mobile Web Development</li>
        <li>IT 4823 Information Security Administration & Privacy</li>
    </ul> 
    <h4>&nbsp; &nbsp; Grade Average Requirement: &gt;3.2</h4>   

    <h3>Courses Required Completion for Graduates:</h3>
    <ul>
        <li>IT 3203 Introduction to Web Development</li>
        <li>IT 6713 Business Intelligence</li>
        <li>IT 7113 Data Visualization</li>
        <li>IT 7133 Enterprise AI Applications</li>
    </ul> 
    <h4>&nbsp; &nbsp; Grade Average Requirement: &gt;3.7</h4> 

    <form id="gradeForm">
    <fieldset>
        <legend> Please Answer the Following Questions to Verify Your Eligibility </legend>      
        <label for="status">Student Status:</label>
        <select class="semStatus" id="status" name="status">
            <option value="none">Select an option</option>
            <option value="Undergraduate">Undergraduate</option>
            <option value="Graduate">Graduate</option>
        </select>
        <input type="button" value="Next Step" 
        onclick="displayCourse();
        document.getElementById('evaluate').style.display='block'">
        <br><br>
        <div id="result"></div>
        
<div id="underList" style="display:none;">
    <table class="formonly">
        <tr>
            <td class="formScore">1. CSE 3203 Mobile System Overview:</td>
            <td class="formScore">
                <input type="radio" id="a1" name="CSE3203" value="A">
                <label for="a1">A</label>
                <input type="radio" id="b1" name="CSE3203" value="B">
                <label for="b1">B</label>
                <input type="radio" id="c1" name="CSE3203" value="C">
                <label for="c1">C</label>    
                <input type="radio" id="d1" name="CSE3203" value="D">
                <label for="d1">D</label>
                <input type="radio" id="f1" name="CSE3203" value="F">
                <label for="f1">F</label>
            </td>
        </tr>

        <tr>
            <td class="formScore">2. IT 3203 Introduction to Web Development:</td>
            <td class="formScore">
                <input type="radio" id="a2" name="IT3203" value="A">
                <label for="a2">A</label>
                <input type="radio" id="b2" name="IT3203" value="B">
                <label for="b2">B</label>
                <input type="radio" id="c2" name="IT3203" value="C">
                <label for="c2">C</label>    
                <input type="radio" id="d2" name="IT3203" value="D">
                <label for="d2">D</label>
                <input type="radio" id="f2" name="IT3203" value="F">
                <label for="f2">F</label>
            </td>
        </tr>
        <tr>
            <td class="formScore">3. IT 3423 Operating Systems Concepts & Administration:</td>
            <td class="formScore">
                <input type="radio" id="a3" name="IT3423" value="A">
                <label for="a3">A</label>
                <input type="radio" id="b3" name="IT3423" value="B">
                <label for="b3">B</label>
                <input type="radio" id="c3" name="IT3423" value="C">
                <label for="c3">C</label>    
                <input type="radio" id="d3" name="IT3423" value="D">
                <label for="d3">D</label>
                <input type="radio" id="f3" name="IT3423" value="F">
                <label for="f3">F</label>
            </td>
        </tr>

        <tr>
            <td class="formScore">4. IT 4213 Mobile Web Development:</td>
            <td class="formScore">
                <input type="radio" id="a4" name="IT4213" value="A">
                <label for="a4">A</label>
                <input type="radio" id="b4" name="IT4213" value="B">
                <label for="b4">B</label>
                <input type="radio" id="c4" name="IT4213" value="C">
                <label for="c4">C</label>    
                <input type="radio" id="d4" name="IT4213" value="D">
                <label for="d4">D</label>
                <input type="radio" id="f4" name="IT4213" value="F">
                <label for="f4">F</label>
            </td>
        </tr>

        <tr>
            <td class="formScore">5. IT 4823 Information Security Administration & Privacy:</td>
            <td class="formScore">
                <input type="radio" id="a5" name="IT4823" value="A">
                <label for="a5">A</label>
                <input type="radio" id="b5" name="IT4823" value="B">
                <label for="b5">B</label>
                <input type="radio" id="c5" name="IT4823" value="C">
                <label for="c5">C</label>    
                <input type="radio" id="d5" name="IT4823" value="D">
                <label for="d5">D</label>
                <input type="radio" id="f5" name="IT4823" value="F">
                <label for="f5">F</label>
            </td>
        </tr>
    </table><br>
</div>

<div id="gradList" style="display:none;">
    <table class="formonly">
        <tr>
            <td class="formScore">1. IT 3203 Introduction to Web Development:</td>
            <td class="formScore">
                <input type="radio" id="a6" name="IT3203" value="A">
                <label for="a6">A</label>
                <input type="radio" id="b6" name="IT3203" value="B">
                <label for="b6">B</label>
                <input type="radio" id="c6" name="IT3203" value="C">
                <label for="c6">C</label>    
                <input type="radio" id="d6" name="IT3203" value="D">
                <label for="d6">D</label>
                <input type="radio" id="f6" name="IT3203" value="F">
                <label for="f6">F</label>
            </td>
        </tr>
        
        <tr>
            <td class="formScore">2. IT 6713 Business Intelligence:</td>
            <td class="formScore">
                <input type="radio" id="a7" name="IT6713" value="A">
                <label for="a7">A</label>
                <input type="radio" id="b7" name="IT6713" value="B">
                <label for="b7">B</label>
                <input type="radio" id="c7" name="IT6713" value="C">
                <label for="c7">C</label>    
                <input type="radio" id="d7" name="IT6713" value="D">
                <label for="d7">D</label>
                <input type="radio" id="f7" name="IT6713" value="F">
                <label for="f7">F</label>
            </td>
        </tr>

        <tr>
            <td class="formScore">3. IT 7113 Data Visualization:</td>
            <td class="formScore">
                <input type="radio" id="a8" name="IT7113" value="A">
                <label for="a8">A</label>
                <input type="radio" id="b8" name="IT7113" value="B">
                <label for="b8">B</label>
                <input type="radio" id="c8" name="IT7113" value="C">
                <label for="c8">C</label>    
                <input type="radio" id="d8" name="IT7113" value="D">
                <label for="d8">D</label>
                <input type="radio" id="f8" name="IT7113" value="F">
                <label for="f8">F</label>
            </td>
        </tr>

        <tr>
            <td class="formScore">4. IT 7133 Enterprise AI Applications:</td>
            <td class="formScore">
                <input type="radio" id="a9" name="IT7133" value="A">
                <label for="a9">A</label>
                <input type="radio" id="b9" name="IT7133" value="B">
                <label for="b9">B</label>
                <input type="radio" id="c9" name="IT7133" value="C">
                <label for="c9">C</label>    
                <input type="radio" id="d9" name="IT7133" value="D">
                <label for="d9">D</label>
                <input type="radio" id="f9" name="IT7133" value="F">
                <label for="f9">F</label>
            </td>
        </tr>
    </table><br>
</div>
        <!-- Evaluate -->
        <input type="button" id="evaluate" value="Evaluate" style="display: none"
        onclick="averageGrade()">

        <h4 id="printAverage"></h4>
        <h4 id="appForm"></h4>
            <button id="formLink" style="display:none;" onclick="window.open('app-form.php', '_blank');">Application Form Link</button>
    </fieldset>    
</form>
<br>
</div>
<?php include 'footer.php';?>

<script>
    let average = 0;
    let totalGrade = 0;
    let totalCourse = 0;
    function displayCourse()    {
        let studentStatus = document.getElementById('status').value;
        let courseList ="";
        
        if (studentStatus === "none") {
        alert("Please choose your student status.");
        return;
        }
        // Reset
        average = 0;

        let radioButtons = document.querySelectorAll('input[type="radio"]');
        radioButtons.forEach(function(radioButton) {
        radioButton.checked = false;
    });

        if (studentStatus==="Undergraduate") {
        courseList += 'Your student status is ' + studentStatus + " and your required courses are listed below. Please select your letter grade. ";
        document.getElementById("gradList").style.display = "none";
        document.getElementById("underList").style.display = "block";
        

        } else if (studentStatus==="Graduate") {
        courseList += 'Your student status is ' + studentStatus + ' and your required courses are listed below. Please select your letter grade.';
        
        document.getElementById("underList").style.display = "none";
        document.getElementById("gradList").style.display = "block";
        
        } else {
        courseList +="Please choose your status."
        document.getElementById("underList").style.display = "none";
        document.getElementById("gradList").style.display = "none";
        }
        // Display result
        document.getElementById("result").innerHTML = courseList;
      }

    function averageGrade() {
        let studentStatus = document.getElementById('status').value;
        average=0;
        totalGrade=0;
        if (studentStatus ==="Undergraduate") { totalCourse = 5;}
        else if (studentStatus ==="Graduate") { totalCourse = 4;}

        let radioButtons = document.querySelectorAll('input[type="radio"]');
        radioButtons.forEach(function(radioButton) {
        if (radioButton.checked){
            const grade = radioButton.value;
            if (grade === "A") {
                totalGrade += 4.0;
            } else if (grade ==="B") {
                totalGrade += 3.0;
            } else if (grade ==="C") {
                totalGrade += 2.0;
            } else if (grade ==="D") {
                totalGrade += 1.0;
            } else if (grade ==="E") {
                totalGrade += 0.0;
            }   
            }
           
        });
        average = totalGrade / totalCourse;
        document.getElementById("printAverage").innerHTML='Your average score is ' + average.toFixed(2) + '.';

        if((average >=3.2 && studentStatus ==="Undergraduate") || (average >=3.7 && studentStatus ==="Graduate")){
            document.getElementById("appForm").innerHTML='Congratulation! You are qualified to apply. Please fill the application form and submit it before 1st May, 2024.';
            document.getElementById("formLink").style.display="block";}
        else {
            document.getElementById("appForm").innerHTML='Thank you for your interest.';
            document.getElementById("formLink").style.display="none";
        }
    }

    function hideList() {
        document.getElementById("underList").style.display ="none",
        document.getElementById("gradList").style.display ="none";
        document.getElementById("result").innerHTML ="";
    }

    function hideEvaluation() {
        document.getElementById("printAverage").innerHTML="";
        document.getElementById("appForm").innerHTML="";
        document.getElementById("formLink").style.display ="none";
    }

    window.onload = function() {
    let radioButtons = document.querySelectorAll('input[type="radio"]');
        radioButtons.forEach(function(radioButton) {
            radioButton.addEventListener('change', hideEvaluation); 
        });
    document.getElementById("status").addEventListener('change', hideList);
    document.getElementById("status").addEventListener('change', hideEvaluation);
    };

</script>

</body>
</html>
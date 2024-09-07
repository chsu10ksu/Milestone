<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    <title>Summer Student Assistent Application Form</title>
    <link rel="stylesheet" type="text/css" href="rcstyle.css">
    </head>
<body>
    <?php include 'navigation.php';?>
<h1>Joy Applied Research Center in Information Technology (JCARIT)</h1>
<h2>Summer Student Assistant Application Form</h2>
<form name="sapp"  method="post" action="form-action.php">
    <fieldset id="appform">
        <legend style="font-size: 17px;">Please fill out the application below and apply for review. All fields are required. </legend>
    <table id="apptable">
    <colgroup>
    <col id="first" style="width:100px;">
    <col id="second" style="width:350px;">
</colgroup>
    <tr>
        <td class="formScore">First Name:</td>
        <td class="formScore"><input type="text" name="firstname" size="20" maxlength="20" required></td>
    </tr>
    <tr>
        <td class="formScore">Last Name:</td>
        <td class="formScore"><input type="text" name="lastname" size="20" maxlength="20" required></td>
    </tr>
    <tr>
        <td class="formScore">
            <label>Citizenship:</label>
        </td>
        <td class="formScore">
           <select class="citizen" name="citizenship" required>
            <option value="U.S. Citizen">U.S. Citizen</option>
            <option value="Non U.S. Citizen">Legal Alien Allowed To Work</option>
           </select> 
        </td>
    </tr>
    <tr>
        <td class="formScore">Street Address:</td>
        <td class="formScore"><input type="text" name="address" size="30" maxlength="30" required></td>
    </tr>
    <tr>
        <td class="formScore">City:</td>
        <td class="formScore"><input type="text" name="city" size="20" maxlength="20" required></td>
    </tr>
    <tr>
        <td class="formScore">State:</td>
        <td class="formScore"><input type="text" name="state" size="2" maxlength="2" required></td>
    </tr>
    <tr>
        <td class="formScore">ZIP Code:</td>
        <td class="formScore"><input type="text" name="zipcode" size="5" maxlength="5" pattern="[0-9]{5}" required></td>
    </tr>
    <tr>
        <td class="formScore">Email:</td>
        <td class="formScore"><input type="email" name="email" size="30" maxlength="30" required></td>
    </tr>
    <tr>
        <td class="formScore">Phone Number:</td>
        <td class="formScore"><input type="text" name="phonenumber" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required size="12" maxlength="12"></td>
    </tr>
    <tr>
        <td class="formScore">Student Status:</td>
        <td class="formScore"><input type="radio" id="ugd" name="status" value="Undergraduate">
            <label for="ugd">Undergraduate</label>
            <input type="radio" id="gd" name="status" value="Graduate">
            <label for="gd">Graduate</label>
        </td>
    </tr>
    <tr>
        <td class="formScore">Days of the Week Available:</td>
        <td class="formScore">
            <input type="checkbox" name="availableday[]" value="Monday">Monday
            <input type="checkbox" name="availableday[]" value="Tuesday">Tuesday
            <input type="checkbox" name="availableday[]" value="Wednesday">Wednesday   
            <input type="checkbox" name="availableday[]" value="Thursday">Thursday
            <input type="checkbox" name="availableday[]" value="Friday">Friday
        </td>
    </tr>
    <tr>
        <td class="formScore">
            <label>Please enter any research related experience or professional experience below:</label>
        </td>
        <td class="formScore">
            <textarea name="experience" rows="8" cols="70" required></textarea>
        </td>
    </tr>
    <tr>
        <td class="formScore"><label>Submit Date:</label></td>
        <td class="formScore"><input type="date" id="submitday" name="submitday" required></td>
    </tr>
</table>
<br>
<div class="submit-wrapper">
<input type="submit" value="Submit">
</div> 
<br>
</fieldset>
</form>
<br>
  <?php include 'footer.php';?>    
</body>
</html>
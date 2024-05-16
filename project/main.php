<?php
require_once "config.php";

$name = $age = $state = $district = $email = $contactno = $bloodgroup = "";


if ($_SERVER['REQUEST_METHOD'] == "POST"){

   
   
        $name = trim($_POST['name']);
        $age = trim($_POST['age']);
        $state = trim($_POST['state']);
        $district = trim($_POST['district']);
        $email = trim($_POST['email']);
        $contactno = trim($_POST['contactno']);
        $bloodgroup = trim($_POST['bloodgroup']);
// If there were no errors, go ahead and insert into the database

    $sql = "INSERT INTO users (name, age, state, district, email, contactno, bloodgroup ) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "sisssis", $param_name, $param_age, $param_state, $param_district, $param_email, $param_contactno, $param_bloodgroup);

        // Set these parameters
        $param_name = $name;
        $param_age = $age;
        $param_state = $state;
        $param_district = $district;
        $param_email = $email;
        $param_contactno = $contactno;
        $param_bloodgroup = $bloodgroup;
        

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: display.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);

mysqli_close($conn);
}

?>





<link rel="stylesheet" href="styl.css"/>
<div id="form" >
    <br>BLOOD DONOR FORM</br>
<form action="" method="post" id="blood donor" >
<br>NAME : </br>
<input id="input" name="name"  ></input>
<br>AGE :</br>
<input placeholder="must be < 18" id="input" name="age"  ></input>  
<br>STATE : </br>
<input id="input" name="state"></input>
<br>DISTIRCT : </br>
<input id="input" name="district"></input>

  <br>EMAIL</br>
<label for="email"></label>
<input
            type="email"
            id="input"
            placeholder="Enter your email"
            name="email"
          
 />
 <br>CONTACT NO :</br>
 <input placeholder="phone no"id="input" name="contactno"></input>
<br>BLOOD GROUP : </br>

<input  id="input" name="bloodgroup" ></input>  


<br>ARE YOU ALLERGIC</br>
<label>
<input type="radio">YES </input>
<input type="radio">NO </input>
</label>


</div>

<div>
<button id="submit" type="submit">SUBMIT</button>
<div>
        <a class="nav-link" href="https://www.google.com/maps/d/u/0/edit?mid=1mlR-vRt9khDC8Voe2Ha-Our6pVxLat8&usp=sharing">KNOW PLACES ON MAPS WHERE YOU CAN DONOTE AND ACCEPT BLOOD </a>
      
</div>
</form>
<?php

function current_url()
{

    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $validURL = str_replace("&", "&amp;", $url);

    return $validURL;


}

echo current_url();
?>

</div>
<textarea id="text">Are YOU Eligible For Blood Donation?
<p>
Any healthy adult, both male and female, can donate blood. A healthy individual can safely donate one unit of blood, that is, 350 ml. Men can donate safely once in every three months while women can donate every four months. However, there are certain factors you need to fulfill to be considered as a donor.
</p>
Weight: The donor should not weigh less than 45 kgs

Pulse: The pulse rate of the donor should be normal (60 to 100 beats per minute)

Body temperature: Normal body temperature is  98.6°F (37°C)

Hemoglobin: It should not be less than 12.5 grams per deciliter

Blood pressure: Systolic and diastolic blood pressure should be within normal range (120/80 mm Hg)

Age: Donors should be in the age group of 18 – 65 years

Buy best Vitamin and Mineral Supplements at 1mg at affordable price

Who is NOT Eligible For Blood Donation?

You cannot donate blood if you

1. Suffer from common health problems such as cold, flu, sore throat, cold sore, stomach infection or any other infection.

2. Had any dental procedures done such as filling, cleaning or restoration (the day before the donation). If he had an extraction, surgery, root canal, crown, root planing, gum autograft or implant in the last three days before going for a blood donation.

3. Are diabetic and taking insulin injections to manage diabetes. However, if you have your blood glucose level under control with diet or oral medications, then you can donate blood.

4. Fall under high risk category such as have a history of genital ulcers, multiple sex partners or drug addictation.

5. Ever had an intravenous administration of drugs (even once).

6. Have hepatitis B, hepatitis C, tuberculosis, leprosy, human immuno-deficiency virus (HIV), heart disease, epilepsy, bleeding disorders, thalassemia, sickle cells anemia and cancer.

7. Have had shots for any of the conditions such as cholera, typhoid, diphtheria, tetanus, plague, gamma globulin in the past 15 days and rabies vaccination in the last 1 year.

8. Have any tattoos or acupuncture done in the last 12 months or have have had tattoo removal surgery in the last six months.

9. Have been treated for malaria in the last 3 months or are residing in malaria endemic areas from the last three years.

10. Are pregnant, have delivered within a year or are breastfeeding

Consult India’s best doctors here*
<p>
Do’s And Don’ts To Follow Before And After Blood Donation
</p>
Before you go for blood donation, here are few do’s and don’ts you need to keep in mind for a safe and healthy experience. </textarea>






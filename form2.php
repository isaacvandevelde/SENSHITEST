<?php
if (isset($_POST['submit'])) 
{
	try {
		$subjectname = "SENSHI ORDER";
		$destinataire = 'isaacvandevelde@icloud.com';
		$expediteur   = $_POST['email'];
		$name = $_POST['name'];
		
	
		$vnaam = $_POST['Voornaam'];
		$mobile = $_POST['mobile'];
		$street = $_POST['street'];
		$postalcode = $_POST['postalcode'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$card = $_POST['naampje'];
	
	
		$reponse      = $expediteur;
		 mail($destinataire,$subjectname,"ORDER: "."\r\n"."naam: ".$name."\r\n"."voornaam: ".$vnaam."\r\n"."mobile: ".$mobile."\r\n"."straat: ".$street."\r\n"."postcode: ".$postalcode."\r\n"."stad: ".$city."\r\n"."land: ".$country."\r\n"."kaart: ".$card, "From: $expediteur\r\nReply-To: $reponse");
		 
		header("location: index.html");
	} catch (\Throwable $th) {
		echo "<script>alert('mail not sent')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 300px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Contact Form</h2>
                    </div>
                    <p>Please fill in this form and submit so we can send you your product.</p>
					<form action="form2.html" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input id="name" for="name" type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>First name</label>
                            <input id="Voornaam" for="Voornaam" type="text" name="Voornaam" class="form-control"required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input id="email" for="email" type="email" name="email" class="form-control"required>
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input id="mobile" for="mobile" type="text" name="mobile" class="form-control"required>
						</div>
						  <div class="form-group">
                            <label>Street + house number</label>
                            <input id="street" for="street" type="text" name="street" class="form-control"required>
						</div>
						  <div class="form-group">
                            <label>postal code</label>
                            <input id="postalcode" for="postalcode" type="text" name="postalcode" class="form-control"    required>
						</div>
						  <div class="form-group">
                            <label>City</label>
                            <input id="city" for="city" type="text" name="city" class="form-control"required>
						</div>
						  <div class="form-group">
                            <label>country</label>
                            <input id="country" for="country" type="text" name="country" class="form-control"required>
						</div>
						  <div class="form-group">
                            <label>Name of cardholder/Paypal user</label>
                            <input id="naampje" for="naampje" type="text" name="naampje" class="form-control"required>
						    </div>
    	                
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

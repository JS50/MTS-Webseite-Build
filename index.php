<?php 

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$nachricht = $_POST['nachricht'];

	
	if (strlen($name) > 1) {
		if (strlen($email)  > 4) {
			if (strlen($nachricht) > 10) {
				$formcontent="Über das Kontaktformular von motoren-technik-schroeter.de: \n von: \n $name , $email \n\n Nachricht: \n $nachricht";
				$recipient = "info@motoren-technik-schroeter.de";
				$subject = "Kontaktformular motoren-technik-schroeter.de";
				$mailheader = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";
				mail($recipient, $subject, $formcontent, $mailheader); 
				
				echo '<script type="text/javascript" language="Javascript"> 
				window.location = "/#contact";
				alert("Vielen Dank! Ihre Nachricht wurde übermittelt und wir werden uns in Kürze bei Ihnen melden!");  
				</script> ';
			} elseif (strlen($nachricht) > 2000) {
				echo '<script type="text/javascript" language="Javascript"> 
				window.location = "/#contact";
				alert("Ihre Nachricht ist zu groß (Nachricht > 2000 Zeichen)!");  
				</script> ';
			} else {
				echo '<script type="text/javascript" language="Javascript"> 
				window.location = "/#contact";
				alert("Ihre Nachricht ist zu klein (Nachricht < 10 Zeichen)!");  
				</script> ';
			}
		} else {
			echo '<script type="text/javascript" language="Javascript"> 
			window.location = "/#contact";
			alert("Tragen Sie bitte ihre funktionierende Email Addresse ein!");  
			</script> ';
		}
	} else {
		echo '<script type="text/javascript" language="Javascript"> 
		window.location = "/#contact";
		alert("Kein Name gefunden!");  
		</script> ';
	}
	} 
else {
	echo '<script type="text/javascript" language="Javascript"> 
	window.location = "/#contact";
	alert("Leider gab es ein Problem. Bitte füllen Sie das Formular erneut aus.");  
	</script> ';
	}
?>
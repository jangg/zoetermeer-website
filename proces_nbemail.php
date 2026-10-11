<?php

if (isset($_POST['email'])) 
{
	 $message =  $_POST['email'] . ' wil graag de JHMZ nieuwsbrief ontvangen.';

	// Set your email address where you want to receive emails. 
	// $to = 'jang@jobhulpmaatjezoetermeer.nl';
	$subject = 'Aanvraag JHMZ nieuwsbrief';

	Tools::MailRoom ('Nieuwsbrief aanvraag', $_POST['email'], $subject, $message);
	
	Tools::MailRoom ('Nieuwsbrief aanvraag', 'secretaris@jobhulpmaatjezoetermeer.nl', $subject, $message);

}
header('location: index.php?res=suc#footer');
exit();
?>
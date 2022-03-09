
<!-- HTML top code goes here -->
<?
// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(
	'kathycake.com' // Put you mail domain here
	,
	'Kathys Cakes' // Put your site name / form name here
	,
	'Kathyzee60@gmail.com' // Where will the form notification be sent?
	,
	'forms@kathycake.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field
);
?>
<!-- HTML bottom code goes here -->
<p><strong><a href="adult.html" onClick="history.go(-1)">Back to form</a></strong></p>

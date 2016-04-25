<?php

$senderPhone   = $_POST['+61404085742'];    /*One user */
$messageText   = $_POST['Fresh air quality level'];      /*checking air quality level   */

$sent_dt       = $_POST['sc_2016-04-16'];      /* date and time when the message was sent, in the local time zone of the computer on which SMS Enabler is running */
$sent_dt_utc   = $_POST['sc_2016-04-16_05:42:55'];  /* date and time when the message was sent, in UTC */
                                             /* note: date and time values are expressed using "YYYY-MM-DD HH:MM:SS" format */

$smsc          = $_POST['+61'];      /* SMS center number */
$tag           = $_POST['tag'];       

$is_incomplete = $_POST['yes']; 
                                              /* "yes" - if the message is a multipart (concatenated) message and not all of its parts have arrived */
                                              /* "no"  - if the message is complete */


/* TODO: IMPLEMENT ANY PROCESSING HERE THAT YOU NEED TO PERFORM UPON RECEIPT OF A MESSAGE */



/* ---- Sending a reply SMS ---- */

// Setting the recipients of the reply. If not set, the reply is sent
// back to the sender of the origial SMS message
// header('X-SMS-To: +97771234567 +15550987654');


// Setting the content type and character set
header('Content-Type: text/plain; charset=utf-8');
// Comment the next line out if you do not want to send a reply
echo 'Reply message text';
?>

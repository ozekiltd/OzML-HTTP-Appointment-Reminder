How to make an Appointment Reminder with HTTP OzML
==============================

You can set an automatic reminder call before your appointments using the HTTP OzML. To do this, a simple, self-made application should send an HTTP request at the given time to the HTTP OzML.

Step 1: Generate a scheduler
==============================

Generate a scheduler (e.g. cron job) that calls your application in given periods of time (handleappointments.php).

Step 2: Develop an application for handling appointments
==============================

Develop the application that handles the list of the appointments, and in case of a need it sends an HTTP request to your application that initiates a call (caller.php) with the parameters of the event.

Step 3: Send the parameters of the call to the HTTP OzML Extension
==============================

Develop the application that is being called if an initiation of a reminder call is actual. The caller.php file is responsible for sending the parameters of the call to the HTTP OzML Extension.

Step 4: OzML Command for speak text to the caller
==============================

When the called person picks up the phone, the HTTP OzML Extension sends a request to the address of the previousUrl parameter. If a valid OzML script comes back from there, it executes the commands in it. You can see an example in the callconnected.php file. This example reads only one message to the called person with the datas of the appointment. Of course you can apply more complex OzML script, too. You can also see an example for that in the caller.php file.

Learn more
==============================
http://www.ozekiphone.com/appointment-reminder-with-http-ozml-1141.html

<?php
/**
 * Created by PhpStorm.
 * User: Vinayagam
 * Date: 12/10/15
 * Time: 2:30 PM
 */

include ('GCMPushMessage.php');
//216.154.217.186

$apiKey = "AIzaSyC8FrLV-YKaztQQbvfi5TVKBBrB59JTE6A";
$device = array('cMjnxChIAmE:APA91bH4Mzf5xRj7iwrYBBkpc9QBqKO3aBL3VNcFCo-qTrN7AJbDbieRWYDmhgZmy2RQ9szQDer1XHsH8ZdZ0I9KzxmvzBs1KGb-wvK-l_U0EuWhbVOBRdK0NtDd2WcKOem6ChndAsHg',
                'dDykZmH6aEg:APA91bHRjdlOhvYjKct2rLGqK1ux_wYI_-VHjGkzuAu8TP3l6gItlp_T99DUrnZeTYZRC6DhISniUbF3YCk9q3oLpuGx-m8kWAaZlNqHP3ZLgwzG1P5_HtyLG5i_nl1a5KwPthtc8D--');
$message = "
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

$gcmp  = new GCMPushMessage($apiKey);
echo "Welcome to Wattabyte ! :)";
$gcmp->setDevices($device);
$response = $gcmp->send($message,array('title' => "Happy Holly"));
echo $response;


?>
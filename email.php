<?PHP
include "../config.php";
$sql="SElECT * From client";
		$db = config::getConnexion();
		$liste=$db->query($sql);
$count = 1;
foreach($liste as $row){ 
    $email = $row['email_client'];
    $name = "hamhama's";
    $body = "vous êtes invités a nous rejoindre<br><br><a href='https://google.com'>Google</a>";
    $subject = "Test email";

    $headers = array(
        'Authorization: Bearer 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',
        'Content-Type: application/json'
    );

    $data = array(
        "personalizations" => array(
            array(
                "to" => array(
                    array(
                        "email" => $email,
                        "name" => $name
                    )
                )
            )
        ),
        "from" => array(
            "email" => "ziedghorbel.off@gmail.com"
        ),
        "subject" => $subject,
        "content" => array(
            array(
                "type" => "text/html",
                "value" => $body
            )
        )
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send")
    ;
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
    if ($count % 5 == 0) {
      sleep(5); // this will wait 5 secs every 5 emails sent, and then continue the while loop
    }
    $count++;
}
?>
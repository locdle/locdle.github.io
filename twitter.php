<html>
<?php
/**
 * Created by PhpStorm.
 * User: locle
 * Date: 12/7/14
 * Time: 1:51 PM
 */

sestion_start();
include("twitteroauth-master/twitteroauth/twitteroauth.php");
$apikey = "UIgGdmZubspeKrpmyV46nRr6z";
$apisecret = "4lrai5yCU7xHmfzAUCNll8Jt1aPjFEpc4uLqJ2FHpAK8aD1RvO";
$accesstoken = "489748244-A6sXY7TXMPHJ8j7ZvfWymqC69j7wcBNgb42I3Pb0";
$accesssecret = "6BBNaIdAcIYyjsdAMm9ohfZt514ju562lGlcFM0w7sF9j";

$connection = new TwitterOAuth($apikey, $apisecret, $apitoken, $accesssecret);

print_r($connection);
?>
</html>
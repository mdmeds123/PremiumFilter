$long_url = urlencode('yourdestinationlink.com');
$api_token = 'bd99e74cac08dd7b2121ac7443a17129fde0a111';
$api_url = "https://paid4link.com/api?api={$api_token}&url={$long_url}&alias=CustomAlias";
$result = @json_decode(file_get_contents($api_url),TRUE);
if($result["status"] === 'error') {
 echo $result["message"];
} else {
 echo $result["shortenedUrl"];
}


<?php 

Class BrowserIDLogin {
  public static function Login($assertion){
    $url = "https://browserid.org/verify";
    $data = array(
      'assertion'=>$assertion,
      'audience'=>'localhost'
    );
    return do_post_request($url, $data);
  } 
}

function do_post_request($url, $data, $optional_headers = null)
{
  $data_string = http_build_query($data);

  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_POST,count($data));
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data_string);
  $result = curl_exec($ch);
  $info = curl_getinfo($ch);

  curl_close($ch);

  return '';
}
?>

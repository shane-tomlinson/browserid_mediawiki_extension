
<?php 

Class BrowserIDVerify {
  public static function login($audience, $assertion) {
    $url = "https://browserid.org/verify";
    $data = array(
      'audience'=>$audience,
      'assertion'=>$assertion
    );
    return BrowserIDVerify::do_post_request($url, $data);
  }

  private static function do_post_request($url, $data) {
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

}

?>

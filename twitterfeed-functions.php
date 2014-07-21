<?php
// function twitter_check_field( $field ) {
//   if ( ( isset($field) && $field != '') ){
//     return true;
//   } else {
//     return false;
//   }
//
// }
// /* Store Transient On Updates */
// function store_twitter_feed($endpoint, $count, $username, $cache_key) {
//   if(get_option('acf_twitter')) {
//     require_once('tmhOAuth.php');
//     $apikeys = get_option('acf_twitter');
//     $api_key      = $apikeys['api_key'];
//     $api_secret   = $apikeys['api_secret'];
//     $token        = $apikeys['token'];
//     $token_secret = $apikeys['token_secret'];
//     $tmhOAuth = new tmhOAuth(array(
//      'consumer_key' => $api_key,
//      'consumer_secret' => $api_secret,
//      'user_token' => $token,
//      'user_secret' => $token_secret,
//      'curl_ssl_verifypeer' => false
//     ));
//
//     $code = $tmhOAuth->request('GET', $tmhOAuth->url('1.1/'.$endpoint), array(
//     'screen_name' => $username,
//     'count' => $count));
//     $data = $tmhOAuth->response['response'];
//
//     //$data_query = http_build_query($data_arr) . "\n";
//     // $url = 'https://api.twitter.com/1.1/'.trim($endpoint, "/").'?'.$data_query;
//
//     if($data) {
//       $response = json_decode(trim(preg_replace('/\s\s+/', ' ', $data)), true);
//       set_transient($cache_key, $response, 60 * 60 * 6 ); //6 hours
//     } else {
//
//     }
//   } else {
//
//   }
//
// }
//
//
// function get_twitter_response($cache_key) {
//   $result = get_transient($cache_key);
//   if ( empty( $result ) ){
//     $result = 'empty';
//   } else {
//     $response = get_transient($cache_key);
//     $result = json_encode($response);
//     //$result = json_encode($response);
//
//   }
//   return $result;
// }
//
//
// /* Adds Tweet HTML to custion field */
// function get_tweet_html($cache_key) {
//   $result = get_transient($cache_key);
//   if ( empty( $result ) ){
//     return;
//   } else {
//     $response = get_transient($cache_key);
//     $tweets = $response;
//     $var = preg_replace("/([\w]+\:\/\/[\w-?&;#~=\.\_\/\@]+[\w\/])/", "<a target=\"_blank\" href=\"$1\">$1</a>", $tweets[0]['text']);
//     $var = preg_replace("/#([A-Za-z0-9\/\.]*)/", "<a target=\"_blank\" href=\"http://twitter.com/search?q=$1\">#$1</a>", $var);
//     $var = preg_replace("/@([A-Za-z0-9\/\.\_]*)/", "<a href=\"http://www.twitter.com/$1\">@$1</a>", $var);
//     $var = preg_replace('/\xEE[\x80-\xBF][\x80-\xBF]|\xEF[\x81-\x83][\x80-\xBF]/', '', $var); // check for emojis
//     $output = $var;
//     return $var;
//   }
//
// }
//
// // /* View the feed in Admin */
// function display_tweets($cache_key) {
//   if ( false === ( $value = get_transient($cache_key) ) ) {
//     echo $cache_key. 'Not Found';
//   } else {
//     $response = get_transient($cache_key);
//     $tweets = $response;
//     if($tweets){
//       $cnt=0;
//       foreach($tweets as $item):
//           $cnt++;
//           echo '<div class="thumbnail">';
//             echo '<div class="inner clearfix">';
//           $var = preg_replace("/([\w]+\:\/\/[\w-?&;#~=\.\_\/\@]+[\w\/])/", "<a target=\"_blank\" href=\"$1\">$1</a>", $item['text']);
//           $var = preg_replace("/#([A-Za-z0-9\/\.]*)/", "<a target=\"_blank\" href=\"http://twitter.com/search?q=$1\">#$1</a>", $var);
//           $var = preg_replace("/@([A-Za-z0-9\/\.\_]*)/", "<a href=\"http://www.twitter.com/$1\">@$1</a>", $var);
//           $var = preg_replace('/\xEE[\x80-\xBF][\x80-\xBF]|\xEF[\x81-\x83][\x80-\xBF]/', '', $var); // check for emojis
//           $output = $var;
//             echo '<p>'.$output.'</p>';
//             if (is_array($item['entities']['media'])){
//               foreach($item['entities']['media'] as $media):
//                 //echo '<div style="background-image:url('.$media['media_url'].'); height:250px;max-width: 250px;"><img src="'.$media['media_url'].':small"></div>';
//                 echo '<img src="'.$media['media_url'].':small">';
//               endforeach;
//
//             }
//             echo '<p>'.date("Y.m.d - h:i",$item['created_at']).'</p>';
//             echo '</div>';
//           echo '</div>';
//           echo (($cnt % 4) == 0) ? '<div class="clearfix"></div>' : '';
//       endforeach;
//     } else {
//       echo 'no images :( <br>';
//       echo '<pre>';
//       print_r($response);
//       echo '</pre>';
//     }
//   }
// }
?>

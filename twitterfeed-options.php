<?php
add_action( 'admin_init', 'twitterfeed_register_settings' );
add_action( 'admin_menu', 'twitterfeed_register_options_page');
function twitterfeed_register_settings() {
  // add_option( 'twitter_api_key', null);
  // add_option( 'twitter_api_secret', null);
  // add_option( 'twitter_token', null);
  // add_option( 'twitter_token_secret', null);
  register_setting( 'acf_twitterfeed_options', 'acf_twitter' );
  // register_setting( 'twitterfeed_options', 'acf_twitter_api_secret' );
  // register_setting( 'twitterfeed_options', 'acf_twitter_token' );
  // register_setting( 'twitterfeed_options', 'acf_twitter_token_secret' );
}


function twitterfeed_register_options_page() {
  add_options_page('ACF Twitter Feed', 'ACF Twitter Feed', 'manage_options', 'twitterfeed_options', 'twitterfeed_options_page');
}


function twitterfeed_options_page() {
?>

<style type="text/css">
  .twitter_class {
    min-width: 350px
  }
</style>
<div class="wrap">
  <?php screen_icon(); ?>
  <h2>Your ACF twitter Options</h2>
  <form method="post" action="options.php">
    <?php settings_fields('acf_twitterfeed_options'); ?>
    <?php $options = get_option('acf_twitter'); ?>
    <h3>Your App's API info from twitter</h3>
    <table class="form-table">
      <tr valign="top">
        <th scope="row"><label for="acf_twitter_api_key">API Key</label></th>
        <td><input type="text" class="twitter_class" id="acf_twitter_api_key" name="acf_twitter[api_key]" value="<?php echo $options['api_key']; ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row"><label for="acf_twitter_api_secret">API Secret</label></th>
        <td><input type="text" class="twitter_class" id="acf_twitter_api_secret" name="acf_twitter[api_secret]" value="<?php echo $options['api_secret']; ?>" /></td>
      </tr>
    </table>
    <hr>
    <p>You will need to generate these by going here: <a href="https://apps.twitter.com/" target="_blank">apps.twitter.com</a>, and creating an App.</p>
    <table class="form-table">
      <tr valign="top">
        <th scope="row"><label for="acf_twitter_token">Token</label></th>
        <td><input type="text" class="twitter_class" id="acf_twitter_token" name="acf_twitter[token]" value="<?php echo $options['token']; ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row"><label for="acf_twitter_token_secret">Token Secret</label></th>
        <td><input type="text" class="twitter_class" id="acf_twitter_token_secret" name="acf_twitter[token_secret]" value="<?php echo $options['token_secret']; ?>" /></td>
      </tr>
    </table>
    <?php submit_button(); ?>
  </form>
</div>
<?php
}
?>

<?php
/**
 * Created by PhpStorm.
 * User: justin
 * Date: 1/26/16
 * Time: 2:18 PM
 */
$analytics_id = zentheme_get_option('zen_analytics_id');
?>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo $analytics_id; ?>', 'auto');
  ga('send', 'pageview');

</script>
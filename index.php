<?php
require('lib/print.php');
?>
<!doctype html>
<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112173916-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-112173916-1');
</script>
  <title>
    <?php
    print_title();
    ?>
</title>
  <meta charset="utf-8">
  <meta charset="viewport" content="width=device-width,initial-scale=1.0">
</head>
<link rel="stylesheet" type="text/css "href="https://jiwooodury.github.io/i-love-my-family/a.css">
  <h1><a href="index.php">my family</a></h1>
<body>
  <div id="div">
  <ol>
    <?php
    print_list();
    ?>
  </ol>
  <div id=article>
  <h2>
    <?php
      print_title();
      ?>
  </h2>
  <img src="jpg/family.jpg">
  <p>
    <?php
    print_description();
    ?>
  </p>
   <h4><p><a href="create.php">create</a></p>
    <?php if(isset($_GET['id'])) { ?>
      <p><a href="update.php?id=<?=$_GET['id']?>">update</a></p>
      <p><form action="delete_process.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" value="delete"></p>
      </form>
    <?php } ?> </h4>
</div>
    <p><div id="disqus_thread"></div>
<script>
/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://http-192-168-219-145-our-family-html.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</p>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a544ae2d7591465c7068eca/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>

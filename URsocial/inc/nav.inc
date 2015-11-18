    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">UR Social</a>
<?php
$cookie_name = 'phpCookieName';
if(isset($_COOKIE[$cookie_name])) {

print '<p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">' .$_COOKIE[$cookie_name] .'</a></p>';

} else {

print '<p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">You are not logged in</a></p>';

}
?>
        </div>
      </div>
    </nav>
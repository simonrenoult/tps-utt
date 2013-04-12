<fieldset>
  <legend>GET</legend>
  <?php var_dump( $_GET ); ?>
</fieldset>

<fieldset>
  <legend>POST</legend>
  <?php var_dump( $_POST ); ?>
</fieldset>

<fieldset>
  <legend>COOKIE</legend>
  <?php var_dump( $_COOKIE ); ?>
</fieldset>

<fieldset>
  <legend>REQUEST</legend>
  <?php var_dump( $_REQUEST ); ?>
</fieldset>

<fieldset>
  <legend>SESSION</legend>
  <?php echo isset ( $_SESSION ) ? var_dump( $_SESSION ) : "No session." ; ?>
</fieldset>
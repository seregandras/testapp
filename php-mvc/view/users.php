<p>Here is a list of all the users:</p>

<?php foreach($users as $user) { ?>
  <p>
    <?php echo $user->name; ?>
  </p>
<?php } ?>
<p>Here is a list of all the advertisements</p>

<?php foreach($advertisements as $advertisement) { ?>
  <p>
    <?php echo $advertisement->title; ?>
    <?php echo $advertisement->user_id; ?>
  </p>
<?php } ?>
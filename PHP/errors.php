<?php  if (count($errors) > 0) : ?>
    <div style="width: 100%;text-align: left;color: red; padding-left: 1em">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php  endif ?>

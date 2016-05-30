<?php slot('title') ?>
<?php echo sprintf('%s is looking for a %s', $JobeetJob->getCompany(), $JobeetJob->getPosition()) ?>
<?php end_slot(); ?>
<div class="tab_grid">
  <dl class="experience">
    <div class="experience_content">
      <div class="experience_period"> Type:</span><span><?php echo $JobeetJob->getType() ?></span></div>
    </div>
    <div class="experience_content">
      <div class="experience_period">Company:</span><span><?php echo $JobeetJob->getCompany() ?></span></div>
      <div class="experience_period"><span>Logo:</span><span><?php echo $JobeetJob->getLogo() ?></span></div>
    </div>
    <div class="experience_content">
      <div class="experience_period"><span>Position:</span><span><?php echo $JobeetJob->getPosition() ?></span></div>
    </div>
    <div class="experience_content">
      <div class="experience_period"><span> Location:</span><span><?php echo $JobeetJob->getLocation() ?></span></div>
      <div class="experience_1"><dt><h6>Description:</h6></dt>
        <dd>
          <p><?php echo $JobeetJob->getDescription() ?></p>
        </dd></div>
    </div>
    <div class="experience_content">
      <div class="experience_period"><span>How to apply:</span><span><?php echo $JobeetJob->getHowToApply() ?></span></div>
    </div>
    <div class="experience_content">
      <div class="experience_period"><span>Expires at:</span><span><?php echo $JobeetJob->getExpiresAt('d/m/Y') ?></span></div>
    </div>
  </dl>
<hr />

<a href="<?php echo url_for('job/edit?id='.$JobeetJob->getId()) ?>" class="btn btn-success">Edit</a>
&nbsp;
<a href="<?php echo url_for('job/index') ?>" class="btn btn-default">List</a>
</div>
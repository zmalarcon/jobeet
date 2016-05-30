<h1>JobeetJobs List</h1>

<div class="tab_grid">
    <?php foreach ($categories as $category): ?>
    <div class="category_<?php echo Jobeet::slugify($category->getName()) ?>">
        <div class="category">
            <div class="feed">
                <a href="">Feed</a>
            </div>
            <h1><?php echo $category ?></h1>
        </div>
        <table class="table table-responsive">
            <tbody>
              <?php foreach ($JobeetJobs as $JobeetJob): ?>
              <tr>
                <td><?php echo link_to($JobeetJob->getPosition(), 'job_show_user', $JobeetJob) ?></td>
                <td><?php echo $JobeetJob->getLocation() ?></td>
                <td><?php echo $JobeetJob->getCompany() ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
        </table>
        <?php endforeach; ?>
        <a href="<?php echo url_for('job/new') ?>" class="btn btn-primary">New</a>
        <div class="clearfix"> </div>
</div>
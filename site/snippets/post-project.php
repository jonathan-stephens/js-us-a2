<div class="e-content prose" itemprop="articleBody">
  <section class="overview">
    <div class="summary">
      <h2>Overview</h2>
      <?= $page->overview()->kt() ?>
    </div>
    <aside>
      <ul>
        <?php if(!$page->role()->isEmpty()): ?>
        <li>
          <span class="label">Role</span>
          <span class="content"><?= $page->role()->html() ?></span>
        </li>
        <?php endif ?>
        <?php if(!$page->client()->isEmpty()): ?>
        <li>
          <span class="label">Client</span>
          <span class="content"><?= $page->client()->html() ?></span>
        </li>
        <?php endif ?>
        <?php if(!$page->principal()->isEmpty()): ?>
        <li>
          <span class="label">Principal</span>
          <span class="content"><?= $page->principal()->html() ?></span>
        </li>
        <?php endif ?>
        <?php if(!$page->stakeholders()->isEmpty()): ?>
        <li>
          <span class="label">Key Stakeholders</span>
          <span class="content"><?= $page->stakeholders()->html() ?></span>
        </li>
        <?php endif ?>
        <?php if(!$page->dateFrom()->isEmpty()): ?>
        <li>
          <span class="label">Dates</span>
          <span class="content">
            <time class="dt-start dtstart" datetime="<?= $page->dateFrom() ?>" itemprop="startDate"><?= $page->dateFrom()->toDate('M Y') ?></time> – <?php if($page->dateTo()->isNotEmpty()): ?><time class="dt-end dtend" datetime="<?= $page->dateTo() ?>" itemprop="endDate"><?= $page->dateTo()->toDate('M Y') ?></time><?php else : ?>present<?php endif ?>
          </span>
        </li>
        <?php endif ?>
        <?php if(!$page->skills()->isEmpty()): ?>
        <li>
          <span class="label">Skills</span>
          <span class="skills">
            <?php  $skills = $page->skills()->split(); foreach ($skills as $key => $skill): ?><span rel="tag" class="p-category"><?= $skill ?></span><?php if ($key < count($skills) - 1): ?>, <?php endif ?><?php endforeach ?>
          </span>
        </li>
      <?php endif ?>
    </ul>
    </aside>
  </section>
  <section class="contribution">
    <h2>Contribution</h3>
    <?= $page->contribution()->kt() ?>
    <h3>Client</h3>
    <?= $page->aboutClient()->kt() ?>
  </section>


  <?php if(!$page->objectives()->isEmpty()): ?>
  <section>
    <div class="objectives">
      <h2>Objectives</h2>
      <p>
        <?= $page->objectives()->html() ?>
      </p>
    </div>
    <div class="results">
      <h2>Results</h2>
      <p>
        <?= $page->results()->html() ?>
      </p>
    </div>
  </section>
  <?php endif?>



  <section class="artifacts">
    <?= $page->text()->footnotes() ?>
  </section>

  <?php if ($details = $page->children()->findBy('slug', 'details')): ?>
  <div class="cta flow">
    <h3>Want more details?</h3>
    <a href="<?= $details->url() ?>" class="button case-details">Read the full case study</a>
  </div>
  <?php endif ?>

</div>

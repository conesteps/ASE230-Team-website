<div class="resume-section-content">
    <div class="resume-timeline position-relative">
        <?php if (!empty($member['jobexperience'])): ?>
            <?php foreach ($member['jobexperience'] as $job): ?>
                <article class="resume-timeline-item position-relative pb-5">
                    <div class="resume-timeline-item-header mb-2">
                        <div class="d-flex flex-column flex-md-row">
                            <h3 class="resume-position-title font-weight-bold mb-1"><?= $job['job_title'] ?></h3>
                            <div class="resume-company-name ms-auto"><?= $job['company'] ?></div>
                        </div>
                        <div class="resume-position-time"><?= $job['start_date'] ?> - <?= $job['end_date'] ?></div>
                    </div>
                    <div class="resume-timeline-item-desc">
                        <p><?= $job['description'] ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No job experience available.</p>
        <?php endif; ?>
    </div>
</div>
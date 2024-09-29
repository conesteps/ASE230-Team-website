<?php
function displayMemberCard($member, $index) {
    ?>
		<div class="member-card">
            <img src="<?= $member['image'] ?>" alt="<?= $member['firstname'] . ' ' . $member['lastname'] ?>" />
            <h1><?= $member['firstname'] . ' ' . $member['lastname'] ?></h1>
			<p><?= "Age: " . ageFinder($member['birthdate']) ?></p>
            <p><?= $member['bio'] ?></p>
            <a href="detail.php?index=<?= $index ?>">Learn more about <?= $member['firstname'] ?></a>
        </div>
        <hr />
    <?php
}
?>

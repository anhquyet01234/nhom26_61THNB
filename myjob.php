<?php

if (isset($_GET['user_id'])) {
    $userId = $_GET['user_id'];
    $sql = "Select jobs.* from users join job_assign ON users.id = job_assign.user_id join jobs ON job_assign.job_id = jobs.id WHERE users.id = $userId;";
    $results = mysqli_query($conn, $sql);
}

?>

<div class="col-md-8">
    <div>
        <div class="Create-job">
            <i class="fas fa-check"></i> Công việc bạn đã nhận
        </div>
    </div>
    <div class="job-content mb-5">
        <?php $item = 0;
        foreach ($results as $item) {
            $item++; ?>
            <div class="item-job Underline">
                <div class="JobSearchCard-primary">
                    <div class="job-title">
                        <?php echo ($item['title']) ?>
                    </div>
                    <p class="job-short-des">
                        <?php echo ($item['des']) ?>
                    </p>
                    <div class="JobSearchCard-primary-tags">
                        <span class="JobSearchCard-primary-tagsLink"><i class="fas fa-map-marker-alt"></i> <?php echo ($item['location']) ?></span>
                        <span class="JobSearchCard-primary-tagsLink"><i class="fas fa-user-graduate"></i> <?php echo ($item['degree']) ?></span>
                        <span class="JobSearchCard-primary-tagsLink"><i class="fas fa-briefcase"></i> <?php echo ($item['type']) ?></span>
                    </div>
                </div>
                <div class="JobSearchCard-secondary">
                    <div class="JobSearchCard-secondary-price">
                        <?php echo ($item['salary']) ?>
                        <span class="JobSearchCard-secondary-avgBid">
                            Giá đặt trung bình </span>
                    </div>
                    <div class="JobSearchCard-secondary-entry"><?php echo ($item['recruitment_count']) ?> lượt nhận việc</div>
                    <div class="JobSearchCard-secondary-entry">Ngày Tạo: <?php echo date("Y-m-d", strtotime($item['created_at'])) ?></div>
                    <div class="JobSearchCard-secondary-entry">Hết Hạn: <?php echo date("Y-m-d", strtotime($item['expired_at'])) ?></div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
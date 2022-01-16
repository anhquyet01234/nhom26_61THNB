<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM jobs where id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $idUpdate = $row['id'];
            $title = $row['title'];
            $salary = $row['salary'];
            $degree = $row['degree'];
            $type = $row['type'];
            $location = $row['location'];
            $des = $row['des'];
            $expired_at = $row['expired_at'];
        }
    }
}

?>

<div class="col-md-8">
    <div class="row">
        <div class="col-md-12">
            <form action="main.php" method="POST">
                <?php if (isset($result)) { ?>
                    <input type="hidden" name="id" value="<?php echo $idUpdate ?>">
                <?php } ?>
                <div class="avatar d-flex">
                    <img width="20%" style="border-radius: 50%; margin-right: 2rem" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHUvOd8Q-VihyupbJCdgjIR2FxnjGtAgMu3g&usqp=CAU">
                    <div class="mt-5">
                        <button type="button" class="btn btn-outline-primary">Tải lên</button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label><b>Tên đầy đủ</b></label>
                        <input type="text" name="title" placeholder="Name" <?php if (isset($result)) { ?> value="<?php echo $title ?>" <?php } ?> required>
                    </div>
                    <div class="col-md-6">
                        <label><b>Tuổi</b></label>
                        <input type="text" name="salary" placeholder="Tuổi" <?php if (isset($result)) { ?> value="<?php echo $salary ?>" <?php } ?> required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label><b>Bằng cấp</b></label>
                        <select name="degree" <?php if (isset($result)) { ?> value="<?php echo $degree  ?>" <?php } ?>>
                            <option value="Không yêu cầu bằng cấp">Không yêu cầu bằng cấp</option>
                            <option value="Bằng cấp 3">Bằng cấp 3</option>
                            <option value="Bằng đại học">Bằng đại học</option>
                            <option value="Bằng thạc sỹ">Bằng thạc sỹ</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label><b>Địa chỉ</b></label>
                        <select name="location"<?php if (isset($result)) { ?> value="<?php echo $location  ?>" <?php } ?>>
                            <option value="Tất cả địa điểm">Tất cả địa điểm</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                            <option value="Đà Nẵng">Đà Nẵng</option>
                            <option value="Cần Thơ">Cần Thơ</option>
                            <option value="Hải Phòng">Hải Phòng</option>
                            <option value="An Giang">An Giang</option>
                            <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                            <option value="Bắc Giang">Bắc Giang</option>
                            <option value="Bắc Kạn">Bắc Kạn</option>
                            <option value="Bạc Liêu">Bạc Liêu</option>
                            <option value="Bắc Ninh">Bắc Ninh</option>
                            <option value="Bến Tre">Bến Tre</option>
                            <option value="Bình Định">Bình Định</option>
                            <option value="Bình Dương">Bình Dương</option>
                            <option value="Bình Phước">Bình Phước</option>
                            <option value="Bình Thuận">Bình Thuận</option>
                            <option value="Cà Mau">Cà Mau</option>
                            <option value="Cao Bằng">Cao Bằng</option>
                            <option value="Đắk Lắk">Đắk Lắk</option>
                            <option value="Đắk Nông">Đắk Nông</option>
                            <option value="Điện Biên">Điện Biên</option>
                            <option value="Đồng Nai">Đồng Nai</option>
                            <option value="Đồng Tháp">Đồng Tháp</option>
                            <option value="Gia Lai">Gia Lai</option>
                            <option value="Hà Giang">Hà Giang</option>
                            <option value="Hà Nam">Hà Nam</option>
                            <option value="Hà Tĩnh">Hà Tĩnh</option>
                            <option value="Hải Dương">Hải Dương</option>
                            <option value="Hậu Giang">Hậu Giang</option>
                            <option value="Hòa Bình">Hòa Bình</option>
                            <option value="Hưng Yên">Hưng Yên</option>
                            <option value="Khánh Hòa">Khánh Hòa</option>
                            <option value="Kiên Giang">Kiên Giang</option>
                            <option value="Kon Tum">Kon Tum</option>
                            <option value="Lai Châu">Lai Châu</option>
                            <option value="Lâm Đồng">Lâm Đồng</option>
                            <option value="Lạng Sơn">Lạng Sơn</option>
                            <option value="Lào Cai">Lào Cai</option>
                            <option value="Long An">Long An</option>
                            <option value="Nam Định">Nam Định</option>
                            <option value="Nghệ An">Nghệ An</option>
                            <option value="Ninh Bình">Ninh Bình</option>
                            <option value="Ninh Thuận">Ninh Thuận</option>
                            <option value="Phú Thọ">Phú Thọ</option>
                            <option value="Quảng Bình">Quảng Bình</option>
                            <option value="Quảng Nam">Quảng Nam</option>
                            <option value="Quảng Ngãi">Quảng Ngãi</option>
                            <option value="Quảng Ninh">Quảng Ninh</option>
                            <option value="Quảng Trị">Quảng Trị</option>
                            <option value="Sóc Trăng">Sóc Trăng</option>
                            <option value="Sơn La">Sơn La</option>
                            <option value="Tây Ninh">Tây Ninh</option>
                            <option value="Thái Bình">Thái Bình</option>
                            <option value="Thái Nguyên">Thái Nguyên</option>
                            <option value="Thanh Hóa">Thanh Hóa</option>
                            <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                            <option value="Tiền Giang">Tiền Giang</option>
                            <option value="Trà Vinh">Trà Vinh</option>
                            <option value="Tuyên Quang">Tuyên Quang</option>
                            <option value="Vĩnh Long">Vĩnh Long</option>
                            <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                            <option value="Yên Bái">Yên Bái</option>
                            <option value="Phú Yên">Phú Yên</option>
                            <option value="Nước Ngoài">Nước Ngoài</option>
                            <option value="Khác">Khác</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label><b>Giới tính</b></label>
                        <select name="type" <?php if (isset($result)) { ?> value="<?php echo $type  ?>" <?php } ?>>
                            <option value="Bán thời gian">Nam</option>
                            <option value="Toàn thời gian">Nữ</option>
                            <option value="Toàn thời gian">Khác</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label><b>Ngày sinh</b></label>
                <input type="date" id="expired_at" name="expired_at" required <?php if (isset($result)) { ?> value="<?php echo date("Y-m-d", strtotime($expired_at)) ?>" <?php } ?>>
                    </div>
                </div>
                <label class="mt-4"><b>Mô tả kinh nghiệm đạt được</b></label>
                <textarea placeholder="Mô tả" name="des" cols="30" rows="10" class="mt-3" required><?php if (isset($result)) { ?> <?php echo $des  ?> <?php } ?></textarea>

                <div class="text-center">
                    <?php if (isset($result)) { ?>
                        <a href="main.php?deleteId=<?php echo $id ?>">Xóa công việc</a><br>
                        <button type="submit" href="/" class="btn btn-warning mt-3 mb-3">Cập nhật</button> 
                    <?php } else { ?>
                        <button type="submit" href="/" class="btn btn-success mt-3 mb-3">Tạo Hồ sơ</button>
                    <?php } ?>
                </div>
            </form>
        </div>
    </div>
</div>
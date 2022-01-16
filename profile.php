<?php
$userId = $_SESSION['userId'];
$sql = "SELECT id, username, email FROM users where id = $userId";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $userId = $row['id'];
        $userName = $row['username'];
        $email = $row['email'];
    }
}


$sql = "SELECT * FROM jobs ORDER BY created_at DESC";
$results = mysqli_query($conn, $sql);
?>


<div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="wide_column">
                                <img width="100%" src="https://vk.com/images/camera_200.png">
                                <div class="just-content__game">
                                    <a href="">
                                        <span class="FlatButton__content">
                                            Hiệu chỉnh
                                          </span>
                                    </a>
                                </div>
                                <div class="PageActionCell__icon mt-3">
                                    <svg fill="none" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path clip-rule="evenodd" d="M12 7.1a.9.9 0 01.9.9v3.73l2.24 2.23a.9.9 0 11-1.28 1.28l-2.5-2.5a.9.9 0 01-.26-.64V8a.9.9 0 01.9-.9z" fill-rule="evenodd"></path><path d="M19 5a9.87 9.87 0 00-7-2.9 9.87 9.87 0 00-7.1 3V3a.9.9 0 00-1.8 0v4a.9.9 0 00.9.9h4a.9.9 0 000-1.8H6.45A8.07 8.07 0 0112 3.9c2.24 0 4.26.9 5.73 2.37A8.07 8.07 0 0120.1 12c0 2.24-.9 4.26-2.37 5.73A8.07 8.07 0 0112 20.1a8.06 8.06 0 01-5.2-1.9.9.9 0 00-1.16 1.39A9.86 9.86 0 0012 21.9a9.87 9.87 0 009.9-9.9c0-2.73-1.1-5.21-2.9-7z"></path></g>
                                    </svg>
                                    <span class="ml-1">Ký ức</span>
                                </div>
                                <div class="PageActionCell__icon mt-2">
                                    <svg fill="none" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M17.8 3.1a4.5 4.5 0 012.35.44 3.17 3.17 0 011.31 1.31c.3.57.42 1.11.44 2.1V12a.9.9 0 01-1.8.11V8.9H3.9v5.9c0 .87.06 1.18.23 1.5.13.25.32.44.57.57.3.16.58.22 1.31.23H18.83l-1.47-1.46a.9.9 0 01-.08-1.18l.08-.1a.9.9 0 011.18-.08l.1.08 3 3a.9.9 0 01.08 1.18l-.08.1-3 3a.9.9 0 01-1.36-1.18l.08-.1 1.47-1.46H6.2c-1.07 0-1.65-.1-2.21-.37l-.14-.07a3.17 3.17 0 01-1.32-1.31 4.2 4.2 0 01-.44-2.1V7.21c0-1.16.11-1.74.44-2.35a3.17 3.17 0 011.31-1.32c.57-.3 1.11-.42 2.1-.44h.25zm0 1.8H6.2c-.88 0-1.18.06-1.5.23-.25.13-.44.32-.57.57-.16.3-.22.58-.23 1.31v.09h16.2v-.09c-.01-.73-.07-1.02-.23-1.3a1.37 1.37 0 00-.57-.58c-.3-.16-.58-.22-1.31-.23z" fill="currentColor"></path>
                                    </svg>
                                    <span class="ml-1">Chuyển tiền</span>
                                </div>
                            </div>

                            <div class="wide_column mt-3 d-flex justify-between">
                                <div class="">
                                    <img class="TopNavBtn__profileImg" src="https://vk.com/images/camera_50.png">
                                    <span class="ml-1">Hãy tải hình ảnh</span>
                                </div>
                                <div class="">
                                    <svg xmlns='http://www.w3.org/2000/svg' width='30' viewBox='0 0 53.7 53.7'><path opacity='.6' fill='%23666E6E' d='M35.6 34.4L28 26.8l7.6-7.6c.2-.2.2-.5 0-.7l-.5-.5c-.2-.2-.5-.2-.7 0l-7.6 7.6-7.5-7.6c-.2-.2-.5-.2-.7 0l-.6.6c-.2.2-.2.5 0 .7l7.6 7.6-7.6 7.5c-.2.2-.2.5 0 .7l.5.5c.2.2.5.2.7 0l7.6-7.6 7.6 7.6c.2.2.5.2.7 0l.5-.5c.2-.2.2-.5 0-.7z'/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="wide_column">
                                <div class="page_top">
                                    <div class=" d-flex justify-between">
                                        <h1 class="page_name"><?php if (isset($userName)) { ?> <?php echo $userName  ?> <?php } ?></h1>
                                        <span>hôm nay lúc 9:26 đã ghé thăm</span>
                                    </div>
                                    <span>thiết lập trạng thái</span>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <span>Ngày sinh nhật:</span>
                                    </div>
                                    <div class="col-md-9">
                                        <p>29 7 1999</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Thành phố:</span>
                                    </div>
                                    <div class="col-md-9">
                                        <p>
                                            Hà Nội</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <span>Giáo dục:</span>
                                    </div>
                                    <div class="col-md-9">
                                        <p>ĐH Khoa học Tự nhiên Hà Nội (Hanoi University of Natural Science) '18</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wide_column d-flex justify-between mt-3">
                                <div class="wide_column-item">
                                    <a href="" class="TopNavBtn__profileLink">
                                        <img class="TopNavBtn__profileImg camera" src="https://vk.com/images/camera_50.png">
                                    </a>
                                    <span>
                                        Bạn có gì mới không ?
                                    </span>
                                </div>
                                <div class="wide_column-item">
                                    <span class="MediaSelector__mediaIcon">
                                        <svg fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg" style="justify-content: space-between;"><path clip-rule="evenodd" d="M5.5 5.5c.57 0 1-.2 1.34-.52.24-.24.43-.54.55-.74l.06-.1c.15-.23.26-.37.39-.47.11-.08.3-.17.66-.17h3c.36 0 .55.09.66.17.13.1.24.24.4.48l.05.09c.12.2.3.5.55.74.33.32.77.52 1.34.52.73 0 .99 0 1.19.04.9.18 1.59.88 1.77 1.77.04.2.04.46.04 1.19v3.45c0 .85 0 1.45-.04 1.9-.04.46-.1.72-.2.92-.22.42-.57.77-.99.98-.2.1-.46.17-.91.21-.46.04-1.06.04-1.91.04h-6.9c-.85 0-1.45 0-1.91-.04a2.4 2.4 0 01-.91-.2 2.25 2.25 0 01-.99-.99 2.4 2.4 0 01-.2-.91c-.04-.46-.04-1.06-.04-1.91V8.5c0-.73 0-.99.04-1.19.18-.9.88-1.59 1.77-1.77.2-.04.46-.04 1.19-.04zm3-3.5c-.64 0-1.14.16-1.54.46-.39.27-.62.63-.78.9l-.08.11c-.13.22-.2.34-.3.43-.06.05-.12.1-.3.1h-.09c-.61 0-1.03 0-1.4.07a3.75 3.75 0 00-2.94 2.95C1 7.38 1 7.8 1 8.42v3.56c0 .81 0 1.47.04 2 .05.55.14 1.03.37 1.47.36.7.93 1.28 1.64 1.64.44.23.92.32 1.47.37.53.04 1.18.04 2 .04H13.48c.81 0 1.47 0 2-.04a3.84 3.84 0 001.47-.37c.7-.36 1.28-.93 1.64-1.64.23-.44.32-.92.37-1.47.04-.53.04-1.19.04-2V8.41c0-.61 0-1.03-.07-1.4a3.75 3.75 0 00-2.95-2.94 7.5 7.5 0 00-1.4-.07h-.08c-.18 0-.24-.05-.3-.1-.1-.1-.17-.2-.3-.43l-.08-.12c-.16-.26-.4-.62-.78-.9-.4-.29-.9-.45-1.54-.45zm3.75 8.25a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm1.5 0a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" fill="currentColor" fill-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <span class="MediaSelector__mediaIcon">
                                        <svg fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M10 17a7 7 0 110-14 7 7 0 010 14zm-8.5-7a8.5 8.5 0 1117 0 8.5 8.5 0 01-17 0zm8.65 3.38l2.7-1.56a2.1 2.1 0 000-3.64l-2.7-1.56A2.1 2.1 0 007 8.44v3.12a2.1 2.1 0 003.15 1.82zm1.95-3.9c.4.23.4.8 0 1.04l-2.7 1.56a.6.6 0 01-.9-.52V8.44c0-.46.5-.75.9-.52z" fill="currentColor" fill-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <span class="MediaSelector__mediaIcon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><g id="music_outline_20__Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="music_outline_20__Icons-20/music_outline_20"><g id="music_outline_20__music_outline_20"><path d="M0 0h20v20H0z"></path><path d="M14.73 2.05a2.28 2.28 0 012.75 2.23v7.99c0 3.57-3.5 5.4-5.39 3.51-1.9-1.9-.06-5.38 3.52-5.38h.37V6.76L8 8.43v5.82c0 3.5-3.35 5.34-5.27 3.62l-.11-.1c-1.9-1.9-.06-5.4 3.51-5.4h.37V6.24c0-.64.05-1 .19-1.36l.05-.13c.17-.38.43-.7.76-.93.36-.26.7-.4 1.41-.54zM6.5 13.88h-.37c-2.32 0-3.34 1.94-2.45 2.82.88.89 2.82-.13 2.82-2.45v-.37zm9.48-1.98h-.37c-2.32 0-3.34 1.94-2.46 2.82.89.89 2.83-.13 2.83-2.45v-.37zm-.02-7.78a.78.78 0 00-.92-.6L9.06 4.77c-.4.09-.54.15-.68.25a.8.8 0 00-.27.33c-.08.18-.1.35-.1.88v.67l7.97-1.67v-.95-.08z" id="music_outline_20__Icon-Color" fill="currentColor" fill-rule="nonzero"></path></g></g></g>
                                        </svg>
                                    </span>
                                    <span class="MediaSelector__mediaIcon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.25 14.5c.42 0 .75.34.75.75v.1a.75.75 0 01-.75.65H4.75a.75.75 0 110-1.5h12.5zm0-5a.75.75 0 110 1.5h-8.5a.75.75 0 01-.75-.75v-.1a.75.75 0 01.75-.65h8.5zm-9-6.5c.4 0 .75.34.75.75v.1a.75.75 0 01-.75.65h-2.5v5.75a.75.75 0 01-1.5 0V4.5h-2.5a.76.76 0 01-.74-.65L1 3.75c0-.42.34-.75.75-.75h6.5zm9 1.5a.75.75 0 010 1.5h-5.5a.75.75 0 01-.75-.75v-.1a.75.75 0 01.75-.65h5.5z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <span class="MediaSelector__mediaIcon SitpostingEntrypoint">
                                        <svg fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M4.25 8.75a5.75 5.75 0 018.4-5.1.75.75 0 10.7-1.33 7.25 7.25 0 00-10.6 6.43c0 2.06.94 3.48 1.92 4.54.34.38.71.73 1.04 1.04l.33.31c.37.37.61.64.75.87l.1.48c.06.33.11.6.18.84.07.24.16.48.31.7.24.35.57.62.95.78.25.11.5.15.76.17.24.02.52.02.85.02h.12c.33 0 .61 0 .85-.02.26-.02.51-.06.76-.17.38-.16.7-.43.95-.77.15-.23.24-.47.31-.71.07-.23.12-.51.19-.84l.1-.48c.09-.17.25-.36.48-.6.18-.19.38-.37.6-.58l.34-.33a9.08 9.08 0 002.05-2.69.75.75 0 10-1.36-.62 7.63 7.63 0 01-1.73 2.23l-.3.3c-.24.21-.48.44-.68.65-.19.2-.38.4-.54.63h-1.33v-1.64l.97-.77a.75.75 0 00-.94-1.18l-.78.63-.78-.63a.75.75 0 00-.94 1.18l.97.77v1.64H7.92a7.15 7.15 0 00-.84-.93l-.37-.36c-.32-.3-.63-.6-.94-.93-.84-.92-1.52-2-1.52-3.53zm4.26 7.67a6.68 6.68 0 01-.1-.42h3.17c-.03.18-.06.31-.1.42a.83.83 0 01-.1.26.75.75 0 01-.3.26.82.82 0 01-.28.05l-.77.01h-.06l-.77-.01a.82.82 0 01-.27-.05.75.75 0 01-.32-.26.82.82 0 01-.1-.26zm6.63-13.16a.38.38 0 01.72 0l.4 1.18c.12.38.42.68.8.8l1.18.4c.35.11.35.6 0 .72l-1.18.4c-.38.12-.68.42-.8.8l-.4 1.18a.38.38 0 01-.72 0l-.4-1.18a1.28 1.28 0 00-.8-.8l-1.18-.4a.38.38 0 010-.72l1.18-.4c.38-.12.68-.42.8-.8z" fill="currentColor" fill-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <span class="MediaSelector__mediaIcon">
                                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 10.75a.75.75 0 01.75.75v2a.75.75 0 01-1.5 0v-2a.75.75 0 01.75-.75z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M6 7.03V5a4 4 0 118 0v2.03c.59.03 1 .11 1.36.3a3 3 0 011.31 1.3c.33.65.33 1.49.33 3.17v1.4c0 1.68 0 2.52-.33 3.16a3 3 0 01-1.3 1.31c-.65.33-1.49.33-3.17.33H7.8c-1.68 0-2.52 0-3.16-.33a3 3 0 01-1.31-1.3C3 15.71 3 14.87 3 13.2v-1.4c0-1.68 0-2.52.33-3.16a3 3 0 011.3-1.31c.36-.19.78-.27 1.37-.3zm4-4.53A2.5 2.5 0 0112.5 5v2h-5V5A2.5 2.5 0 0110 2.5zm-2.2 6c-.86 0-1.42 0-1.85.04-.4.03-.56.09-.63.12a1.5 1.5 0 00-.66.66c-.03.07-.1.22-.12.63-.04.43-.04.99-.04 1.85v1.4c0 .87 0 1.42.04 1.85.03.4.09.56.12.63a1.5 1.5 0 00.66.66c.07.03.22.1.63.12.43.04.98.04 1.85.04h4.4c.86 0 1.42 0 1.85-.04.4-.03.56-.09.63-.12a1.5 1.5 0 00.66-.66c.03-.07.1-.22.12-.63.04-.43.04-.98.04-1.85v-1.4c0-.86 0-1.42-.04-1.85a1.7 1.7 0 00-.12-.63 1.5 1.5 0 00-.66-.66c-.07-.03-.22-.1-.63-.12-.43-.04-.98-.04-1.85-.04H7.8z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="wide_column text-center mt-3">
                                <div>
                                    <img class="mb-2" src="https://st6-20.vk.com/images/no_posts.png">
                                </div>
                                <span>Trên tường vẫn chưa có ghi chép nào.</span>

                            </div>
                            <div class="job-content mt-3">
        <?php $item = 0;
        foreach ($results as $item) {
            $item++; ?>
            <div class="status-field-container write-post-container">
                <div class="user-profile-box">
                    <div class="user-profile">
                        <img src="https://vk.com/images/camera_50.png" alt="">
                        <div>
                            <p> Alex Carry</p>
                            <small><?php echo date("Y-m-d", strtotime($item['created_at'])) ?> pm</small>
                        </div>
                    </div>
                    <div>
                        <a href="#">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="more_horizontal_24__Page-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="more_horizontal_24__more_horizontal_24"><path id="more_horizontal_24__Bounds" d="M24 0H0v24h24z"></path><path d="M18 10a2 2 0 012 2 2 2 0 01-2 2 2 2 0 01-2-2c0-1.1.9-2 2-2zm-6 4a2 2 0 01-2-2c0-1.1.9-2 2-2a2 2 0 012 2 2 2 0 01-2 2zm-6 0a2 2 0 01-2-2c0-1.1.9-2 2-2a2 2 0 012 2 2 2 0 01-2 2z" id="more_horizontal_24__Mask" fill="currentColor"></path></g></g>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="status-field">
                    <p><?php echo ($item['des']) ?></p>
                </div>
                <div class="post-reaction mt-3">
                    <div class="activity-icons">
                        <div class="PostBottomAction--withBg">
                            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"></path><path d="M16 4a5.95 5.95 0 00-3.89 1.7l-.12.11-.12-.11A5.96 5.96 0 007.73 4 5.73 5.73 0 002 9.72c0 3.08 1.13 4.55 6.18 8.54l2.69 2.1c.66.52 1.6.52 2.26 0l2.36-1.84.94-.74c4.53-3.64 5.57-5.1 5.57-8.06A5.73 5.73 0 0016.27 4zm.27 1.8a3.93 3.93 0 013.93 3.92v.3c-.08 2.15-1.07 3.33-5.51 6.84l-2.67 2.08a.04.04 0 01-.04 0L9.6 17.1l-.87-.7C4.6 13.1 3.8 11.98 3.8 9.73A3.93 3.93 0 017.73 5.8c1.34 0 2.51.62 3.57 1.92a.9.9 0 001.4-.01c1.04-1.3 2.2-1.91 3.57-1.91z" fill="currentColor" fill-rule="nonzero"></path></g>
                            </svg>
                            <span class="ml-1">0</span>
                        </div>
                        <div class="PostBottomAction--withBg">
                            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"></path><path d="M16.9 4H7.1c-1.15 0-1.73.11-2.35.44-.56.3-1 .75-1.31 1.31C3.11 6.37 3 6.95 3 8.1v5.8c0 1.15.11 1.73.44 2.35.3.56.75 1 1.31 1.31l.15.07c.51.25 1.04.35 1.95.37h.25v2.21c0 .44.17.85.47 1.16l.12.1c.64.55 1.6.52 2.21-.08L13.37 18h3.53c1.15 0 1.73-.11 2.35-.44.56-.3 1-.75 1.31-1.31.33-.62.44-1.2.44-2.35V8.1c0-1.15-.11-1.73-.44-2.35a3.17 3.17 0 00-1.31-1.31A4.51 4.51 0 0016.9 4zM6.9 5.8h9.99c.88 0 1.18.06 1.5.23.25.13.44.32.57.57.17.32.23.62.23 1.5v6.16c-.02.61-.09.87-.23 1.14-.13.25-.32.44-.57.57-.32.17-.62.23-1.5.23h-4.02a.9.9 0 00-.51.26l-3.47 3.4V17.1c0-.5-.4-.9-.9-.9H6.74a2.3 2.3 0 01-1.14-.23 1.37 1.37 0 01-.57-.57c-.17-.32-.23-.62-.23-1.5V7.74c.02-.61.09-.87.23-1.14.13-.25.32-.44.57-.57.3-.16.58-.22 1.31-.23z" fill="currentColor" fill-rule="nonzero"></path></g>
                            </svg>
                            <span class="ml-1">0</span>
                        </div>
                        <div class="PostBottomAction--withBg">
                            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"></path><path d="M12 3.73c-1.12.07-2 1-2 2.14v2.12h-.02a9.9 9.9 0 00-7.83 10.72.9.9 0 001.61.46l.19-.24a9.08 9.08 0 015.84-3.26l.2-.03.01 2.5a2.15 2.15 0 003.48 1.69l7.82-6.14a2.15 2.15 0 000-3.38l-7.82-6.13c-.38-.3-.85-.46-1.33-.46zm.15 1.79c.08 0 .15.03.22.07l7.82 6.14a.35.35 0 010 .55l-7.82 6.13a.35.35 0 01-.57-.28V14.7a.9.9 0 00-.92-.9h-.23l-.34.02c-2.28.14-4.4.98-6.12 2.36l-.17.15.02-.14a8.1 8.1 0 016.97-6.53.9.9 0 00.79-.9V5.87c0-.2.16-.35.35-.35z" fill="currentColor" fill-rule="nonzero"></path></g>
                            </svg>
                            <span class="ml-1">0</span>
                        </div>
                    </div>
                    <div class="post-profile-picture">
                        <svg fill="none" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><path d="M9.5 8a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path><path clip-rule="evenodd" d="M15.5 8c0-1-3-5-7.5-5S.5 7 .5 8s3 5 7.5 5 7.5-4 7.5-5zm-4 0a3.5 3.5 0 11-7 0 3.5 3.5 0 017 0z" fill-rule="evenodd"></path></g>
                        </svg>
                        <span class="ml-2">0</span>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
                        </div>
                    </div>
                </div>
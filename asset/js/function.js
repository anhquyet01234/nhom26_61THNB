var userSettings = document.querySelector(".user-settings");
var darkBtn = document.getElementById("dark-button");
var LoadMoreBackground = document.querySelector(".btn-LoadMore");
console.log("~ LoadMoreBackground", LoadMoreBackground)



function UserSettingToggle() {
    userSettings.classList.toggle("user-setting-showup-toggle");
}

function darkModeON() {
    darkBtn.classList.toggle("dark-mode-on");
    document.body.classList.toggle("dark-theme");
};

function LoadMoreToggle() {
    LoadMoreBackground.classList.toggle("loadMoreToggle");
};
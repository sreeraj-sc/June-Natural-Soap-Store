function password_missmatch()
{
    document.getElementById("cun_pass").innerHTML = "password miss match";
}
function invalid_user_pass()
{
    document.getElementById("invalid_user_password").innerHTML = "Invalid Username Or Password !!!";
}
function user_notfound()
{
    document.getElementById("invalid_user_password").innerHTML = "User Not Found !!!";
}
document.addEventListener("DOMContentLoaded", function () {
    const floatingSearchBar = document.querySelector(".floating-search-bar");
    const scrollThreshold = 200; // Adjust this value to control when the search bar appears

    window.addEventListener("scroll", function () {
        if (window.scrollY > scrollThreshold) {
            floatingSearchBar.style.display = "block";
        } else {
            floatingSearchBar.style.display = "none";
        }
    });
});

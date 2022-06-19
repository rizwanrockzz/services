function allowNav() {
    var mobile = document.querySelector(".mobile-nav-list")
    mobile.classList.toggle('mobile-nav-allow')

    var icon = document.querySelector(".icon")
    icon.classList.toggle("fa-bars")
    icon.classList.toggle("fa-xmark")

}


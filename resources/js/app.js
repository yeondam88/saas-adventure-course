require("./bootstrap");

var userDropDownVisible = false;

document.body.addEventListener("click", function(e) {
    if (
        e.target.id != "usermenu" &&
        !e.target.classList.contains("ignore-body-click") &&
        userDropDownVisible
    ) {
        document.getElementById("usermenu").classList.add("invisible");
        userDropDownVisible = false;
    }
});

if (document.getElementById("userdropdown")) {
    document
        .getElementById("userdropdown")
        .addEventListener("click", function() {
            if (
                document
                    .getElementById("usermenu")
                    .classList.contains("invisible")
            ) {
                document
                    .getElementById("usermenu")
                    .classList.remove("invisible");
                userDropDownVisible = true;
            } else {
                document.getElementById("usermenu").classList.add("invisible");
                userDropDownVisible = false;
            }
        });
}

if (document.querySelector(".alert")) {
    setTimeout(function() {
        document.querySelector(".alert").remove();
    }, 3000);
}

if (document.getElementById('switch-plan-btn')) {
    document
        .getElementById("switch-plan-btn")
        .addEventListener("click", function() {
            document.getElementById('switch-plans-modal').style.display = 'block';
        });
}

if (document.getElementById('switch-plans-close')) {
    document
        .getElementById("switch-plans-close")
        .addEventListener("click", function() {
            document.getElementById('switch-plans-modal').style.display = 'none';
        });
}
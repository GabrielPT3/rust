window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("navbar");
        // var sticky = navbar.offsetTop;

        function myFunction() {

        if (window.pageYOffset >= 50) {
            navbar.classList.add("stickynav")
        } else {
            navbar.classList.remove("stickynav");
        }
        
}
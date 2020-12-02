function mobileNavbarToogle() {
    var mobileNavbar = document.getElementById("mobilenavbaritems");

    if(mobileNavbar.style.height === "250px"){
        mobileNavbar.style.height = "0px";
    }
    else{
        mobileNavbar.style.height = "250px";
    }
    
}
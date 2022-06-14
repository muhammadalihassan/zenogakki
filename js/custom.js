$("#hashplay").click(function(){
    var a = $(this).find(".fa-solid");
  if($(this).hasClass("active")){
    $(this).removeClass("active");
    document.getElementById("webbgaudios").pause();
     a.removeClass("fa-volume-high");
    a.addClass("fa-volume-xmark");
  }
  else{
    $(this).addClass("active");
    document.getElementById("webbgaudios").play()
    a.addClass("fa-volume-high");
    a.removeClass("fa-volume-xmark");
  }
  
})

$(".enter-utopia").click(function(){
    $(".intro-video").fadeOut(2000);
    var box = document.getElementById('box');

box.classList.remove('drawing-borders');
  setTimeout(function() {$box.classList.add('drawing-borders');}, 100)
})

/*$(".bottom-header .navbar li").click(function(){
    // var b = $(this).find(".hovertext-p1").text();
    // $(".bottom-header .navbar:after").css("content", b);
    var url = window.location.href;
    // alert();
    if(url.indexOf('utopia.php') > -1){
        $(".bottom-header .navbar p").html("UTOPIA")    
    }
    // var c = $(".bottom-header .navbar .active").find(".hovertext-p1").text();
    
})*/
$(document).ready(function(){
    var url = window.location.href;
    // alert();
    if(url.indexOf('utopia.php') > -1){
        $(".bottom-header .navbar p").html("UTOPIA")
        $("body").addClass("uto");  
    }else if(url.indexOf('prophecy.php') > -1){
        $(".bottom-header .navbar p").html("PROPHECY")  
        $("body").addClass("prop");
    }


    // Index page changes
    $(".enter-utopia").hide()

    setTimeout(function() {         
        $(".enter-utopia").fadeIn(200);
    }, 7000);
})

//cookies code

function setCookie(name, value, daysToLive) {
    // Encode value in order to escape semicolons, commas, and whitespace
    var cookie = name + "=" + encodeURIComponent(value);
    
    if(typeof daysToLive === "number") {
        /* Sets the max-age attribute so that the cookie expires
        after the specified number of days */
        cookie += "; max-age=" + (daysToLive*24*60*60);
        
        document.cookie = cookie;
    }
}

function getCookie(name) {
    // Split cookie string and get all individual name=value pairs in an array
    var cookieArr = document.cookie.split(";");
    
    // Loop through the array elements
    for(var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");
        
        /* Removing whitespace at the beginning of the cookie name
        and compare it with the given string */
        if(name == cookiePair[0].trim()) {
            // Decode the cookie value and return
            return decodeURIComponent(cookiePair[1]);
        }
    }
    
    // Return null if not found
    return null;
}

function checkCookie() {
    // Get cookie using our custom function
    var firstName = getCookie("video_change");
    
    if(firstName != "") {
        //alert("Welcome again, " + firstName);
    } else {
        firstName = prompt("Please enter your first name:");
        if(firstName != "" && firstName != null) {
            // Set cookie using our custom function
            setCookie("video_change", firstName, 30);
        }
    }
}

// $(document).ready(function(){

//  var check_status = getCookie("video_change")
//  if(check_status == "read"){
//      $(".intro-video").hide()
//  }else{
//      setCookie("video_change" , "read" , 1)
//      $(".intro-video").show()
//  }
// })

// cookies code end here

$(document).ready(function(){
    $(".logo").addClass("full");
})

var $box = document.getElementById('box');
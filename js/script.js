function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 300,
            header = document.querySelector("header");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");
        } else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
            }
        }
    });
}
window.onload = init();

$(document).ready(function() {
    $('.follow-btn').click(function(){
        var uid = $(this).attr('uid');
        console.log(uid);
        $.ajax({
            url:"process_follow.php",
            type:"post",
            data: {uid: uid},
            success: function(result){
                console.log(result);
                if(result == "Success!"){
                    buttonToChange.removeClass('btn-primary');
                    buttonToChange.addClass('btn-danger');
                }
            }
        })
    })
});
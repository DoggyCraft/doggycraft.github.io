$(".minecraft-input-box-text").fitText(1.3);
$(".minecraft-input-text").fitText(3);
$(".minecaft-input-server-address-desktop .minecraft-input-box-button > .minecraft-button-title").fitText(0.7);

var lineheight_fit = function () {
    $(".minecraft-input-box-text > span").css("line-height", $(".minecraft-input-box-text > span").css("font-size"));
    $(".minecraft-button-title > span").css("line-height", $(".minecraft-button-title > span").css("font-size"));

    $(".minecaft-input-server-address-mobile .minecraft-input-box").css("height", $(".minecraft-server-info .minecraft-input-box").css("height"));
}
lineheight_fit();
$(window).on('resize orientationchange', lineheight_fit);


$(".minecraft-input-box-button").click(function(){
    if (navigator && navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText("doggycraft.dk")
            .then(() => {
                alert("Copied the address!");
            })
            .catch(() => {
                alert("Could not copy the address...");
            });
    }
    else {
        alert("Could not copy the address...");
    }
});

$(".discord-button").click(function(){
    window.open("https://discord.gg/5zR89pv", '_blank');
});
$(".twitch-button").click(function(){
    window.open("https://twitch.tv/doggycraftdk", '_blank');
});
$(".youtube-button").click(function(){
    window.open("https://youtube.com/DoggyCraftDK", '_blank');
});
$(".votesite-button").click(function(e) {
    window.open(e.currentTarget.dataset.url);
});
$(".vote-button").click(function(){
    $(".vote-modal-container").css("display", "flex");

    $(".vote-modal .col-md-6").each(function(index) {
        var elem = $(this);
        elem.css("left", "-100vw");
        setTimeout(function() {
            elem.addClass("votesite-button-animate");
            elem.one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function() {
                elem.removeClass('votesite-button-animate');
                elem.css("left", "unset");
            });
        }, index * 150)
    });

});
$(".vote-modal-container-background").click(function(){
    $(".vote-modal-container").css("display", "none");
});

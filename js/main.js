$(".minecraft-input-box-text").fitText(2.4);
$(".minecraft-input-text").fitText(3);
$(".minecraft-input-box-button-title").fitText(0.3);

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
$(".vote-button").click(function(){
    window.open("https://minecraftlist.dk/vote/1804653e-0879-4198-860a-765600031e18", '_blank');
    window.open("https://minecraftlist.org/vote/1577", '_blank');
    window.open("https://minecraftservers.org/vote/211341", '_blank');
    window.open("https://minecraft-server-list.com/server/290100/vote/", '_blank');
    window.open("https://minecraft-server.net/vote/DogOnFire/", '_blank');
    window.open("https://minecraft-mp.com/server/75843/vote/", '_blank');
    window.open("https://minecraftlist.dk/vote/1804653e-0879-4198-860a-765600031e18", '_blank');
});
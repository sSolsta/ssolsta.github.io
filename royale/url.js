print("sSolsta's Menu/Music Mod is Active");
var LOBBY_MUSIC_URL = "https://ssolsta.github.io/royale/music/lobby.mp3";
var MENU_MUSIC_URL = "https://ssolsta.github.io/royale/music/menu.mp3";
var SKINCOUNT = 1;
var SKIN_MUSIC_URL = {};
(function() {
    $.ajax({
        url: "assets.json",
        success: function (result) {
            assetData = result;
        },
        async: false
    });
    if (assetData.skins.count != undefined)
        SKINCOUNT=assetData.skins.count;
    for (i in assetData.skins.properties) {
        var prop = assetData.skins.properties;
        var music = prop[i].music;
        if (music != undefined)
            SKIN_MUSIC_URL[prop[i].id] = music;
    }
})();
print("loading url.js finished");

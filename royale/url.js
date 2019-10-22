print("sSolsta's Menu/Music Mod is Active");
var LOBBY_MUSIC_URL = "https://ssolsta.github.io/royale/music/lobby.mp3";
var MENU_MUSIC_URL = "https://ssolsta.github.io/royale/music/menu.mp3";
var SKIN_MUSIC_URL = {};
var TILE_ANIMATION = {};
var OBJ_ANIMATION = {};
(function() {
    var assetData = resources["assets.json"];
    if (assetData.skins.count != undefined)
        SKINCOUNT=assetData.skins.count;
    for (i in assetData.skins.properties) {
        var prop = assetData.skins.properties;
        var music = prop[i].music;
        if (music != undefined)
            SKIN_MUSIC_URL[prop[i].id] = music;
    }
    if (assetData.tileAnim) {
        for (var anim of assetData.tileAnim) {
            var obj = {};
            obj.tiles = anim.tiles;
            obj.delay = anim.delay;
            obj.tilesets = anim.tilesets || [];
            TILE_ANIMATION[anim.startTile] = obj;
        }
    }
    if (assetData.objAnim) {
        for (var anim of assetData.objAnim) {
            var obj = {};
            obj.tiles = anim.tiles;
            obj.delay = anim.delay;
            obj.tilesets = anim.tilesets || [];
            OBJ_ANIMATION[anim.startTile] = obj;
        }
    }
})();
print("loading url.js finished");

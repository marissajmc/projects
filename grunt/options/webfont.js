// See https://github.com/sapegin/grunt-webfont for setup instructions
(function(){
    "use strict"; 
    module.exports = function(grunt, pkg) {

        var config = {
            all : {
                src : ['src/icons/*.svg'],
                dest : "dist/icons/",
                destCss : "src/sass/partials/",
                options : {
                    types : ["eot", "woff", "ttf", "svg"],
                    stylesheet : "scss",
                    engine : "node",
                    autohint : false,
                    htmlDemo : false,
                    relativeFontPath : "../icons/",
                    fontHeight : 1000,
                    descent : 0,
                    template : "iconFontTemplate.css",
                    templateOptions : {
                        baseClass : "icon",
                        classPrefix : "icon--",
                        mixinPrefix : "icon--"
                    }
                }
            }
        };

        return config;
    };
})();
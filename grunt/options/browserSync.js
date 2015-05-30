(function(){
    "use strict";
    module.exports = function(option, grunt) {

        var config = {
            dev: {
                bsFiles : {
                    src : ["*.php", "dist/js/*.js", "dist/css/*.css", "dist/img/**", 'dist/icons/**']
                },
                options: {
                    watchTask: true,
                    proxy : "localhost/mcookson/"
                }
            }
        };
        return config;
    };
})();


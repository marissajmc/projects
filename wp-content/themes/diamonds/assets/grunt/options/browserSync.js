(function(){
    "use strict";
    module.exports = function(option, grunt) {

        var config = {
            dev: {
                bsFiles : {
                    src : ["*.php", "*.twig", "dist/js/*.js", "dist/css/*.css", "dist/img/**", 'dist/icons/**']
                },
                options: {
                    watchTask: true,
                    proxy : "mcookson.com.localhost:8888/"
                }
            }
        };
        return config;
    };
})();


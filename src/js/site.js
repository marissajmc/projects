(function($, document, window, undefined){
    "use strict";

    window.projects = window.projects || {};

    console.log(projects);

    projects.filter = function(){
        
        // Private will not be exposed outside of this closure
        var _private = {};
        // Public is returned and can be leveraged by other modules
        var _public = {};

        _public.init = function() {
            console.log('init');      
        };

        _private.isPrivate = function(){
            console.log('is private');
        };

        // run
        _public.init();

        return _public;
    };

    projects.filter();
    //projects.filter().init(); // works
    //projects.filter().isPrivate(); // does not work

})(jQuery, document, window);
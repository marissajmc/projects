(function($, document, window, undefined){
    "use strict";

    $(document).foundation();

    window.projects = window.projects || {};

    projects.filter = function(){
        
        // Private will not be exposed outside of this closure
        var _private = {};
        // Public is returned and can be leveraged by other modules
        var _public = {};

        _public.init = function() {

            var filter = {};
            filter.$toggle = $('[data-filter-toggle]');
            filter.$item = $('[data-filter-item]');
            filter.$selected = $('[data-filter-selected]');

            _private.bindEvents(filter);
        };

        _private.bindEvents = function(filter){

            // show/hide category list
            filter.$toggle.on('click',function(e){
                e.preventDefault();
                $(this).toggleClass('is-open');
            });

            // update selected category
            filter.$item.on('click',function(e){
                e.preventDefault();
                var $this = $(this),
                    selectedCategory = $this.data('filter-item'),
                    selectedHtml = $this.html();

                filter.$item.removeClass('is-active');
                filter.$selected.attr('data-filter-selected',selectedCategory);
                filter.$selected.find('span').html(selectedHtml).removeClass().addClass('icon--'+selectedCategory.toLowerCase());
                
                $this.addClass('is-active');
                filter.$toggle.removeClass('is-open');
            });
        };

        // run
        _public.init();

        return _public;
    };

    projects.filter();

})(jQuery, document, window);
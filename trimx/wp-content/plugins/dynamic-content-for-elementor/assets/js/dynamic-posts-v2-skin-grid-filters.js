var Widget_DCE_Dynamicposts_grid_filters_Handler = function ($scope, $) {

	var elementSettings = get_Dyncontel_ElementSettings($scope);

	$scope.find('.dce-filters .filters-item').on('click', 'a', function (e) {
		var filterValue = $(this).attr('data-filter');
		$(this).parent().siblings().removeClass('filter-active');
		$(this).parent().addClass('filter-active');

		var grid_container = $scope.find('.dce-posts-container.dce-skin-grid .dce-posts-wrapper.dce-wrapper-grid');

		var $layoutMode = elementSettings[DCE_dynposts_skinPrefix+'grid_type'];
        grid_container.isotope({
			filter: filterValue,
            itemSelector: '.dce-post-item',
            layoutMode: 'masonry' === $layoutMode ? 'masonry' : 'fitRows',
            sortBy: 'original-order',
            percentPosition: true,
            masonry: {
                columnWidth: '.dce-post-item'
            }
        });

		// Match Height when layout is complete
		if( elementSettings.grid_filters_match_height ) {
			grid_container.on( 'layoutComplete', function(event, laidOutItems ) {
				jQuery.fn.matchHeight._update();
			});
		}

		return false;
	});
};

jQuery(window).on('elementor/frontend/init', function () {
    elementorFrontend.hooks.addAction('frontend/element_ready/dce-dynamicposts-v2.grid-filters', Widget_DCE_Dynamicposts_grid_filters_Handler);
});

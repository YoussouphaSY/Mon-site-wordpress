( function( api ) {

	// Extends our custom "soccer-club-academy" section.
	api.sectionConstructor['soccer-club-academy'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
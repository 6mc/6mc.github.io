// init Isotope
var $container = $('.grid').isotope({
  itemSelector: '.office-year-function'
});

// store filter for each group
var filters = {};





$('.filters').on( 'click', '.button', function() {
  var $this = $(this);
  // get group key
  var $buttonGroup = $this.parents('.button-group');
  var filterGroup = $buttonGroup.attr('data-filter-group');
  // set filter for group
  filters[ filterGroup ] = $this.attr('data-filter');
  // combine filters
  var filterValue = concatValues( filters );
  // set filter for Isotope
  $container.isotope({ filter: filterValue });
});

// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});
  
// flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}

  //****************************
  // Isotope Load more button
  //****************************
  var initShow = 1000; //number of items loaded on init & onclick load more button
  var counter = initShow; //counter for load more button
  var iso = $container.data('isotope'); // get Isotope instance
  var noOfClick = 0;
  var numItems = $('.office-year-function').length; // no. of event
  loadMore(initShow); //execute function onload

  function loadMore(toShow) {
    $container.find(".hidden").removeClass("hidden");

    var hiddenElems = iso.filteredItems.slice(toShow, iso.filteredItems.length).map(function(item) {
      return item.element;
    });
    $(hiddenElems).addClass('hidden');
    $container.isotope('layout');



  }
	
	
	
  //append load more button

  
  
  //when load more button clicked
  $("#load-more").click(function() {
    if ($('#filters').data('clicked')) {
      //when filter button clicked, set initial value for counter
      counter = initShow;
      $('#filters').data('clicked', false);
    } else {
      counter = counter;
    }
	
	//when load more button is clicked, show 6 more elements
    counter = counter + 6; 
	noOfClick++;
    loadMore(counter);
	
  });

  //when filter button clicked
  $("#filters").click(function() {
    $(this).data('clicked', true);

    loadMore(initShow);
  });
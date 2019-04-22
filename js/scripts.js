function openNav() {
    document.getElementById("overlay-menu").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("overlay-menu").style.width = "0%";
  }


  $(document).ready( function() {

    $('.photos-item').hover( function() {
        $(this).find('.img-title').fadeIn(300);
    }, function() {
        $(this).find('.img-title').fadeOut(100);
    });
    
});


  $(function() {
    var $container = $('#photos'),
        $select = $('div#filters select');
    filters = {};

    $container.isotope({
        itemSelector: '.photos-item'
    });
        $select.change(function() {
        var $this = $(this);

        var $optionSet = $this;
        var group = $optionSet.attr('data-filter-group');
    filters[group] = $this.find('option:selected').attr('data-filter-value');

        var isoFilters = [];
        for (var prop in filters) {
            isoFilters.push(filters[prop])
        }
        var selector = isoFilters.join('');

        $container.isotope({
            filter: selector
        });

        return false;
    });

});

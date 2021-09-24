;(function ($) {
   wp.customize('cust_services_heading',function(value){
      value.bind(function(newvalue){
        $('#service-heading').html(newvalue);
      })
   });
})(jQuery);
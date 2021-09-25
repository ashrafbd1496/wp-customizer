;(function ($) {
   wp.customize('cust_services_heading',function(value){
      value.bind(function(newvalue){
        $('#service-heading').html(newvalue);
      });

   });

   wp.customize('cust_service_icon_color_setting',function(value){
      value.bind(function(newvalue){
         $('.service i').css('color',newvalue);
      });
   });
})(jQuery);
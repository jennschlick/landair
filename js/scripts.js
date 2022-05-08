(function($){

  $(document).ready(function(){
    $('#protracebutton').click(function(e) {  
        var inputvalue = $("#protraceinput").val();
        window.location.replace("https://tracking.carrierlogistics.com/scripts/laxv.pol/facts.htm?startpage=protrace&pronum="+inputvalue);
    });
  });

})(jQuery)

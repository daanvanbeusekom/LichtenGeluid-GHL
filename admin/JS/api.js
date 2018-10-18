

(function($) {
  $.fn.SocialCounter = function(options) {
    var settings = $.extend({
      // These are the defaults.
      twitter_user:''
    }, options);


    function twitter(){
      //Twitter API - Requires PHP.
      //References
      //http://stackoverflow.com/questions/17409227/follower-count-number-in-twitter
      //https://github.com/J7mbo/twitter-api-php
      $.ajax({
        url: 'https://socialcounters.000webhostapp.com/SocialCounters/SocialCounters/twitter/index.php',
        dataType: 'json',
        type: 'GET',
        data:{
          user:settings.twitter_user
        },
        success: function(data) {   
          var followers = parseInt(data.followers);
          $(".twittercount").append(followers).digits(); 
          getTotal(followers); 
        } 
      }); 
    }
    

    //Call Functions
    if(settings.twitter_user!=''){ 
      twitter(); 
    }
  };
}(jQuery));
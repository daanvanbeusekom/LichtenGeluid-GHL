

$.fn.SocialCounter = function(options) {
    var settings = $.extend({
      // These are the defaults.
      twitter_user:'GHL_Feesten',
    }

$.ajax({
        url: 'https://socialcounters.000webhostapp.com/SocialCounters/SocialCounters/twitter/index.php',
        dataType: 'json',
        type: 'GET',
        data:{
          user:settings.twitter_user
        },
        success: function(data) {   
          var followers = parseInt(data.followers);
          $('#wrapper .item.twitter .twittercount').append(followers).digits(); 
          getTotal(followers); 
        } 
      });


  var twitter_username = 'GHL_Feesten';

  $.ajax({
    url: "https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names="+twitter_username,
    dataType : 'jsonp',
    crossDomain : true
  }).done(function(data) {
    $(".twittercount").text(data[0]['followers_count']);
  });
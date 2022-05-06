
$(document).ready(function(){
  // save comment to database
  $(document).on('click', '#heart', function(){

    var sign = 'signed';
    if(document.getElementById("heart").className == "far fa-heart"){
        document.getElementById("heart").className = "fas fa-heart";
        sign = 'signed';
    } else{ 
        document.getElementById("heart").className = "far fa-heart";
        sign = 'unsigned';
    }

    var department = 'campaigns';
    $.ajax({
      url: 'server.php',
      type: 'POST',
      data: {
        'save': 1,
        'department': department,
        'sign': sign,
      },
      success: function(response){
        // printf("Success") ;
      }
    });
  });

    $(document).on('click', '#heart1', function(){

    var sign = 'signed';
    if(document.getElementById("heart1").className == "far fa-heart"){
        document.getElementById("heart1").className = "fas fa-heart";
        sign = 'signed';
    } else{ 
        document.getElementById("heart1").className = "far fa-heart";
        sign = 'unsigned';
    }

    var department = 'compi';
    $.ajax({
      url: 'server.php',
      type: 'POST',
      data: {
        'save': 1,
        'department': department,
        'sign': sign,
      },
      success: function(response){
        // printf("Success") ;
      }
    });
  });

      $(document).on('click', '#heart2', function(){

    var sign = 'signed';
    if(document.getElementById("heart2").className == "far fa-heart"){
        document.getElementById("heart2").className = "fas fa-heart";
        sign = 'signed';
    } else{ 
        document.getElementById("heart2").className = "far fa-heart";
        sign = 'unsigned';
    }

    var department = 'creative';
    $.ajax({
      url: 'server.php',
      type: 'POST',
      data: {
        'save': 1,
        'department': department,
        'sign': sign,
      },
      success: function(response){
        // printf("Success") ;
      }
    });
  });

    $(document).on('click', '#heart3', function(){

    var sign = 'signed';
    if(document.getElementById("heart3").className == "far fa-heart"){
        document.getElementById("heart3").className = "fas fa-heart";
        sign = 'signed';
    } else{ 
        document.getElementById("heart3").className = "far fa-heart";
        sign = 'unsigned';
    }

    var department = 'events';
    $.ajax({
      url: 'server.php',
      type: 'POST',
      data: {
        'save': 1,
        'department': department,
        'sign': sign,
      },
      success: function(response){
        // printf("Success") ;
      }
    });
  });

    $(document).on('click', '#heart4', function(){

    var sign = 'signed';
    if(document.getElementById("heart4").className == "far fa-heart"){
        document.getElementById("heart4").className = "fas fa-heart";
        sign = 'signed';
    } else{ 
        document.getElementById("heart4").className = "far fa-heart";
        sign = 'unsigned';
    }

    var department = 'marketing';
    $.ajax({
      url: 'server.php',
      type: 'POST',
      data: {
        'save': 1,
        'department': department,
        'sign': sign,
      },
      success: function(response){
        // printf("Success") ;
      }
    });
  });


    $(document).on('click', '#heart5', function(){

    var sign = 'signed';
    if(document.getElementById("heart5").className == "far fa-heart"){
        document.getElementById("heart5").className = "fas fa-heart";
        sign = 'signed';
    } else{ 
        document.getElementById("heart5").className = "far fa-heart";
        sign = 'unsigned';
    }

    var department = 'media';
    $.ajax({
      url: 'server.php',
      type: 'POST',
      data: {
        'save': 1,
        'department': department,
        'sign': sign,
      },
      success: function(response){
        // printf("Success") ;
      }
    });
  });

    $(document).on('click', '#heart6', function(){

    var sign = 'signed';
    if(document.getElementById("heart6").className == "far fa-heart"){
        document.getElementById("heart6").className = "fas fa-heart";
        sign = 'signed';
    } else{ 
        document.getElementById("heart6").className = "far fa-heart";
        sign = 'unsigned';
    }

    var department = 'operations';
    $.ajax({
      url: 'server.php',
      type: 'POST',
      data: {
        'save': 1,
        'department': department,
        'sign': sign,
      },
      success: function(response){
        // printf("Success") ;
      }
    });
  });


    $(document).on('click', '#heart7', function(){

    var sign = 'signed';
    if(document.getElementById("heart7").className == "far fa-heart"){
        document.getElementById("heart7").className = "fas fa-heart";
        sign = 'signed';
    } else{ 
        document.getElementById("heart7").className = "far fa-heart";
        sign = 'unsigned';
    }

    var department = 'web';
    $.ajax({
      url: 'server.php',
      type: 'POST',
      data: {
        'save': 1,
        'department': department,
        'sign': sign,
      },
      success: function(response){
        // printf("Success") ;
      }
    });
  });

});
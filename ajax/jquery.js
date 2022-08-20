
$(document).ready(function() {
    $(".dropbtn").mouseenter(function(){
              $(this).find(".dropdown").slideDown("fast");
          });
      $(".dropbtn").mouseleave(function(){
          $(this).find(".dropdown").hide();
      });
  
      $(".dropbtn2").mouseenter(function(){
          $(this).find(".dropdown2").slideDown("fast");
      });
      $(".dropbtn2").mouseleave(function(){
          $(this).find(".dropdown2").hide();
      });

      $(".scol4").mouseenter(function(){
        //   console.log("ok");
        $(this).find(".scolf").hide();
        $(this).find(".scols").show();
        $(this).find(".container").css("background", "#098c9e");
        $(this).find(".container").css("color", "#f7f7f7");
        
    });
    $(".scol4").mouseleave(function(){
        $(this).find(".scolf").show();
        $(this).find(".scols").hide();
        $(this).find(".container").css("background", "#f7f7f7");
        $(this).find(".container").css("color", "#098c9e");


    });



      
            // $("#crosicon").css("display", "none");

        $("#openchat").click(function(){
            $("#myForm").css("display", "block");
            $("#crosicon").css("display", "block");
            $("#chaticon").css("display", "none");
            $("#chaticon").removeClass("iconro");
            $("#crosicon").addClass("iconro");
        });
        $("#closechat").click(function(){
            $("#myForm").css("display", "none");
            $("#crosicon").css("display", "none");
            $("#chaticon").css("display", "block");
            $("#chaticon").addClass("iconro");
            $("#crosicon").removeClass("iconro");
        });

        const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
        const d = new Date();
        let day = weekday[d.getDay()];
        function addZero(i) {
            if (i < 10) {i = "0" + i}
            return i;
          }
          let hr = addZero(d.getHours());
          let m = addZero(d.getMinutes());
        //   let s = addZero(d.getSeconds());
        //   let time = h + ":" + m + ":" + s;
        if (hr>12) {
            h=hr-12; 
            a="PM";
        }
        else{h=hr;a="AM"}
        $(".todaydate").html(day+", "+h+":"+m+" "+a);

        // $("#chatsubmit").click(function(){

        // });

      window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            // var nav=document.getElementById("navbar");
        if (document.body.scrollTop > 110 || document.documentElement.scrollTop > 100) {
        //   $("#navbar").hide();
            // nav.style.position = "fixed";
            $("#navbar").addClass("fixed");

            // nav.style.backgroundColor = "#f7f7f7";
            $("#navbar").addClass("fades");
            $(".navbar").css("background-color", "#f7f7f7");
            $("#topbtn").show();
            

            // $("#navbar").css("position", "fixed");
        //   $("#navbar").fadeIn();


        } else {
            // $("#navbar").show();
            // $("#navbar").css("position", "relative");
            // nav.style.position = "relative";
            // nav.style.backgroundColor = "transparent";
            $("#navbar").removeClass("fixed");

            $("#navbar").removeClass("fades");
            $(".navbar").css("background-color", "transparent");
            $("#topbtn").hide();
        //   $(this).find(".dropdown2").hide();

        }
    }
    });
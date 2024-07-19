// custom.js #####jquery widgets

$(document).ready(function () {
  // custom.js

  $(document).ready(function () {
    // Widget 1
    var widget1 = $("#widget1");
    widget1.html(
      "<div class='content'><h2>New Arrivals</h2><p>Explore our latest collection of trendy clothing and accessories for men, women, and kids. From stylish tops to comfortable bottoms, we have something for everyone!</p><p>Don't miss out on our limited-time offers and discounts. Shop now and stay ahead of the fashion game!</p></div>"
    );

    // Add mouseover event to Widget 1
    widget1.mouseover(function () {
      // Change background color and text color
      widget1.css("background-color", "#044b37");
      widget1.css("color", "white");

      // Position text in front of the image
      $(".content", this).css("position", "relative");
      $(".content h2, .content p", this).css({
        position: "absolute",
        top: "20%",
        left: "20%",
        transform: "translate(-50%, -50%)",
        "z-index": "1",
      });
    });

    // Add mouseout event to Widget 1
    widget1.mouseout(function () {
      // Revert background color and text color
      widget1.css("background-color", "");
      widget1.css("color", "");

      // Revert text position
      $(".content", this).css("position", "");
      $(".content h2, .content p", this).css({
        position: "",
        top: "",
        left: "",
        transform: "",
        "z-index": "",
      });
    });
  });

  // Widget 2
  var widget2 = $("#widget2");
  widget2.html("<h2>MasuBhat Styles</h2><p>Trends are here.</p>");

  // Widget 3
  var widget3 = $("#widget3");
  widget3.html("<h2>Cuties Styles</h2>best for all age groups<p> </p>");

  // Example: Changing background color of Widget 1 on mouseover using jQuery UI
  widget1.mouseover(function () {
    widget1.css("background-color", " #044b37");
    widget1.css("color", "white");
  });

  // Example: Changing background color of Widget 1 back to default on mouseout using jQuery UI
  widget1.mouseout(function () {
    widget1.css("background-color", "grey");
  });

  // Example: Toggle visibility of Widget 2 content on click using jQuery UI
  var widget2Content = widget2.find("p");
  var isVisible = true;
  widget2.click(function () {
    if (isVisible) {
      widget2Content.hide();
      isVisible = false;
    } else {
      widget2Content.show();
      isVisible = true;
    }
  });

  // Add more jQuery UI or jQuery logic as needed...
});

$(function () {
  $("#toggleButton").click(function () {
    $("#effect").slideToggle();
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var welcomeMessage = document.getElementById("welcome-message");
  welcomeMessage.style.display = "block";
  welcomeMessage.classList.add("fadeIn");

  // After 5 seconds, fade out the welcome message
  setTimeout(function () {
    welcomeMessage.classList.remove("fadeIn");
    welcomeMessage.classList.add("fadeOut");
    setTimeout(function () {
      welcomeMessage.style.display = "none";
    }, 1500); // Duration of fadeOut animation
  }, 3000); // Time before starting fadeOut
});

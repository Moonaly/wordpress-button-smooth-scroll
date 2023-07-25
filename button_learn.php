<?php
function button_learn($atts) {
// Attributes
$atts = shortcode_atts(
array(
'postid' => get_the_ID(),
), 
$atts
);
// Attributes in var
$post_id = $atts['postid']; 
ob_start();
?>

<style>
@font-face {
font-family: FZChaoCuHei;
src: url(https://dev.zhi.services/nrs/wp-content/themes/betheme-child/fonts/FZChaoCuHei-M10S.ttf);
}
@font-face {
font-family: microsoft-yahei;
src: url(https://dev.zhi.services/nrs/wp-content/themes/betheme-child/fonts/microsoft-yahei.ttf);
}
*,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

/* .button */
.button-custom .button_learn {
  display: inline-block;
  position: relative;
  margin: auto;
  /*padding: 0.67em;*/
  overflow: hidden;
  text-decoration: none;
  /*font-size: 15px;*/
  outline: none;
  color: #FFF;
  background: #EE0404;
    max-width: 280px;
    width: 100%;
    border-radius: 50px;
    transform: scale(1);
    transition: all 0.3s ease-out;
}
.button-custom .button_learn:hover{
    background: rgb(255, 255, 0);
    background: linear-gradient(180deg, rgba(255, 255, 0, 1) 0%, rgba(240, 137, 0, 1) 100%);
    transform: scale(1.05);
    transition: all 0.3s ease-out;
}
.button-custom .button_learn span {
  /*-webkit-transition: 0.3s;*/
  /*-moz-transition: 0.3s;*/
  /*-o-transition: 0.3s;*/
  /*transition: 0.3s;*/
  /*-webkit-transition-delay: 0.1s;*/
  /*-moz-transition-delay: 0.1s;*/
  /*-o-transition-delay: 0.1s;*/
  /*transition-delay: 0.1s;*/
}

.button-custom .button_learn:before,
.button-custom .button_learn:after {
  content: "";
  position: absolute;
  top: 0.67em;
  left: 0;
  width: 100%;
  text-align: center;
  opacity: 0;
  /*-webkit-transition: 0.1s, opacity 0.3s;*/
  /*-moz-transition: 0.1s, opacity 0.3s;*/
  /*-o-transition: 0.1s, opacity 0.3s;*/
  /*transition: 0.1s, opacity 0.3s;*/
}

/* :before */
.button-custom .button_learn:before {
  content: attr(data-hover);
  opacity:0;
    -webkit-transform: translate(0, 8px);
  -moz-transform: translate(0, 8px);
  -ms-transform: translate(0, 8px);
  -o-transform: translate(0, 8px);
  transform: translate(0, 8px);
  
  
  /*-webkit-transform: translate(-150%, 0);*/
  /*-moz-transform: translate(-150%, 0);*/
  /*-ms-transform: translate(-150%, 0);*/
  /*-o-transform: translate(-150%, 0);*/
  /*transform: translate(-150%, 0);*/
}

/* :after */
.button-custom .button_learn:after {
  content: attr(data-active);
  opacity:0;
  /*-webkit-transform: translate(150%, 0);*/
  /*-moz-transform: translate(150%, 0);*/
  /*-ms-transform: translate(150%, 0);*/
  /*-o-transform: translate(150%, 0);*/
  /*transform: translate(150%, 0);*/
}

/* Span on :hover and :active */
.button-custom .button_learn:hover span,
.button-custom .button_learn:active span {
  opacity: 0;
  /*-webkit-transform: scale(0.3);*/
  /*-moz-transform: scale(0.3);*/
  /*-ms-transform: scale(0.3);*/
  /*-o-transform: scale(0.3);*/
  /*transform: scale(0.3);*/
}

/*  
    We show :before pseudo-element on :hover 
    and :after pseudo-element on :active 
*/
.button-custom .button_learn:hover:before,
.button-custom .button_learn:active:after {
  opacity: 1;
  -webkit-transform: translate(0, 8px);
  -moz-transform: translate(0, 8px);
  -ms-transform: translate(0, 8px);
  -o-transform: translate(0, 8px);
  transform: translate(0, 8px);
  /*-webkit-transition-delay: 0.1s;*/
  /*-moz-transition-delay: 0.1s;*/
  /*-o-transition-delay: 0.1s;*/
  /*transition-delay: 0.1s;*/
  color:#231F20;
}

/* 
  We hide :before pseudo-element on :active
*/
.button-custom .button_learn:active:before {
  /*-webkit-transform: translate(-150%, 0);*/
  /*-moz-transform: translate(-150%, 0);*/
  /*-ms-transform: translate(-150%, 0);*/
  /*-o-transform: translate(-150%, 0);*/
  /*transform: translate(-150%, 0);*/
  -webkit-transition-delay: 0s;
  -moz-transition-delay: 0s;
  -o-transition-delay: 0s;
  transition-delay: 0s;
}
@media only screen and (max-width: 769px) {
    .button-custom .button_learn {
        max-width: 100%;
    }
}

</style>
<a href="#contactus" class="smooth-scroll-button">
<button class="button_learn" type="button" data-hover="Get 100 Free SMS Test Messages" data-active=""><span>Learn More</span></button>
</a>

<script>
// JavaScript code
document.addEventListener('DOMContentLoaded', function() {
  const smoothScrollButtons = document.querySelectorAll('.smooth-scroll-button');

  // Attach click event listener to each button
  smoothScrollButtons.forEach(function(button) {
    button.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent the default behavior of jumping to the anchor directly

      const targetSelector = button.getAttribute('href');
      const targetElement = document.querySelector(targetSelector);

      if (targetElement) {
        // Calculate the target position relative to the current viewport
        const offset = targetElement.getBoundingClientRect().top;

        // Start the smooth scrolling animation
        smoothScrollTo(offset, 1000); // Adjust the second parameter (duration) as needed
      }
    });
  });

  // Function to smoothly scroll to the target position
  function smoothScrollTo(target, duration) {
    const start = window.scrollY || window.pageYOffset;
    const startTime = performance.now();

    function scrollAnimation(currentTime) {
      const timeElapsed = currentTime - startTime;
      const scrollY = easeInOutCubic(timeElapsed, start, target, duration);
      window.scrollTo(0, scrollY);

      if (timeElapsed < duration) {
        requestAnimationFrame(scrollAnimation);
      }
    }

    // Easing function for smoother animation
    function easeInOutCubic(t, b, c, d) {
      t /= d / 2;
      if (t < 1) return c / 2 * t * t * t + b;
      t -= 2;
      return c / 2 * (t * t * t + 2) + b;
    }

    requestAnimationFrame(scrollAnimation);
  }
});

</script>

<?php
return ob_get_clean();
}
add_shortcode('button_learn','button_learn');
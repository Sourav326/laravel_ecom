(function() {
	'use strict';

	var tinyslider = function() {
		var el = document.querySelectorAll('.testimonial-slider');

		if (el.length > 0) {
			var slider = tns({
				container: '.testimonial-slider',
				items: 1,
				axis: "horizontal",
				controlsContainer: "#testimonial-nav",
				swipeAngle: false,
				speed: 700,
				nav: true,
				controls: true,
				autoplay: true,
				autoplayHoverPause: true,
				autoplayTimeout: 3500,
				autoplayButtonOutput: false
			});
		}
	};
	tinyslider();

	


	var sitePlusMinus = function() {

		var value,
    		quantity = document.getElementsByClassName('quantity-container');

		function createBindings(quantityContainer) {
	      var quantityAmount = quantityContainer.getElementsByClassName('quantity-amount')[0];
	      var increase = quantityContainer.getElementsByClassName('increase')[0];
	      var decrease = quantityContainer.getElementsByClassName('decrease')[0];
	      increase.addEventListener('click', function (e) { increaseValue(e, quantityAmount); });
	      decrease.addEventListener('click', function (e) { decreaseValue(e, quantityAmount); });
	    }

	    function init() {
	        for (var i = 0; i < quantity.length; i++ ) {
						createBindings(quantity[i]);
	        }
	    };

	    function increaseValue(event, quantityAmount) {
	        value = parseInt(quantityAmount.value, 10);

	        console.log(quantityAmount, quantityAmount.value);

	        value = isNaN(value) ? 0 : value;
	        value++;
	        quantityAmount.value = value;
	    }

	    function decreaseValue(event, quantityAmount) {
	        value = parseInt(quantityAmount.value, 10);

	        value = isNaN(value) ? 0 : value;
	        if (value > 0) value--;

	        quantityAmount.value = value;
	    }
	    
	    init();
		
	};
	sitePlusMinus();


})()


const iconElements = document.querySelectorAll(".fa-heart");

iconElements.forEach((icon) => {
  icon.addEventListener("click", function() {
    if (this.classList.contains("fa-regular")) {
      this.classList.remove("fa-regular");
      this.classList.add("fa-solid");
    } else {
      this.classList.remove("fa-solid");
      this.classList.add("fa-regular");
    }
  });
});


const bar = document.querySelector('.scroll-fixed-bar');
const fixedSidebar = document.querySelector('.course-detail-sidebar-fixed');
window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;
    const scrollThreshold = 300;
    const scrollThresholdForFixSidebar = 440;

    if (scrollY > scrollThreshold) {
        bar.classList.add('scroll-fixed-bar-show');
    } else {
        bar.classList.remove('scroll-fixed-bar-show');
    }


    if (scrollY > scrollThresholdForFixSidebar) {
        fixedSidebar.classList.add('course-detail-sidebar-fixed-after-scroll');
    } else {
        fixedSidebar.classList.remove('course-detail-sidebar-fixed-after-scroll');
    }
});
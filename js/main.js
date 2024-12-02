(function() {

	"use strict";

	AOS.init({
		duration: 600
	});

	var slider = function(){

		var heroSlider = document.querySelectorAll('.hero-slider');

		if ( heroSlider.length > 0 ) {
			var heroSlider = tns({
				container: '.hero-slider',
				items: 1,
				mode: 'carousel',
				autoplay: true,
			  animateIn: 'tns-fadeIn',
		    animateOut: 'tns-fadeOut',
				speed: 700,
				nav: true,
				controls: false,
				autoplayButtonOutput: false,
			});
		}


		var carouselSlider = document.querySelectorAll('.desti-slider');

		if ( carouselSlider.length > 0 ) {

			var carouselSlider = tns({
				container: '.desti-slider',
				items: 5,
				mode: 'carousel',
				autoplay: true,
			  animateIn: 'tns-fadeIn',
		    animateOut: 'tns-fadeOut',
				speed: 300,
				nav: true,
				gutter: 20,
				controls: false,
				autoplayButtonOutput: false,
				responsive:{
					0:{
						items: 1,
						gutter: 0
					},
					600:{
						items: 2,
						gutter: 20
					},
					1000:{
						items: 4,
						gutter: 20
					}
				}
			});

		}

	}
	slider();
	


	var counter = function() {
		function countUp(elem) {
			var current = elem.innerHTML;


			var timeIntervalBeforeIncrement = 2000/elem.getAttribute("data-count")


			var interval = setInterval(increase, timeIntervalBeforeIncrement);

			function increase() {
				elem.innerHTML = current++;
				if (current > elem.getAttribute("data-count")) {
					clearInterval(interval);
				}
			}

		}

		var span = document.querySelectorAll("[id^='count']");

		var i = 0;
		for (i = 0; i < span.length; i++) {
			countUp(span[i]);
		}
	}


	var elements;
	var windowHeight;

	function init() {
		elements = document.querySelectorAll('.ftco-about-section');
		windowHeight = window.innerHeight;
	}

	function checkPosition() {
		var i;
		for (i = 0; i < elements.length; i++) {
			var element = elements[i];
			var positionFromTop = elements[i].getBoundingClientRect().top;
			if (positionFromTop - windowHeight <= 0) {
				if( !element.classList.contains('viewed') ) {
					element.classList.add('viewed');
					counter();	
				} else {
					if ( element.classList.contains('viewed') ) {

					}
				}
				// console.log('igo');

			}
		}
	}
	window.addEventListener('scroll', checkPosition);
	window.addEventListener('resize', init);

	init();
	checkPosition()


	const lightbox = GLightbox({
	  touchNavigation: true,
	  loop: true,
	  autoplayVideos: true
	});

})()


$(document).ready(function() {
	$('select').select2({
		placeholder: 'please select ...',
		allowClear: false
	});
});

const allCountries = [
	"Afghanistan",
	"Albania",
	"Algeria",
	"Andorra",
	"Angola",
	"Antigua and Barbuda",
	"Argentina",
	"Armenia",
	"Australia",
	"Austria",
	"Azerbaijan",
	"Bahamas",
	"Bahrain",
	"Bangladesh",
	"Barbados",
	"Belarus",
	"Belgium",
	"Belize",
	"Benin",
	"Bhutan",
	"Bolivia",
	"Bosnia and Herzegovina",
	"Botswana",
	"Brazil",
	"Brunei",
	"Bulgaria",
	"Burkina Faso",
	"Burundi",
	"Cabo Verde",
	"Cambodia",
	"Cameroon",
	"Canada",
	"Central African Republic",
	"Chad",
	"Chile",
	"China",
	"Colombia",
	"Comoros",
	"Congo, Democratic Republic of the",
	"Congo, Republic of the",
	"Costa Rica",
	"Croatia",
	"Cuba",
	"Cyprus",
	"Czech Republic",
	"Denmark",
	"Djibouti",
	"Dominica",
	"Dominican Republic",
	"Ecuador",
	"Egypt",
	"El Salvador",
	"Equatorial Guinea",
	"Eritrea",
	"Estonia",
	"Eswatini",
	"Ethiopia",
	"Fiji",
	"Finland",
	"France",
	"Gabon",
	"Gambia",
	"Georgia",
	"Germany",
	"Ghana",
	"Greece",
	"Grenada",
	"Guatemala",
	"Guinea",
	"Guinea-Bissau",
	"Guyana",
	"Haiti",
	"Honduras",
	"Hungary",
	"Iceland",
	"India",
	"Indonesia",
	"Iran",
	"Iraq",
	"Ireland",
	"Israel",
	"Italy",
	"Jamaica",
	"Japan",
	"Jordan",
	"Kazakhstan",
	"Kenya",
	"Kiribati",
	"Korea, North",
	"Korea, South",
	"Kuwait",
	"Kyrgyzstan",
	"Laos",
	"Latvia",
	"Lebanon",
	"Lesotho",
	"Liberia",
	"Libya",
	"Liechtenstein",
	"Lithuania",
	"Luxembourg",
	"Madagascar",
	"Malawi",
	"Malaysia",
	"Maldives",
	"Mali",
	"Malta",
	"Marshall Islands",
	"Mauritania",
	"Mauritius",
	"Mexico",
	"Micronesia",
	"Moldova",
	"Monaco",
	"Mongolia",
	"Montenegro",
	"Morocco",
	"Mozambique",
	"Myanmar",
	"Namibia",
	"Nauru",
	"Nepal",
	"Netherlands",
	"New Zealand",
	"Nicaragua",
	"Niger",
	"Nigeria",
	"North Macedonia",
	"Norway",
	"Oman",
	"Pakistan",
	"Palau",
	"Palestine",
	"Panama",
	"Papua New Guinea",
	"Paraguay",
	"Peru",
	"Philippines",
	"Poland",
	"Portugal",
	"Qatar",
	"Romania",
	"Russia",
	"Rwanda",
	"Saint Kitts and Nevis",
	"Saint Lucia",
	"Saint Vincent and the Grenadines",
	"Samoa",
	"San Marino",
	"Sao Tome and Principe",
	"Saudi Arabia",
	"Senegal",
	"Serbia",
	"Seychelles",
	"Sierra Leone",
	"Singapore",
	"Slovakia",
	"Slovenia",
	"Solomon Islands",
	"Somalia",
	"South Africa",
	"South Sudan",
	"Spain",
	"Sri Lanka",
	"Sudan",
	"Suriname",
	"Sweden",
	"Switzerland",
	"Syria",
	"Taiwan",
	"Tajikistan",
	"Tanzania",
	"Thailand",
	"Timor-Leste",
	"Togo",
	"Tonga",
	"Trinidad and Tobago",
	"Tunisia",
	"Turkey",
	"Turkmenistan",
	"Tuvalu",
	"Uganda",
	"Ukraine",
	"United Arab Emirates",
	"United Kingdom",
	"United States",
	"Uruguay",
	"Uzbekistan",
	"Vanuatu",
	"Vatican City",
	"Venezuela",
	"Vietnam",
	"Yemen",
	"Zambia",
	"Zimbabwe"
];

function populateMonths() {
	const select = document.getElementById('select-destination');
	const currentDate = new Date();
	const currentYear = currentDate.getFullYear();
	const currentMonth = currentDate.getMonth(); // 0 = January, 11 = December
	const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

	for (let year = currentYear; year <= currentYear + 5; year++) {
		for (let month = 0; month < 12; month++) {
			if (year === currentYear && month < currentMonth) continue;

			const option = document.createElement('option');
			option.value = `${months[month]} ${year}`;
			option.textContent = `${months[month]} ${year}`;
			select.appendChild(option);

			if (year === currentYear + 5 && month === currentMonth - 1) break;
		}
	}
}

populateMonths();
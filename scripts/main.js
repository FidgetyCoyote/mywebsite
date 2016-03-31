//JS script for webpage

var defaultButton = document.getElementById("defB");
var inverseButton = document.getElementById("invB");
var navbar = document.querySelector("header");

defaultButton.addEventListener("click", function() {
	console.log("1");
	navbar.className = "navbar-default";
});

inverseButton.addEventListener("click", function() {
	navbar.className = "navbar-inverse";
});

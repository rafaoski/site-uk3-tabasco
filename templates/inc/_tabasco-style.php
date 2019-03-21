<?php namespace ProcessWire; ?>
<style>
/* BASIC HTML ELEMENTS */
h1, h2, h3, h4, h5, span {
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	color: white;
	letter-spacing: 3px;
}
blockquote {
	font-size: 1.5rem;
	color: cadetblue;
}
ul, dd, li {
	color: darkgray;
}
a {
	color: tomato;
	border-color: red;
	letter-spacing: 3px;
}
/* If you want to exclude a given element, add to the link <a class='not-hover'>  ( like in file categories.php before card ) */
a:hover:not(.not-hover) {
	background: black;
	color: aliceblue;
	transition: all .3s ease;
}
/* SVG EFFECT */
.svg-lighten {
	filter: invert(80%);
  transition: all .3s ease;
}
.svg-lighten:hover {
  filter: invert(100%);
}
/* HOVER EFFECT */
.hover {
  opacity: 1;
  transition: all .3s ease;
}
.hover:hover {
  opacity: 0.7;
}
/* UK ACTIVE */
.uk-active a {
	color: tomato !important;
}
/* BREADCRUMBS */
.uk-breadcrumb>*>* {
    font-size: 1.2rem;
}
/* NAVIGATIONS */
nav a {
		letter-spacing: 4px;
		font-size: 1.2rem !important;
}
.uk-navbar-dropdown {
		background: #0f0f0ff0;
		color: #c5baba;
}
.uk-navbar-dropdown ul li a:hover {
		color: tomato;
}
.uk-nav-default .uk-nav-header, .uk-nav-default>li.uk-active>a {
    color: aliceblue;
}
.uk-offcanvas-bar {
    background: #070505e0;
}
/* UK NAV HEADER / UK NAV */
.uk-nav-header {
	font-size: 1.4rem;
}
.uk-nav.uk-nav-default {
	font-size: 1.2rem;
}
/* MASTHEAD LOGO */
#masthead-logo span {
	font-family: 'Plaster', cursive;
	letter-spacing: 15px;
	color: #e32402;
	font-size: 7rem;
}
/* MASTHEAD TAGLINE */
#masthead-tagline {
	font-family: 'Roboto', sans-serif;
	letter-spacing: 5px;
}
/* CONTENT SUMMARY */
#content-summary {
	font-family: 'Roboto', sans-serif;
	color: burlywood;
	font-size: 1.5rem;
	letter-spacing: 5px;
}
/* CONTENT */
#content, p {
	font-family: 'Roboto', sans-serif;
	line-height: 1.7;
	letter-spacing: 2px;
	color: #ddd;
	font-size: 1.2rem;
}
/* SECTION */
.uk-section-secondary {
	background: #09000094;
}
/* BUTTON LINK */
.uk-button-text {
    color: tabasco;
}
.uk-button-text:hover {
    color: white;
}
.uk-button-text:before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    right: 100%;
    border-bottom: 1px solid #85888c;
    transition: right .3s ease-out;
}
/* COMMENTS */
.uk-comment-primary {
    padding: 30px;
    background-color: #0000007a;
}
.uk-form-label {
    color: #a49e9e;
}
.uk-input, .uk-select, .uk-textarea {
    background: #9487873d;
		color: #fffafa;
}
/* CARD */
.uk-card-default {
	background: #0703035e;
	transition: all .3s ease;
}
.uk-card-default .uk-card-title {
	color: #b90a0a;
}
.uk-card-default:hover {
	background: #070303;
	color: #fffafa;
}
.uk-card-default:hover > .uk-card-title {
	background: #070303;
	color: #fffafa;
}
/* On screens that are 992px or less */
@media screen and (max-width: 992px) {
	#masthead-logo span {
		font-size: 3rem;
		letter-spacing: 5px;
	}
	#masthead-tagline {
		letter-spacing: 3px;
	}
}
</style>

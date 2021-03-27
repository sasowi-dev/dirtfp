<style>
  .mega-menu {
    display: none;
    left: 0;
    position: absolute;
    text-align: left;
    width: 100%;
  }
  .hoverable {
    position: static;
  }
  .hoverable > a:after {
    content: "\25BC";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }
  .hoverable:hover .mega-menu {
    display: block;
  }
  .toggleable > label:after {
    content: "\25BC";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }
  .toggle-input {
    display: none;
  }
  .toggle-input:not(checked) ~ .mega-menu {
    display: none;
  }
  .toggle-input:checked ~ .mega-menu {
    display: block;
  }
  .toggle-input:checked + label {
    color: white;
    background: #2c5282;
  }
  .toggle-input:checked ~ label:after {
    content: "\25B2";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }
.socialicons{
	height:1rem;
	}
  </style>

<nav class="relative bg-white border-b-2 border-gray-300 text-gray-900">
  <div class="container mx-auto flex justify-between">
	     <a href="https://flipstore.withun.link/">
    <div class="flex items-center flex-no-shrink relative block p-4 lg:p-6 text-xl text-gray-600">
	 <img src="https://flipstore.withun.link/identity/Group%201.svg" class="h-5" alt="FP play logo area">FP Play</div></a>
      </div>
    </nav>
<div>

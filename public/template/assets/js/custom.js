/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

//costume menu active
var path = location.pathname.split('/')
var url = location.origin + '/' + path [1]
$('ul.sidebar-menu li a').each(function() {
	if ($(this)).attr('href').indexof(url)!== -1 {
		$(this).parent().addclass('active').parent().parent('li').addclass('active')
		
	}
		
}) 
// console.log(url)

//datatables
$(document).ready( function () {
    $('#table1').DataTable();
} );
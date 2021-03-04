<?php
$controller_name_lower = strtolower($controller_name);
$module_name_lower = strtolower($module_name);
$view = "
	'use strict';
	var DatatablesServerSide = function() {

		var initTable1 = function() {
			var table = $('#table');

			// begin first table
			table.DataTable({
				responsive: true,
				processing: true, 
				serverSide: true, 
				lengthMenu: [5, 10, 25, 50, 100],
				pageLength: LIST_LIMIT,
				ajax: {
					url: HOST_URL+'/{$controller_name_lower}/{$module_name_lower}/json_index',
					type: 'POST',
					data:{
						ci_csrf_token: ci_csrf_token
					},
				},
				columnDefs: [
					{
						targets: 0,
						width: '30px',
						orderable: false,
					},
					{
						targets: -1,
						orderable: false,
					},
				],
				order: []
			});
			table.on('change', '.group-checkable', function() {
				var set = $(this).closest('table').find('td:first-child .checkable');
				var checked = $(this).is(':checked');

				$(set).each(function() {
					if (checked) {
						$(this).prop('checked', true);
						$(this).closest('tr').addClass('active');
					}
					else {
						$(this).prop('checked', false);
						$(this).closest('tr').removeClass('active');
					}
				});
			});

			table.on('change', 'tbody tr .checkbox', function() {
				$(this).parents('tr').toggleClass('active');
			});
		};

		return {
			//main function to initiate the module
			init: function() {
				initTable1();
			},
		};

	}();

	jQuery(document).ready(function() {
		DatatablesServerSide.init();
	});

";

echo $view;
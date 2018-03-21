/* see data-tables documentation */

$(document).ready(function () {
			    var table = $('#table_id').DataTable( {
			        // attention!! rowReorder fait que le button ID ne marche pas!!! Ne pas l'utiliser
			        colReorder: true
			    } );

			    // visibility of columns by default - mind the S 'column(s)' for single or multiple cols chosen
			    table.columns( [2, 3, 4, 6, 8, 10, 11, 13, 15, 18, 19, 20, 21, 22] ).visible( false );

			    // CHECK ALL NUMBERS!!!
			    // variables for better handing the buttons for show/hide columns
			    var col_titre = table.column(1);
			    var col_fonds = table.column(2);
			    var col_cote = table.column(3);
			    var col_anciennecote = table.column(4);
			    var col_ensemble = table.column(5);
			    var col_photocopy = table.column(6);
			    var col_type = table.column(7);
			    var col_annote = table.column(8);
			    var col_support = table.column(9);
			    var col_infosupport = table.column(10);
			    var col_instrument = table.column(11);
			    var col_autreinstrument = table.column(12);
			    var col_date = table.column(13);
			    var col_etape = table.column(15);
			    var col_publie = table.column(16);
			    var col_comm = table.column(18);
			    var col_numerise_info = table.column(19);
			    var col_resp = table.column(20);

			    // scripts for show/hide each column
			    $("#check_titre").click(function(){
				    col_titre.visible(!col_titre.visible());
				});
				 $("#check_fonds").click(function(){
				    col_fonds.visible(!col_fonds.visible());
				});
			    $("#check_cote").click(function(){
				    col_cote.visible(!col_cote.visible());
				});
				$("#check_anciennecote").click(function(){
				    col_anciennecote.visible(!col_anciennecote.visible());
				});
				$("#check_ensemble").click(function(){
				    col_ensemble.visible(!col_ensemble.visible());
				});
				$("#check_type").click(function(){
				    col_type.visible(!col_type.visible());
				});
				$("#check_annote").click(function(){
				    col_annote.visible(!col_annote.visible());
				});
				$("#check_support").click(function(){
				    col_support.visible(!col_support.visible());
				});
				$("#check_infosupport").click(function(){
				    col_infosupport.visible(!col_infosupport.visible());
				});
				$("#check_instrument").click(function(){
				    col_instrument.visible(!col_instrument.visible());
				});
				$("#check_autreinstrument").click(function(){
				    col_autreinstrument.visible(!col_autreinstrument.visible());
				});
				$("#check_date").click(function(){
				    col_date.visible(!col_date.visible());
				});
				$("#check_etape").click(function(){
				    col_etape.visible(!col_etape.visible());
				});
				$("#check_publie").click(function(){
				    col_publie.visible(!col_publie.visible());
				});
				$("#check_comm").click(function(){
				    col_comm.visible(!col_comm.visible());
				});
				$("#check_resp").click(function(){
				    col_resp.visible(!col_resp.visible());
				});
				$("#check_photocopy").click(function(){
				    col_photocopy.visible(!col_photocopy.visible());
				});
				$("#check_numerise_info").click(function(){
				    col_numerise_info.visible(!col_numerise_info.visible());
				});


			} );


			function checkAll(ele) {
			     var checkboxes = document.getElementsByTagName('input');
			     if (ele.checked) {
			         for (var i = 0; i < checkboxes.length; i++) {
			             if (checkboxes[i].type == 'checkbox') {
			                 checkboxes[i].checked = true;
			             }
			         }
			     } else {
			         for (var i = 0; i < checkboxes.length; i++) {
			             console.log(i)
			             if (checkboxes[i].type == 'checkbox') {
			                 checkboxes[i].checked = false;
			             }
			         }
			     }
			 }

			
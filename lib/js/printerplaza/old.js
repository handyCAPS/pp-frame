function sendToPage(e, field) {
	if(e && e.keyCode == 13) {
		var link = "/Stock/List/gotoPage/".concat(field.value);
		document.forms["paginationPageForm"].action=link;
	}
}

$(document).ready(function() {
		/* Add clickable column sort */
		$(".sortColumn th a[href]").click(function() {
			var fieldName = $(this).prop('name');
			var fieldClass = $(this).prop('class');
			if (typeof fieldName === "undefined" ||
					   fieldName == "") {
				//Error no fieldname defined
			} else {
				$(".fa-chevron-down, .fa-chevron-up").each(function(i, el) {
					$(el).removeClass("fa-chevron-down fa-chevron-up");
				});
				if (typeof fieldClass === "undefined"||
						   fieldClass == "") {
					$(this).addClass("fa fa-chevron-up");
					$(this).prop('href',"/Stock/List/Sort/"+fieldName+" asc")
				} else if (fieldClass == "fa fa-chevron-down") {
					$(this).addClass("fa fa-chevron-up");
					$(this).prop('href',"/Stock/List/Sort/"+fieldName+" asc")
				} else if (fieldClass == "fa fa-chevron-up") {
					$(this).addClass("fa fa-chevron-down");
					$(this).prop('href',"/Stock/List/Sort/"+fieldName+" desc")
				}
			}
		});
	});

	function setSortColumn(sorting) {
		//Split on space
		var valueArray = sorting.split(" ");
		if (valueArray.length == 1) {
			//No asc or desc set for current orderby, default is asc
			valueArray[1] = "asc";
		}
		if (valueArray[0] === "undefined") {
			//No sorting defined
		} else if (valueArray[1] === "undefined" ||
				   valueArray[1] == "" ||
				   valueArray[1] == "asc" ) {
			//Set up arrow
			$(".sortColumn th a[name="+valueArray[0]+"]").addClass("fa fa-chevron-up");
		} else {
			//Set down arrow
			$(".sortColumn th a[name="+valueArray[0]+"]").addClass("fa fa-chevron-down");
		}
	}

	$(document).ready(function() {
		//Add autocomple to all input fields with class "input_search"
		$(".input-search").each(function(i, val) {
			var fieldName = $(this).attr('name');
			$(this).autocomplete({
				source: function(request, response) {
            		$.ajax({
                		url: '/inc/autocomplete.php',
	                	dataType: "json",
	    	            data: {
    	    	            term : request.term,
        		            field: fieldName
            		    },
                		success: function(data) {
                    		response(data);
		                }
    		        });
        		},
        		minLength: 2,
				select: function(event, ui) {
    	    		if(ui.item){
        	    		$(event.target).val(ui.item.value);
        	    		//Check for auto complete on input field with id field
        	    		var searchName = $(event.target).attr("id");
        	    		var searchID   = searchName + "_id";
        	    		var idField = $("input[id="+searchID+"]");
        	    		if (typeof(idField) != "undefined") {
	        	    		idField.val(ui.item.id);
        	    		}
        			}
        			$('#search').submit();
				}
			});
		});

		//Initialise tinemce
		tinymce.init({
			selector: '.ppmce'
		});

		/**
		 * Set indication on column that is used to sort a list.
		 * The parameter is set while defining smarty variables.
		 */
		setSortColumn("");

		// Set the update fields in article list table header to not displayed
		$("#updateFields").hide();

	});


	/*
	 * In a table with records only one record can have a default
	 * indication. Browse through all records and set the default
	 * value to unchecked for all other records.
	 * Then do an ajax call to change the database.
	 * Example: Default supplier for an article
     */
	function setDefault(cb, fk_id, rec_id) {
        var fieldName   = $(cb).attr('id');
		var tableName   = $(cb).closest('table').attr('id');
		var rowName     = $(cb).closest('tr').attr('id');

		//alert("Clicked: " + cb.checked + ", Table: "+ tableName + ", rowName: " + rowName);
		//Browse through records and uncheck defaults for other records
		$('#'+tableName+' tbody tr').each(function(i1, val1){
			var currentRow = $(val1).attr('id');
			if ( currentRow != rowName) {
				$(this).find('#'+fieldName).each(function(i2, val2) {
					$(val2).prop('checked', false);
				});
			}
		});
		//Do ajax call to update the database
		$.ajax({
		    url : "/inc/setdefault.php",
		    data : {
			    field: fieldName,
			    fk_id: fk_id,
			    rec_id: rec_id
			}
		});

		//For table arti_suar_table recalculate price
		if (tableName == "suar") {
			updatePrice("sd", 0);
		}
	};

	/*
	 * Started from search template ((*)_search.tpl) to clear search
	 * values from the search fields.
	 * This is followed by form submit() by default
	 *
	 * CAUTION:
     * 	Does not work for checkboxes and redio buttons
	 */
	function resetForm(formName) {
//		alert("resetForm: " + formName);
		$('#'+formName).find('input:text, input:password, input:file, select, textarea').val('');
	}

	/*
	 * When the checkbox in the header of a list view is checked this function
	 * is triggered. It will set all checkboxes of table records to "checked".
	 *
	 */
	function checkAll(tableName) {
		var cbValue = $('.checkAll').prop('checked');
//		alert("checkAll: " + tableName + ", Value: " + cbValue);
		$('#'+tableName+' tbody tr').each(function(i, el) {
			$(el).find('.checkOne').prop('checked', cbValue);
		});
	}

	/**
	 * This function addsa an sort indication to the column of
	 * a table. arrow up is ascending, arrow down is descending.
	 */
	function setSortColumn(sorting) {
		//Split on space
		var valueArray = sorting.split(" ");
		if (valueArray.length == 1) {
			//No asc or desc set for current orderby, default is asc
			valueArray[1] = "asc";
		}
		if (valueArray[0] === "undefined") {
			//No sorting defined
		} else if (valueArray[1] === "undefined" ||
				   valueArray[1] == "" ||
				   valueArray[1] == "asc" ) {
			//Set up arrow
			$(".sortColumn th a[name="+valueArray[0]+"]").addClass("fa fa-chevron-up");
		} else {
			//Set down arrow
			$(".sortColumn th a[name="+valueArray[0]+"]").addClass("fa fa-chevron-down");
		}
	}

	/**
	 * This function is started when in the article list view the "show update"
	 * or "hide" is clicked. It toggles visibility of the update fields in the
	 * header of the list table for articles.
	 */
	function toggleUpdate(action) {
		if (action == "expand") {
			document.getElementById("updateFields").style.display = "";
			document.getElementById("expandUpdate").style.display = "none";
		} else {
			document.getElementById("updateFields").style.display = "none";
			document.getElementById("expandUpdate").style.display = "";
		}
	}

	/**
	 * This function is started when one of the fields is changed that
	 * causes a recalculation of the "calculated price" for articles.
	 * sd: Default Supplier changed
	 * sp: arti_selling_price changed (fixed price)
	 * em: arti_euro_margin changed
	 * pm: arti_percentage_margin changed
	 */
	function updatePrice(fld, vl) {
		var updateType = fld;
		var typeValue = parseFloat(vl);
		var newprice = 0; //Start with 0 newPrice.
		if (fld == "sd") {
			//Default supplier changed, new purchase price
			var mp = $('input[name="arti_percentage_margin"]').val();
			var me = $('input[name="arti_euro_margin"]').val();
			var sp = $('input[name="arti_selling_price"]').val();
			mp = parseFloat(mp);
			me = parseFloat(me);
			sp = parseFloat(sp);
			if (!isNaN(mp) && mp != "" && mp >= 0) {
				updateType = "pm";
				typeValue  = mp;
			} else if (!isNaN(me) && me != "" && me > 0) {
				updateType = "em";
				typeValue  = me;
			} else if (!isNaN(sp) && sp != "" && sp > 0) {
				updateType = "sp";
				typeValue  = sp;
			}
		} else {
			if (isNaN(typeValue)) {
				typeValue = 0; //Assure we have a value typeValue
			}
		}
		if (updateType == "sp" && typeValue != "" && typeValue >= 0) {
			//Fixced Selling Price
			$('input[name="arti_percentage_margin"]').val("");
			$('input[name="arti_euro_margin"]').val("");
			newprice = typeValue;
		} else {
	        var purchase = getPurchasePrice();
			if (updateType == "pm" && typeValue != "" && typeValue >= 0 ) {
				//Percentage Margin
				$('input[name="arti_selling_price"]').val("");
				$('input[name="arti_euro_margin"]').val("");
				newprice = purchase * (1 + (typeValue/100));
			} else if (updateType == "em" && typeValue != "" && typeValue >= 0 ) {
				//Euro Margin
				$('input[name="arti_selling_price"]').val("");
				$('input[name="arti_percentage_margin"]').val("");
				newprice = purchase + typeValue;
			}
		}
		if (newprice > 0) {
			//A new price has been set. So set ui price
			$('input[name="arti_calculated_price"]').val(newprice.toFixed(2));
		} else {
			//Empty ui price
			$('input[name="arti_calculated_price"]').val("");
		}
	}

	/**
	 * When "euro margin" or "percentage margin" in an article is changed.
	 * the purchase price of the default supplier is required to calculate
	 * a new selling price. This function finds the default supplier and its
	 * purchase price.
	 */
	function getPurchasePrice() {
		var returnPrice = "";
		$('table#suar tbody tr').each(function(i1, val1){
			var def = $(val1).find('#suar_default');
			var price = $(val1).find('#suar_purchase_price');
			if ($(def).prop('checked') ) {
				returnPrice = $(price).html();
			}
		});
		return parseFloat(returnPrice);
	}

	function updateList() {
		var lpPrice      = $('input[name="arti_list_price"]').val();
		var lpPercentage = $('input[name="arti_list_price_percentage"]').val();
		lpPrice = parseFloat(lpPrice);
		lpPercentage = parseFloat(lpPercentage);
		if (isNaN(lpPrice)) {
			lpPrice = 0;
		}
		if (isNaN(lpPercentage)) {
			lpPercentage = 0;
		}
		var lpSelling    = lpPrice * (1 - (lpPercentage/100));
		$('input[name="arti_minimum_price"]').val(lpSelling);
	}
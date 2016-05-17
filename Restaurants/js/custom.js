		function addRowTo_Dish_Prices()
		{
			var table_dish_pricesRef= document.getElementById("dish_prices");
			var newRow= table_dish_pricesRef.insertRow(table_dish_pricesRef.rows.length);
			var newCell1= newRow.insertCell(0);
			var newCell2= newRow.insertCell(1);
			
			newCell1.innerHTML="<input type='text' class='form-control sizeList' name='' autocomplete='off'/>";
			newCell2.innerHTML="<input type='text' class='form-control ' name=''/>";
			
			var options = {
				url: "data/portion_size.json",
				getValue: "name",
				list: {
				
					match: {
						enabled: true
					}
				},
				theme: "bootstrap"
			};
			$(".sizeList").easyAutocomplete(options);
		}
		function removeRows_Dish_Prices()
		{
			if(2<=(dish_prices.rows.length-1))
			{
				document.getElementById("dish_prices").deleteRow(dish_prices.rows.length-1);
			}
			else
			{
				alert("Sorry, can't remove anymore rows");
			}
			
			
		}
		
		
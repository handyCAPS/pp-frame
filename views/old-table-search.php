		<tr class="meta">
			<form id="search" action="/Stock/List">
			<td>Artikel</td>
			<td colspan="2">
				<input type="text"
				       class="input-search"
			    	   id="arse_serialnumber"
				       name="arse_serialnumber"
				       value=""
				       placeholder="Serienummer">
			</td>
			<td>
				<input type="text"
				       class="input-search"
				       id="arti_number"
				       name="arti_number"
				       value=""
				       placeholder="Artikelnummer ...">
			</td>
			<td>
				<input type="text"
				       class="input-search"
				       id="arti_ean"
				       name="arti_ean"
				       value=""
				       placeholder="EAN ...">
			</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="meta">
			<td>
				<input type="submit" id="searchButton" name="searchButton" class="button search_button small" value="Zoek">
			</td>
			<td>
				<input type="text"
				       id="arti_name"
				       class="input-search"
				       name="arti_name"
				       value=""
				       placeholder="Omschrijving ...">
			</td>
			<td>
				<input type="text"
				       id="stoc_amount"
				       class="input-search"
				       name="stoc_amount"
				       value=""
				       placeholder="Aantal ...">
			</td>
			<td>
				<input type="text"
				       id="stoc_free"
				       class="input-search"
				       name="stoc_free"
				       value=""
				       placeholder="Vrij ...">
			</td>
			<td>
				<input type="text"
				       id="stoc_backorder"
				       class="input-search"
				       name="stoc_backorder"
				       value=""
				       placeholder="Backorder ...">
			</td>
			<td>
				<input type="text"
				       id="stoc_reserved"
				       class="input-search"
				       name="stoc_reserved"
				       value=""
				       placeholder="Gereserveerd ...">
			</td>
			<td>
				<input type="submit"
				       id="resetButton"
				       name="resetButton"
				       class="button search_button small"
				       value="Reset"
				       formaction="/Stock/List/resetSearch">
			</td>
		</form>
		</tr>

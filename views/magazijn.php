<div class="pagination wrap">
<ul class="left">
<li class="pagination_link first active"><a href="/StockLocation/List/First">First</a></li>
<li class="pagination_link previous active"><a href="/StockLocation/List/Previous">Previous</a></li>

<li class="pagination_link active"><a href="/StockLocation/List/gotoPage/1">1</a></li>
<li class="pagination_link next active"><a href="/StockLocation/List/Next">Next</a></li>
<li class="pagination_link last active"><a href="/StockLocation/List/Last">Last</a></li>
<li class="pagination_link active"><a href="#">Pages 1/1</a></li>
<li class="pagination_link active"><a href="#">Total 22</a></li>
<form id="paginationPageForm">
<li><input type="number" class="pagination_link" value="1" onkeypress="sendToPage(event, this)"></li>
</form>
</ul>
</div>

<table id="stlo">
<thead>
<tr>
<form id="search" action="/StockLocation/List">
<td>
<input type="submit" id="searchButton" name="searchButton" class="button search_button small" value="Zoek">
</td>
<td>
<input type="text"
id="stlo_name"
class="input-search"
name="stlo_name"
value=""
placeholder="Naam ...">
</td>
<td></td>
<td></td>
<td>
<input type="submit"
id="resetButton"
name="resetButton"
class="button search_button small"
value="Reset"
formaction="/StockLocation/List/resetSearch">
</td>
</form>
</tr>
<tr class="sortColumn">
<th><a name="stlo_id" href="#">ID</a></th>
<th><a name="stlo_name" href="#">Naam</a></th>
<th><a name="stlo_dock_location" href="#">Dock Lokatie?</a></th>
<th>Bewerk</th>
<th>Verwijder</th>
</tr>
</thead>
<tbody>
<tr id="stlo16">
<td>16</td>
<td>12</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/16"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/16"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo5">
<td>5</td>
<td>2</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/5"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/5"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo24">
<td>24</td>
<td>ARTI-SERIAL</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/24"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/24"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo12">
<td>12</td>
<td>B2-03-1A</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/12"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/12"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo21">
<td>21</td>
<td>BA-TE-01</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/21"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/21"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo23">
<td>23</td>
<td>BA-TE-02</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/23"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/23"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo1">
<td>1</td>
<td>E</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/1"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/1"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo8">
<td>8</td>
<td>E2-02-1A</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/8"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/8"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo13">
<td>13</td>
<td>E2-03-1A</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/13"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/13"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo9">
<td>9</td>
<td>E3-01-1A</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/9"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/9"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo11">
<td>11</td>
<td>E4-01-1A</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/11"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/11"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo3">
<td>3</td>
<td>E5-01-1A</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/3"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/3"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo2">
<td>2</td>
<td>E6-01-1A</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/2"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/2"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo6">
<td>6</td>
<td>F</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/6"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/6"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo10">
<td>10</td>
<td>F3-03-1A</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/10"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/10"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo7">
<td>7</td>
<td>F4-03-1A</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/7"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/7"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo22">
<td>22</td>
<td>INBOEK</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
    checked >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/22"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/22"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo4">
<td>4</td>
<td>XX-XX-XX</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/4"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/4"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo19">
<td>19</td>
<td>Z1-01-1A</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/19"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/19"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo18">
<td>18</td>
<td>Z2-01-1A</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/18"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/18"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo20">
<td>20</td>
<td>Z3-01-1A</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/20"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/20"><i class="fa fa-times-circle"></i></a></td>
</tr>
<tr id="stlo17">
<td>17</td>
<td>Z4-01-1A</td>
<td>
<input disabled
   type="checkbox"
   name="stlo_dock_location"
   value="1"
   class="left"
   >
</td>
<td class="center edit-icon"><a href="/StockLocation/Form/get/17"><i class="fa fa-edit"></i></a></td>
<td class="center edit-icon"><a href="/StockLocation/List/remove/17"><i class="fa fa-times-circle"></i></a></td>
</tr>
</tbody>
</table>
<div id="paginationWrapBottom" class="">

<div class="pagination wrap">
<ul class="left">
<li class="pagination_link first active"><a href="/StockLocation/List/First">First</a></li>
<li class="pagination_link previous active"><a href="/StockLocation/List/Previous">Previous</a></li>

<li class="pagination_link active"><a href="/StockLocation/List/gotoPage/1">1</a></li>
<li class="pagination_link next active"><a href="/StockLocation/List/Next">Next</a></li>
<li class="pagination_link last active"><a href="/StockLocation/List/Last">Last</a></li>
<li class="pagination_link active"><a href="#">Pages 1/1</a></li>
<li class="pagination_link active"><a href="#">Total 22</a></li>
<form id="paginationPageForm">
<li><input type="number" class="pagination_link" value="1" onkeypress="sendToPage(event, this)"></li>
</form>
</ul>
</div>
</div><!--  end paginationWrapTop  -->
</div><!--  end tableWrap  -->
</div><!--  end stloWrap  -->
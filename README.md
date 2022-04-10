
**GET** api/v1/item
<table class="table-fixed align-left text-sm mt-5">

<thead class="border">

<tr class="border">

<th class="border border-gray-300 pl-2 pr-16 pt-1 pb-1 w-min text-left bg-gray-200">No.</th>

<th class="border border-gray-300 pl-2 pr-16 pt-1 pb-1 w-min text-left bg-gray-200">Attributes</th>

<th class="border border-gray-300 pl-2 pr-16 pt-1 pb-1 w-min text-left bg-gray-200">Type</th>

<th class="border border-gray-300 pl-2 pr-16 pt-1 pb-1 w-min text-left bg-gray-200">Rules</th>

</tr>

</thead>

<tbody>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">1</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">name</td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span class="">String</span></td>


<td class="border pl-3 pr-2 break-all"></td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">2</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">category_id</td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span>Numeric</span></td>


<td class="border pl-3 pr-2 break-all">



</td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">3</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">category_name</td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-green-100 bg-green-500 rounded">String</span></td>


<td class="border pl-3 pr-2 break-all"></td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">4</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">min_price</td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span>Numeric</span></td>


<td class="border pl-3 pr-2 break-all">


</td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">5</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">max_price</td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span>Numeric</span></td>


<td class="border pl-3 pr-2 break-all">



</td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">6</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">is_published</td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-green-400 rounded">Boolean</span></td>


<td class="border pl-3 pr-2 break-all"></td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">7</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">is_not_deleted</td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-green-400 rounded">Boolean</span></td>


<td class="border pl-3 pr-2 break-all"></td>

</tr>

</tbody>

</table>
----------------------------------------------------------------------------<br><br><br>


**POST** api/v1/item/create
<table class="table-fixed align-left text-sm mt-5">

<thead class="border">

<tr class="border">

<th class="border border-gray-300 pl-2 pr-16 pt-1 pb-1 w-min text-left bg-gray-200">No.</th>

<th class="border border-gray-300 pl-2 pr-16 pt-1 pb-1 w-min text-left bg-gray-200">Attributes</th>

<th class="border border-gray-300 pl-2 pr-16 pt-1 pb-1 w-min text-left bg-gray-200">Type</th>


<th class="border border-gray-300 pl-2 pr-16 pt-1 pb-1 w-min text-left bg-gray-200">Rules</th>

</tr>

</thead>

<tbody>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">1</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">name <sup class="text-red-500 font-bold">*required</sup></td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-green-100 bg-green-500 rounded">String</span></td>


<td class="border pl-3 pr-2 break-all"></td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">2</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">price <sup class="text-red-500 font-bold">*required</sup></td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span>Numeric</span></td>


<td class="border pl-3 pr-2 break-all">


</td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">3</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">is_published <sup class="text-red-500 font-bold">*required</sup></td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-green-400 rounded">Boolean</span></td>


<td class="border pl-3 pr-2 break-all"></td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">4</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">categories <sup class="text-red-500 font-bold">*required</sup></td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-blue-200 rounded">Array</span></td>


<td class="border pl-3 pr-2 break-all">

<div class="font-mono">min:2 <span class="text-gray-900 font-bold">|</span> max:10 </div>

</td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">5</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">categories.*</td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-blue-200 rounded">Array</span></td>


<td class="border pl-3 pr-2 break-all">

<div class="font-mono">min:1 <span class="text-gray-900 font-bold">|</span> max:2</div>

</td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">6</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">categories.*.id </td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span>Numeric</span></td>


<td class="border pl-3 pr-2 break-all">

<div class="font-mono"> required_without:categories.*.name</div>

</td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">7</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">categories.*.name </td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-green-100 bg-green-500 rounded">String</span></td>


<td class="border pl-3 pr-2 break-all">

<div class="font-mono">required_without:categories.*.id</div>

</td>

</tr>

</tbody>

</table>
----------------------------------------------------------------------------<br><br><br>

**POST** api/v1/category/create
<table class="table-fixed align-left text-sm mt-5">

<thead class="border">

<tr class="border">

<th class="border border-gray-300 pl-2 pr-16 pt-1 pb-1 w-min text-left bg-gray-200">No.</th>

<th class="border border-gray-300 pl-2 pr-16 pt-1 pb-1 w-min text-left bg-gray-200">Attributes</th>

<th class="border border-gray-300 pl-2 pr-16 pt-1 pb-1 w-min text-left bg-gray-200">Type</th>


<th class="border border-gray-300 pl-2 pr-16 pt-1 pb-1 w-min text-left bg-gray-200">Rules</th>

</tr>

</thead>

<tbody>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">1</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">name <sup class="text-red-500 font-bold">*required</sup></td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-green-100 bg-green-500 rounded">String</span></td>


<td class="border pl-3 pr-2 break-all"></td>

</tr>

</tbody>

</table>
----------------------------------------------------------------------------<br><br><br>

**PATCH** api/v1/item/{item}/edit
<table class="table-fixed align-left text-sm mt-5">

<thead class="border">

<tr class="border">

<th class="border border-gray-300 pl-2 pr-16 pt-1 pb-1 w-min text-left bg-gray-200">No.</th>

<th class="border border-gray-300 pl-2 pr-16 pt-1 pb-1 w-min text-left bg-gray-200">Attributes</th>

<th class="border border-gray-300 pl-2 pr-16 pt-1 pb-1 w-min text-left bg-gray-200">Type</th>

<th class="border border-gray-300 pl-2 pr-16 pt-1 pb-1 w-min text-left bg-gray-200">Rules</th>

</tr>

</thead>

<tbody>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">1</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">name</td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-green-100 bg-green-500 rounded">String</span></td>

<td class="border pl-3 pr-2 break-all"></td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">2</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">price</td>

<td class="border pl-3 pt-1 pb-1 pr-2"><div class="font-mono">Numeric</div></td>

<td class="border pl-3 pr-2 break-all">



</td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">3</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">is_published</td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-green-400 rounded">Boolean</span></td>

<td class="border pl-3 pr-2 break-all"></td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">4</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">categories</td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-blue-200 rounded">Array</span></td>

<td class="border pl-3 pr-2 break-all">

<div class="font-mono">min:2 <span class="text-gray-900 font-bold">|</span> max:10</div>

</td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">5</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">categories.*</td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-gray-800 bg-blue-200 rounded">Array</span></td>

<td class="border pl-3 pr-2 break-all">

<div class="font-mono">min:1 <span class="text-gray-900 font-bold">|</span> max:2</div>

</td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">6</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">categories.*.id </td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span>Numeric</span></td>


<td class="border pl-3 pr-2 break-all">

<div class="font-mono"> required_without:categories.*.name</div>

</td>

</tr>

<tr class="border">

<td class="border pl-3 pt-1 pb-1 pr-2">7</td>

<td class="border pl-3 pt-1 pb-1 pr-2 bg-gray-200">categories.*.name </td>

<td class="border pl-3 pt-1 pb-1 pr-2"><span class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-green-100 bg-green-500 rounded">String</span></td>


<td class="border pl-3 pr-2 break-all">

<div class="font-mono">required_without:categories.*.id</div>

</td>

</tr>

</tbody>

</table>

----------------------------------------------------------------------------<br><br><br>

**DELETE** api/v1/item/{item}/delete

----------------------------------------------------------------------------<br><br><br>

**DELETE** api/v1/category/{category}/delete

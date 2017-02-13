<div>
    <table class="table">
        <caption>Purchases made</caption>
    	<thead>
    		<th>ID</th>
    		<th>Item</th>
    		<th>Date</th>
    		<th>Time</th>
    	</thead>
    	<tbody>
        {p_data}
            <tr>
        		<td>{p_id}</td>
        		<td>{item}</td>
        		<td>{p_date}</td>
        		<td>{p_time}</td>
            </tr>
        {/p_data}
    	</tbody>
    </table>
</div>


<div>
    <table class="table">
        <caption>Assemblies</caption>
    	<thead>
    		<th>ID</th>
    		<th>Piece ID</th>
    		<th>Action</th>
    		<th>Date</th>
    		<th>Time</th>
    	</thead>
    	<tbody>
            {a_data}
            <tr>
        		<td>{a_id}</td>
        		<td>{piece_id}</td>
        		<td>{action}</td>
        		<td>{a_date}</td>
        		<td>{a_time}</td>
            </tr>
            {/a_data}
    	</tbody>
    </table>
</div>


<div>
    <table class="table">
    <caption>Shipments</caption>
    	<thead>
    		<th>ID</th>
    		<th>Office</th>
    		<th>Date</th>
    		<th>Time</th>
    	</thead>
    	<tbody>
            {s_data}
            <tr>
        		<td>{s_id}</td>
        		<td>{office}</td>
        		<td>{s_date}</td>
        		<td>{s_time}</td>
            </tr>
            {/s_data}
    	</tbody>
    </table>
</div>
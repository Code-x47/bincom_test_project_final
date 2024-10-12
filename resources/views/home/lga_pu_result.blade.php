<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LGA_PU_RESULT Table</title>
	<meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="asset/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="asset/table.css">
</head>
<body>

    <div class="table">
    	<div class="table-header">
    		<h1> LGA PU RESULTS</h1>
    		<div>
    			<input placeholder="Search...">
    			<button class="add_new"><i class="fa fa-search"></i></button>
    		</div>
    	</div>
        <div class="table_section">
        	<table>
        		<thead>
                <tr>
        			
        			<th>Polling Unit Name</th>
                    <th>Party_Abbreviation</th>
                    <th>Party Score</th>
        			<th>Action</th>
                </tr>     
                </thead>

                <?php
                $total = 0;
                $lga_id;
                ?>
        @foreach($data AS $result)
        		<tbody>
        			<tr>
        				
        				<td>{{$result->polling_unit_name}}</td>
                        <td>{{$result->party_abbreviation}}</td>
                        <td>{{$result->party_score}}</td>
                        <td>        
        				  <button>Edit</button>
                          <button>Delete</button>
                        </td>
        			</tr>
        		</tbody>
        <?php

         $total = $total + $result->party_score;

         $lga_id = $result->lga_name

        ?>

        @endforeach        

       
        </table>
       <br><br>
      
    <h2 style="text-align:center"> From <i style="color: steelblue">{{$lga_id}}</i> LGA PU Results, the Total Party Score from all polling unit in this LGA is <i style="color: steelblue">{{$total}}</i></h2>
        </div>
       

    </div>

</body>
</html>
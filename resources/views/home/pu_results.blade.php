<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>POLLING_UNIT_RESULT TABLE</title>
	<meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="asset/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="asset/table.css">
</head>
<body>

    <div class="table">
    	<div class="table-header">
    		<h1> POLLING UNITS RESULTS</h1>
    		<div>
    			<input placeholder="Search...">
    			<button class="add_new"><i class="fa fa-search"></i></button>
    		</div>
    	</div>
        <div class="table_section">
        	<table>
        		<thead>
                <tr>
        			
        		
                    <th>Party_Abbreviation</th>
                    <th>Party Score</th>
                    <th>Entered By</th>
        			<th>Action</th>
                </tr>     
                </thead>

              @foreach($data AS $info)
        		<tbody>
        			<tr>
        				<td>{{$info['party_abbreviation']}}</td>

                        <td>{{$info['party_score']}}</td>

                        <td>{{$info['entered_by_user']}}</td>

        				
                        <td>        
        				  <button><a>Edit</a></button>
                          <button>Delete</button>
                        </td>
        			</tr>
        		</tbody>
        

        @endforeach        

       
        </table>
       
      
    

    </div>

</body>
</html>
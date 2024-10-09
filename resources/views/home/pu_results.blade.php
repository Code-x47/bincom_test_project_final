{{-- @extends('home.dashboard') --}}
<table border="1" style="width:1100px">
    <tr>
        <th>Party Abbreviation</th>
        <th>Party Score</th>
        <th>Entered by user</th>
    </tr>

@foreach($data as $info)

<tr>
<td>{{$info['party_abbreviation']}}</td>

<td>{{$info['party_score']}}</td>

<td>{{$info['entered_by_user']}}</td>


</tr>




@endforeach




</table>
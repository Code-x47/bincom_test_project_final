@extends("home.dashboard")

@section("content1")

<section class="container">
    <header>Select Polling Unit To View Individual Result</header>
    <form action="puResult" class="form" method="GET">
     <div class="input-box address">
        <label>Select Polling Unit</label>
       
          <div class="select-box">
            <select name="search">
              <option hidden>Polling Units</option>
              <option value="8">Sapele Ward</option>
              <option value="9">Primary School in Aghara</option>
              <option value="10">Isehere Primary School</option>
              <option value="11">Igini Primary School</option>
              <option value="12">Umukpawa poll unit</option>
            </select>
          
      </div>
      <button>Submit</button>
    </form>
  </section>

@endsection






@section('content2')

<section class="container" style="margin-top: -40%">
    <header>Verify Result By LGA</header>
    <form action="lgaResult" class="form" method="GET">
     <div class="input-box address">
        <label>Verify Result By LGA</label>
       
          <div class="select-box">
            <select name="search">
              <option hidden>Local Government Areas</option>
              <option value="17">Sapele LGA</option>
              <option value="19">Ugheli North</option>
              <option value="34">Warri South</option>
            </select>
          
      </div>
      <button>Submit</button>
    </form>
  </section>
@endsection


@section("content3")
<section class="container" style="margin-top: -40%">
    <header>Store Collated Result Of Emergency polling Unit</header>
    <form action="newUnit" class="form" method="Post">
       @csrf
        <div class="input-box address">
            <label>Result ID</label>
            <input type="text" placeholder="Enter Result Id" name="resultId" required />

            <label>Party Score</label>
            <input type="text" placeholder="Enter score" name="score" required />

            <label>Party Name</label>
            <input type="text" placeholder="Enter The Party Name" name="partyName" required />

            <label>User Details</label>
            <input type="text" placeholder="Please Tell us Your Name" name="name" required />
        </div>    
     <button>Submit</button>
    </form>
  </section>



@endsection
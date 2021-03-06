{{--  Properties@Edit  --}}
@extends ('layouts.app') 
@section ('content')
<div class='container'>
    {{--  Shows current property information for reference  --}}
    <h2>{{$property->addr}}</h2>
    <hr>
    <b>Community: </b>{{$property->community}}<br>
    <b>Addr: </b>{{$property->addr}}<br>
    <b>Addr2: </b>{{$property->addr2}}<br>
    <b>City: </b>{{$property->city}}<br>
    <b>State: </b> {{$property->state}}<br>
    <b>Zip: </b> {{$property->zip}}<br>
    <hr>
    <b>Tenant: </b> {{--$property->tenant--}}<br>
    <b>Lease Date: </b> {{$property->lease_date}}<br>
    <b>Rent: </b>${{$property->rent}}<br>
    <br>
    {{--  This is the form to edit the property  --}}
    <form method="post" action="/properties/{{$property->id}}">
        {{ csrf_field() }} {{ method_field('PATCH') }}
        <div class="input-field col s12">
            <input name="lease_date" type="date" id="lease_date" class="validate" placeholder="Update Lease Date"></textarea>
            <label for="lease_date"></label>
        </div>
        <div class="input-field col s12">
            <input name="rent" type="text" id="rent" class="validate" placeholder="Update Rent"></textarea>
            <label for="rent"></label>
        </div>
        <button class='btn grey' id=submit>
            Submit
          </button>
    </form>

</div>
@endsection
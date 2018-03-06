{{-- Three Day Notice Form --}} 
@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="form">
        {{-- Heading --}}
        <h5>Three-Day Notice to Tenant</h5>
        <h5>Demand for Payment or Possession</h5>
        <b id='statute'> Florida Statutes 83.56</b>
        <br>
        <p style='text-align:left'>Seminole County, Florida</p>
        <p style='text-align:right'>November 13, 2012</p>
        <br>
        <p>Tenant</p>
        <p>Address</p>
        <p>City State Zip</p>
        <br>
        <p>Mr/Mrs. _________________, This notice is to inform you that we have not received your rent payment for ___________________,
            which was due by ____________________ by _________. This was for the rental period of ____________________ to
            ____________________. You are hereby notified that you are indebted to me, as of today, $___________ for the
            rent and use of the premises noted above. Per your lease agreement, you have been assessed a $__________ late
            fee charge at $_________ per day and still owe the remaining balance of $102.86 for the outstanding electric
            bill, which is included in the above amount due. I demand payment of rent in full or possession of the premises
            within three (3) days (excluding Saturday, Sunday, and legal holidays) from the date of delivery of this notice.</p>
        <p>Please submit the total amount due to this address:</p>
        Larry Powalisz 1375 State Road 436 Casselberry, FL 32707 321-231-2843 Failure to pay the total amount noted on the above
        late rent notice may result in further actions being taken, but not limited to eviction.
        <br>
        <p>Sincerely,</p>
        <p>_________________</p>
        <p>Landlord</p>
        <br>
        <p>I hereby certify that a copy of the following Notice was served upon the above named tenant(s) at the above address on the following date: (month/day/year) ________________________________ by the following means:</p>
        <br>
        <p>( ) Certified Mail - Return Receipt Requested</p>
        <p>( ) Hand delivered to tenant</p>
        <p>( ) Leaving a copy at the premises</p>
        <br>
        <br> ___________________________
        <br>
        Signature
    </div>
</div>
@endsection
@extends('admin/theme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/admin/categories.css'); }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="categories-container">
    <div class="warning-container warning-container-msg">
       
    </div>
    <div class="warning-container body">
        @if(count($enquiries) > 0)
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Message</th>


              
            </tr>
            @foreach($enquiries as $enquiry)
            <tr>
                <td>{{ $enquiry->name }}</td>
                <td class="description-column">{{ $enquiry->email }}</td>
                <td class="">{{ $enquiry->contactNumber }}</td>
                <td class="">{{ $enquiry->message }}</td>


               
               
            </tr>
            @endforeach
        </table>
        @else
        <p>No Enquiries available.</p>
        @endif
    </div>
  

</div>


@endsection

@extends('main.index')

@section('css')
<style>
.boxhead{
    margin: 0px 0px 20px 0px;
}
    
</style>

@endsection

@section('content')

<section class="content">  
    <div id="pendingtourlist">
        <div class="box box-success">
            <div class="box-header clr boxhead">
                <h1>
                    Pending Tours
                    {{-- <small>Current</small> --}}
                </h1>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table class="display compact" style="width:100%" cellspacing="0" id="dtPendingTours">
                    <thead>
                        <tr>
                            <th class="text-left">ID</th>
                            {{-- <th class="text-left">Videographer</th> --}}
                            <th class="text-left">Filming Date</th>
                            <th class="text-left">Last Name</th>
                            <th class="text-left">First Name</th>
                            {{-- <th class="text-left">Type</th> --}}
                            <th class="text-left">Music</th>
                            <th class="text-left">Website</th>
                            <th class="text-left">Amenities</th>
                            <th class="text-left">Town</th>
                            <th class="text-left">Address</th>
                            <th class="text-left">City</th>
                            <th class="text-left">State</th>
                            <th class="text-left">Zip</th>
                            <th class="text-left">Gate Code</th>
                            <th class="text-left">Property Notes</th>
                            {{-- <th class="text-left">Cancelation Ins</th>
                            <th class="text-left">Plus</th>
                            <th class="text-left">Premium</th>
                            <th class="text-left">Supreme</th>
                            <th class="text-left">Twilight</th>
                            <th class="text-left">Twilight Enhancement</th>
                            <th class="text-left">Original Video</th> --}}
                            <th class="text-left">Photos</th>
                            {{-- <th class="text-left">MLS Link Upload</th> --}}
                            <th class="text-left">Realtor.com Upload</th>
                            <th class="text-left">Youtube Upload</th>
                            <th class="text-left">MLS Link Upload</th>
                            {{-- <th class="text-left">Photo Tour</th>
                            <th class="text-left">3D Tour Option</th> 
                            <th class="text-left">Mattertags</th>
                            <th class="text-left">Matterport Floor Plan</th>
                            <th class="text-left">Additional Hosting</th>
                            <th class="text-left">Sponsor</th>--}}
                            <th class="text-left">Agent Notes</th>
                            <th class="text-left">First Film Date</th>

                        
                        </tr>
                    </thead>
                    
                </table>
            </div>
            <!--end of box body -->
            <div class="box-footer"></div><!-- box-footer -->
        </div>
    </div>
    
</section>

@endsection

@section('script')

<script>
$(document).ready(function() {
    $('#dtPendingTours').DataTable({
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('pending_tours.getdata') }}",
        "columns": [
            { "data": "id"},
            {
                data:"final_date", name:"final_date", render:function(data, type, row, meta){
                    if(row.final_date){
                        return "<span class='text-center'>"+ row.final_date +"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            { "data": "fname" },
            { "data": "lname" },
            // { "data": "type" },
            {
                data:"music", name:"music", render:function(data, type, row, meta){
                    if(row.music){
                        return "<span class='text-center'>"+ row.music +"</span>";
                    }else{
                        return "<span class='text-center'>"+ row.music +"</span>";
                    }
                }
            },
            //website
            {
                data:"tour", name:"tour", render:function(data, type, row, meta){
                    if(row.tour != '' || row.video_tour != ''){
                        return "<span class='text-center'>VIEW</span>";
                        // return "<span class='text-center'><a href='"+ row.headshot +"' target='_blank'> VIEW </a></span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"at_name", name:"at_name", render:function(data, type, row, meta){
                    if(row.at_name){
                        return "<span class='text-center'>"+ row.at_name +"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"tt_name", name:"tt_name", render:function(data, type, row, meta){
                    if(row.tt_name){
                        return "<span class='text-center'>"+ row.tt_name +"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"address", name:"address", render:function(data, type, row, meta){
                    if(row.address){
                        return "<span class='text-center'>"+ row.address +"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"city", name:"city", render:function(data, type, row, meta){
                    if(row.city){
                        return "<span class='text-center'>"+ row.city +"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"state", name:"state", render:function(data, type, row, meta){
                    if(row.state){
                        return "<span class='text-center'>"+ row.state +"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"zip", name:"zip", render:function(data, type, row, meta){
                    if(row.zip){
                        return "<span class='text-center'>"+ row.zip +"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"gate_code", name:"gate_code", render:function(data, type, row, meta){
                    if(row.gate_code){
                        //Put dot if text is to long
                         return "<span class='text-center'>"+ row.gate_code.substring(0, 30) + " ..." +"</span>";
                        // return "<span class='text-center'>"+ row.gate_code +"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"notes", name:"notes", render:function(data, type, row, meta){
                    if(row.notes){
                        //Put dot if text is to long
                         return "<span class='text-center'>"+ row.notes.substring(0, 30) + " ..." +"</span>";
                        // return "<span class='text-center'>"+ row.gate_code +"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"gallery", name:"gallery", render:function(data, type, row, meta){
                    if(row.gallery){
                        // return "<span class='text-center'>"+ row.gate_code +"</span>";
                        return "<span class='text-center'><a href='"+ row.gallery +"' target='_blank'> Photos </a></span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"realtorcom", name:"realtorcom", render:function(data, type, row, meta){
                    // if(row.realtorcom == 'yes'){
                    //     return "<span class='text-center'> Realtor.com </span>";
                    // }else{
                    //     return "<span class='text-center'>N/A</span>";
                    // }
                    if(row.mls_id == ''){
                        return "<span class='text-center'>N/A</span>";
                    }else{
                        return "<span class='text-center'>Realtor.com</span>";
                    }
                }
            },
            {
                data:"utube", name:"utube", render:function(data, type, row, meta){
                    if(row.utube){
                        return "<span class='text-center'> Youtube </span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"mls_id", name:"mls_id", render:function(data, type, row, meta){
                    if(row.mls_id == ''){
                        return "<span class='text-center'>N/A</span>";
                    }else{
                        return "<span class='text-center'>MLS Link</span>";
                    }

                }
            },
            {
                data:"u_notes", name:"u_notes", render:function(data, type, row, meta){
                    if(row.u_notes){
                        return "<span class='text-center'>"+ row.u_notes +"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }

                }
            },
            {
                data:"film_date_1", name:"film_date_1", render:function(data, type, row, meta){
                    if((row.film_date_1) && (row.film_time_1)){
                    // if((row.film_date_1) && (row.final_time_1)){
                        return "<span class='text-center'>"+ row.film_date_1 + ' ' + row.film_time_1+ "</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }

                }
            },
            // {
            //     data:"field", name:"field", render:function(data, type, row, meta){
            //         if((row.field == 'fly_through_options_aerial_photos') && (row.data == 'yes')){
            //             return "<span class='text-center'>Plus</span>";
            //         }else if((row.field == 'showcase_options_aerial_photos') && (row.data == 'yes')){
            //             return "<span class='text-center'>Plus</span>";
            //         }
            //         else{
            //             return "<span class='text-center'>N/A</span>";
            //         }
            //     }
            // }
            
            // { "data": "mls_address" },
            // { "data": "mls_login_id" },
            // { "data": "mls_login_pwd" },
            // { "data": "credentials" },
            // { "data": "email" },
            // { "data": "phone" },
            // { "data": "assist_phone" },
            // { "data": "phone1_carrier" },
            // { "data": "phone2_carrier" },
            // { "data": "cell1_reminder" },
            // { "data": "cell2_reminder" }
        ],
    });

});

// function getPlus(id){

//         var data = {
//             id: id,
//             zip: zip
//         }
//         $.ajax({
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             },
//             url: "{{ URL::to('/get_Plus') }}",
//             method: 'POST',
//             data: data,
//             success: function(response){

               
//             }
    
//         });
//     }
</script>
    
@endsection
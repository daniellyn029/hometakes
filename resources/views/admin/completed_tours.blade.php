@extends('main.index')

{{-- @section('css')
<style>

</style>

@endsection --}}



@section('content')
<section class="content">  
    <div class="box box-success">
        <div class="box-header clr boxhead">
            <h2 class="box-title">Completed Tours</h2>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table class="display compact" style="width:100%" cellspacing="0" id="dtCompletedtours">
                <thead>
                    <tr>
                        <th class="text-left">ID</th>
                        {{-- <th class="text-left">Videographer</th> --}}
                        <th class="text-left">Last Name</th>
                        <th class="text-left">First Name</th>
                        <th class="text-left">Filming Date</th>
                        {{-- <th class="text-left">Type</th> --}}
                        <th class="text-left">Music</th>
                        {{-- <th class="text-left">No Branding</th> --}}
                        <th class="text-left">MLS Photo Upload</th>
                        <th class="text-left">Photos</th>
                         {{-- <th class="text-left">WebSite</th>
                        <th class="text-left">Modern</th>
                        <th class="text-left">Classic</th> 
                        <th class="text-left">WebSite 3D Tour</th>
                        <th class="text-left">3D Tour</th>--}}
                        <th class="text-left">Amenities</th>
                        <th class="text-left">Town</th>
                        {{-- <th class="text-left">Cancelation Ins.</th>
                        <th class="text-left">Plus</th>
                        <th class="text-left">Premium</th>
                        <th class="text-left">Supreme</th>
                        <th class="text-left">Twilight</th>
                        <th class="text-left">Twilight Enhancement</th>
                        <th class="text-left">Original Video</th> --}}
                        <th class="text-left">Address</th>
                        <th class="text-left">City</th>
                        <th class="text-left">State</th>
                        <th class="text-left">Zip</th>
                        {{-- <th class="text-left">Photo Tour</th>
                        <th class="text-left">3D Tour Option</th>
                        <th class="text-left">Mattertags</th>
                        <th class="text-left">Matterport Floor Plan</th>
                        <th class="text-left">Additional Hosting</th> --}}
                        <th class="text-left">YouTube Upload</th>
                        <th class="text-left">Realtor.com Upload</th>
                        <th class="text-left">MLS link Upload?</th>
                        {{-- <th class="text-left">Sponsor</th> --}}
                        <th class="text-left">Property Notes</th>
                        <th class="text-left">Agent Notes</th>

                    </tr>
                </thead>
                
            </table>
        </div>
        <!--end of box body -->
        <div class="box-footer"></div><!-- box-footer -->
    </div>
    
</section>

@endsection

@section('script')
<script>
$(document).ready(function() {
    $('#dtCompletedtours').DataTable({
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('completed_tours.getdata') }}",
        "columns":[
            { "data": "id"},
            { "data": "fname" },
            { "data": "lname" },
            {
                data:"final_date", name:"final_date", render:function(data, type, row, meta){
                    if(row.final_date){
                        return "<span class='text-center'>"+ row.final_date +"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"music", name:"music", render:function(data, type, row, meta){
                    if(row.music){
                        return "<span class='text-center'>"+ row.music +"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"mls_notify", name:"mls_notify", render:function(data, type, row, meta){
                    if(row.mls_notify == 'N' && row.mls_id == ''){
                        return "<span class='text-center'>N/A</span>";
                    }else{
                        if(row.mls_images == 'Yes'){
                            return "<span class='text-center'>"+ row.mls_id +"</span>";
                            if(row.uploadagent == 'Y' && row.mls_id == ''){
                                return "<span class='text-center'>Agent upload</span>"; 
                            }
                        }else{
                            return "<span class='text-center'>"+ row.mls_id +"</span>";
                        }
                        
                    }
                }
            },
            {
                data:"gallery", name:"gallery", render:function(data, type, row, meta){
                    if(row.gallery){
                        return "<span class='text-center'><a href='"+ row.gallery +"' target='_blank'> Photos </a></span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"amenities_id", name:"amenities_id", render:function(data, type, row, meta){
                    if(row.amenities_id){
                        // return "<span class='text-center'><a href='"+ row.at_name +"' target='_blank'> Photos </a></span>";
                        return "<span class='text-center'>"+ row.at_name +"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"town_id", name:"town_id", render:function(data, type, row, meta){
                    if(row.town_id){
                        // return "<span class='text-center'><a href='"+ row.at_name +"' target='_blank'> Photos </a></span>";
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
                data:"utube", name:"utube", render:function(data, type, row, meta){
                    if(row.utube == 'yes' && row.script != 'slideshow'){
                        return "<span class='text-center'>Youtube</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"realtorcom", name:"realtorcom", render:function(data, type, row, meta){
                    if(row.mls_id != '' && row.realtorcom == 'yes'){
                        return "<span class='text-center'>Realtor.com</span>";    
                    }else{
                        return "<span class='text-center'>N/A</span>";  
                        
                    }
                }
            },
            {
                data:"mls_link", name:"mls_link", render:function(data, type, row, meta){
                    if(row.mls_id != '' && row.mls_link == 'yes'){
                        return "<span class='text-center'>MLS Link</span>";    
                    }else{
                        return "<span class='text-center'>N/A</span>";  
                        
                    }
                }
            },
            {
                data:"notes", name:"notes", render:function(data, type, row, meta){
                    if(row.notes != ''){
                        return "<span class='text-center'>"+ row.notes +"</span>";    
                    }else{
                        return "<span class='text-center'>N/A</span>";  
                        
                    }
                }
            },
            {
                data:"u_notes", name:"u_notes", render:function(data, type, row, meta){
                    if(row.u_notes != ''){
                        return "<span class='text-center'>"+ row.u_notes +"</span>";    
                    }else{
                        return "<span class='text-center'>N/A</span>";  
                        
                    }
                }
            },

            


        ],
    });

});
</script>
    
@endsection
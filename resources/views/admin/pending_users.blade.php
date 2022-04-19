@extends('main.index')

{{-- @section('css')

@endsection --}}

@section('content')
<section class="content">
    <div id="pendingtourlist">
        <div class="box box-success">
            <div class="box-header clr boxhead">
                <h2 class="box-title">Pending Users</h2>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table class="display compact" style="width:100%" cellspacing="0" id="dtPendingUsers">
                    <thead>
                        <tr>
                            <th class="text-left">ID</th>
                            <th class="text-left">Filming Date</th>
                            <th class="text-left">Last Name</th>
                            <th class="text-left">First Name</th>
                            <th class="text-left">Username</th>
                            <th class="text-left">Email</th>
                            <th class="text-left">Phone</th>
                            <th class="text-left">Website</th>
                            <th class="text-left">Company</th>
                            <th class="text-left">Address</th>
                            <th class="text-left">City</th>
                            <th class="text-left">State</th>
                            <th class="text-left">Zip</th>
                            <th class="text-left">Notes</th>
                            <th class="text-left">Headshot</th>
                            <th class="text-left">Logo</th>
                            <th class="text-left">Meet Agent</th>
                            <th class="text-left">iTunes</th>
                            <th class="text-left">Actions</th>

                            {{-- <th class="text-left">Music</th>
                            <th class="text-left">Website</th>
                            <th class="text-left">Amenities</th>
                            <th class="text-left">Town</th>
                            <th class="text-left">Address</th>
                            <th class="text-left">City</th>
                            <th class="text-left">State</th>
                            <th class="text-left">Zip</th>
                            <th class="text-left">Gate Code</th>
                            <th class="text-left">Property Notes</th>
                                <th class="text-left">Cancelation Ins</th>
                            <th class="text-left">Plus</th>
                            <th class="text-left">Premium</th>
                            <th class="text-left">Supreme</th>
                            <th class="text-left">Twilight</th>
                            <th class="text-left">Twilight Enhancement</th>
                            <th class="text-left">Original Video</th>
                            <th class="text-left">Photos</th>
                            <th class="text-left">Realtor.com Upload</th>
                            <th class="text-left">Youtube Upload</th>
                            <th class="text-left">MLS Link Upload</th>
                                <th class="text-left">Photo Tour</th>
                            <th class="text-left">3D Tour Option</th> 
                            <th class="text-left">Mattertags</th>
                            <th class="text-left">Matterport Floor Plan</th>
                            <th class="text-left">Additional Hosting</th>
                            <th class="text-left">Sponsor</th>--}}
                        

                        
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
    $('#dtPendingUsers').DataTable({
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('pending_users.getdata') }}",
        "columns": [
            { "data": "id"},
            // {
            //     data:"date", name:"date", render:function(data, type, row, meta){
            //         if(row.p_date == '' && row.date != ''){
            //             return "<span class='text-center'>"+ row.date +"</span>";
            //             return "<span class='text-center'>account created</span>";
            //         }else{
            //             return "<span class='text-center'>N/A</span>";
            //         }
            //     }
            // },
            {
                data:"date", name:"date", render:function(data, type, row, meta){
                    if(row.date){
                        return "<span class='text-center'>"+ row.date +"</span>"; 
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            { "data": "fname" },
            { "data": "lname" },
            {
                data:"username", name:"username", render:function(data, type, row, meta){
                    if(row.username){
                        return "<span class='text-center'>"+ row.username +"</span>"; 
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"email", name:"email", render:function(data, type, row, meta){
                    if(row.email){
                        return "<span class='text-center'>"+row.email+"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"phone", name:"phone", render:function(data, type, row, meta){
                    if(row.phone){
                        return "<span class='text-center'>"+row.phone+"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"website", name:"website", render:function(data, type, row, meta){
                    if(row.website){
                        return "<span class='text-center'><a href='"+ row.website +"' target='_blank'> OPEN </a></span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"company", name:"company", render:function(data, type, row, meta){
                    if(row.company){
                        return "<span class='text-center'>"+row.company+"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"address", name:"address", render:function(data, type, row, meta){
                    if(row.address){
                        return "<span class='text-center'>"+row.address+"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"city", name:"city", render:function(data, type, row, meta){
                    if(row.city){
                        return "<span class='text-center'>"+row.city+"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"state", name:"state", render:function(data, type, row, meta){
                    if(row.state){
                        return "<span class='text-center'>"+row.state+"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"zip", name:"zip", render:function(data, type, row, meta){
                    if(row.zip){
                        return "<span class='text-center'>"+row.zip+"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"notes", name:"notes", render:function(data, type, row, meta){
                    if(row.notes){
                        return "<span class='text-center'>"+row.notes+"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"headshot", name:"headshot", render:function(data, type, row, meta){
                    if(row.headshot){
                        return "<span class='text-center'><a href='"+ row.headshot +"' target='_blank'> VIEW </a></span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"logo", name:"logo", render:function(data, type, row, meta){
                    if(row.logo){
                        return "<span class='text-center'><a href='"+ row.logo +"' target='_blank'> VIEW </a></span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"meet_agent", name:"meet_agent", render:function(data, type, row, meta){
                    if(row.meet_agent){
                        return "<span class='text-center'><a href='"+ row.meet_agent +"' target='_blank'> VIEW </a></span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"itunes", name:"itunes", render:function(data, type, row, meta){
                    if(row.itunes){
                        return "<span class='text-center'>"+ row.itunes +"</span>";
                    }else{
                        return "<span class='text-center'>N/A</span>";
                    }
                }
            },
            {
                data:"id", name:"id", render:function(data, type, row, meta){
                   
                    return "<button class='btn btn-sm btn-primary'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button> &nbsp;<button class='btn btn-sm btn-danger'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
                  
                   
                }
            },
        ],
    });

});



</script>
    
@endsection
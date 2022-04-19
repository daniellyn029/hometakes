@extends('main.index')

@section('css')
<style>
    .pad0{
        padding:0;
    }
    .font10{
        font-size:10px;
    }
</style>

@endsection

@section('content')
<section class="content">  
    <div class="box box-success">
        <div class="box-header clr boxhead">
            <h2 class="box-title">Users</h2>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table class="display compact" style="width:100%" cellspacing="0" id="dtUsers">
                <thead>
                    <tr>
                        <th class="text-left">ID</th>
                        <th class="text-left">Date of First Order</th>
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
                        <th class="text-left">iTunes</th>
                        <th class="text-left">Sponsor</th>
                        <th class="text-left">Cancelation Ins.</th>
                        <th class="text-left">Twilight Enhancement</th>
                        <th class="text-left">Video Copy</th>
                        <th class="text-left">Plus Option</th>
                        <th class="text-left">Premium Option</th>
                        <th class="text-left">Supreme Option</th>
                    </tr>
                </thead>
                
            </table>
        </div>
        <!--end of box body -->
        <div class="box-footer"></div><!-- box-footer -->
    </div>

    {{-- Modal Notes --}}
    <div class="modal fade" id="notesmodal" data-backdrop="static" role="dialog" style="background: rgba(0, 0, 0, 0.8);overflow:scroll !important;z-index: 1049 !important">
        <div class="modal-dialog">
            <div class="modal-content">
                {{-- <div class="modal-header">
                    <h5 class="modal-title txt-white">Delete Videographer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> --}}
                <div class="modal-body">
                    <p class="notes_body"></p>
                </div>
                <div class="modal-footer pad0">
                    <button type="button" data-dismiss="modal" class="btn btn-danger">close</button>
                </div>
            </div>
        </div>
    </div>
    
</section>   

@endsection

@section('script')
<script>
    $(document).ready(function() {
    
        $('#dtUsers').DataTable({
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('users.getdata') }}",
            "columns": [
                { "data": "id"},
                // { "data": "p_date"},
                {
                    data:"date", name:"date", render:function(data, type, row, meta){
                        if(row.p_date == null || row.p_date == ''){
                            return "<span class='text-center'>"+ row.date +"</span>";
                        }else{
                            return "<span class='text-center'>"+ row.p_date +"</span>";
                        }
                    }
                },
                { "data": "fname"},
                { "data": "lname"},
                { "data": "username"},
                { "data": "email"},
                { "data": "phone"},
                // {"data" : "website"},
                {
                    data: "webiste", name:"headshot", render:function(data, type, row, meta){
                        return "<a href='"+ row.website +"' target='_blank'> Web </a>"
                    }
                },
                { "data": "company"},
                { "data": "address"},
                { "data": "city"},
                { "data": "state"},
                { "data": "zip"},
                // { "data": "notes"},
                {
                    data:"notes", name:"notes", render: function(data, type, row, meta){
                        
                        if(row.notes){
                            return "<span class='text-center'><a href='' data-toggle='modal' data-target='#notesmodal' onClick='returnNotesData("+ row.id +")'> Notes </a></span ";
                        }else{
                            return "<span class='text-center'>N/A</span>";
                            // data-toggle="modal" data-target="#EditSettings"
                        }
                    }
                },
                // { "data": "headshot"},
                {
                    data: "headshot", name:"headshot", render: function (data, type, row, meta) {
                        // var headshot = data.headshot;
                        if (row.headshot) {
                            return "<span class='text-center'><a href='"+ row.headshot +"' target='_blank'> Headshot </a></span>";
                        }else {
                            return "<span class='text-center'>N/A</span>";
                        }
                    }
                },
                // { "data": "logo"},
                {
                    data: "logo", name:"logo", render:function(data, type, row, meta){
                        // var logo = data.logo;
                        if(row.logo){
                            return "<span class='text-center'><a href='"+ row.logo +"' target='_blank'> Logo </a></span>";
                        }else{
                            return "<span class='text-center'>N/A</span>";
                        }
                    }
                },
                // { "data": "itunes"},
                {
                    data: "itunes", name:"itunes", render:function(data, type, row, meta){
                        // var itunes = data.itunes;
                        if(row.itunes){
                            return "<span class='text-center'><a href='"+ row.itunes +"' target='_blank'> iTunes </a></span>";
                        }else{
                            return "<span class='text-center'>N/A</span>";
                        }
                    }
                },
                // { "data": "active_sponsor"},
                {
                    data: "active_sponsor", name:"active_sponsor", render:function(data, type, row, meta){
                        if(row.active_sponsor == 'On'){
                            return "<button class='btn btn-sm btn-secondary font10'>Active</button>";
                        }else{
                            return "<button class='btn btn-sm btn-secondary font10'>Inactive</button>";
                        }
                    }
                },
                // { "data": "nice_day_default"},
                {
                    data: "nice_day_default", name:"nice_day_default", render:function(data, type, row, meta){
                        if(row.nice_day_default == 'On'){
                            return "<button class='btn btn-sm btn-secondary font10'>Nice Day On</button>";
                        }else{
                            return "<button class='btn btn-sm btn-seconday font10'>Nice Day Off</button>";
                        }
                    }
                },
                // { "data": "twilight_enhancement"},
                {
                    data: "twilight_enhancement", name:"twilight_enhancement", render:function(data, type, row, meta){
                        if(row.twilight_enhancement == 'On'){
                            return "<button class='btn btn-sm btn-secondary font10'>Twilight Enhancement On</button>";
                        }else{
                            return "<button class='btn btn-sm btn-seconday font10'>Twilight Enhancement Off</button>";
                        }
                    }
                },
                // { "data": "original_video_file"},
                {
                    data: "original_video_file", name: "original_video_file", render:function(data, type, row, meta){
                        if(row.original_video_file == 'On'){
                            return "<button class='btn btn-sm btn-secondary font10'>Video Copy On</button >";
                        }else{
                            return "<button class='btn btn-sm btn-seconday font10'>Video Copy Off</button>";
                        }
                    }
                },
                // { "data": "plus_premium_package"},
                {
                    data: "plus_premium_package", name:"plus_premium_package", render:function(data, type, row, meta){
                        if(row.plus_premium_package == 'premium' || row.plus_premium_package == 'supreme' || row.plus_premium_package == 'off'){
                            return "<button class='btn btn-sm btn-secondary font10'>Plus Off</button>";
                        }
                        if(row.plus_premium_package == 'plus'){
                            return "<button class='btn btn-sm btn-secondary font10'>Plus On</button>";
                        }
                    }
                },
                // { "data": "premium"},
                {
                    data: "plus_premium_package", name:"plus_premium_package", render:function(data, type, row, meta){
                        if(row.plus_premium_package == 'plus' || row.plus_premium_package == 'supreme' || row.plus_premium_package == 'off'){
                            return "<button class='btn btn-sm btn-secondary font10'>Premium Off</button>";
                        }
                        if(row.plus_premium_package == 'premium'){
                            return "<button class='btn btn-sm btn-secondary font10'>Premium On</button>";
                        }
                    }
                },
                // { "data": "supreme"},
                {
                    data: "plus_premium_package", name:"plus_premium_package", render:function(data, type, row, meta){
                        if(row.plus_premium_package == 'plus' || row.plus_premium_package == 'supreme' || row.plus_premium_package == 'off'){
                            return "<button class='btn btn-sm btn-secondary font10'>Supreme Off</button>";
                        }
                        if(row.plus_premium_package == 'supreme'){
                            return "<button class='btn btn-sm btn-secondary font10'>Supreme On</button>";
                        }
                    }
                }
         
            ],
        });
    
    });

    function returnNotesData(params) {
        //console.log(params);
        var data = {
            id: params
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ URL::to('/get_notes') }}",
            method: 'POST',
            data: data,
            success: function(response){
                // console.log(response);
                var note = response[0]['notes'];
                // console.log(note);
                $('.notes_body').html(note);
            }
        });
    }
</script>
    
@endsection
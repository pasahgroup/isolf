
@extends('admins.layouts.Apps.app')
@section('contents')
<style type="text/css">
  .red{
    color: red;
  }
</style>


<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>



<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

//Costom bootstrap
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></style>
<style>
@charset "UTF-8";
@import url("https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.pcs:after {
  content: " pcs";
}

.cur:before {
  content: "$";
}

.per:after {
  content: "%";
}

* {
  box-sizing: border-box;
}

body {
  padding: 0.2em 2em;
}

table {
  width: 100%;
}
table th {
  text-align: left;
  border-bottom: 1px solid #ccc;
}
table th, table td {
  padding: 0.4em;
}

table.fold-table > tbody > tr.view td, table.fold-table > tbody > tr.view th {
  cursor: pointer;
}
table.fold-table > tbody > tr.view td:first-child,
table.fold-table > tbody > tr.view th:first-child {
  position: relative;
  padding-left: 20px;
}
table.fold-table > tbody > tr.view td:first-child:before,
table.fold-table > tbody > tr.view th:first-child:before {
  position: absolute;
  top: 50%;
  left: 5px;
  width: 9px;
  height: 16px;
  margin-top: -8px;
  font: 16px fontawesome;
  color: #999;
  content: "";
  transition: all 0.3s ease;
}
table.fold-table > tbody > tr.view:nth-child(4n-1) {
  background: #eee;
}
table.fold-table > tbody > tr.view:hover {
  background: #000;
}
table.fold-table > tbody > tr.view.open {
  background: tomato;
  color: white;
}
table.fold-table > tbody > tr.view.open td:first-child:before, table.fold-table > tbody > tr.view.open th:first-child:before {
  transform: rotate(-180deg);
  color: #333;
}
table.fold-table > tbody > tr.fold {
  display: none;
}
table.fold-table > tbody > tr.fold.open {
  display: table-row;
}

.fold-content {
  padding: 0.5em;
}
.fold-content h3 {
  margin-top: 0;
}
.fold-content > table {
  border: 2px solid #ccc;
}
.fold-content > table > tbody tr:nth-child(even) {
  background: #eee;
}
</style>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
       <!-- Main content -->
       <div class="card-header">
                  <div class="card-tools">
           <a href="{{ route('programs.create') }}" class="btn btn-primary" >
             <i class="fas fa-plus"></i> Program
           </a>
         </div>
       </div>
    <section class=" container-fluid content">
            <div class="row">
                <div class="card-body">

              <form  method="post" id="post_form" action="{{ route('search',1) }}" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                @csrf
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                  <div class="col-lg-8 col-md-4 col-sm-6 col-xs-12">
              <div class="input-group">
                    <input type="text" id="filter" class="form-control" name="search" placeholder="--search here...">
                    <div class="input-group-append">
                              <button type="submit" class="btn btn-primary float-right">Search</button>
                    </div>
                </div>

              <!-- </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"> -->
                  <!-- <button type="submit" class="btn btn-primary float-right">Search</button> -->
              </div>



                  </form>

                <a href="programs" class="btn btn-primary float-right">Refresh</a>
            </div>
        </div>


<table class="fold-table table-bordered table-striped" id="myTable">
  <thead>
    <tr>
      <th>Program</th><th>Days</th><th>Costs</th><th>Price</th><th>Tour code</th><th>Category</th><th>Type</th>
    </tr>
  </thead>
    <tbody class="searchable">
      @foreach ($datas as $data)
    <tr class="view">
      <td>{{ $data->tour_name }}</td>
      <td><a href="{{ route('programs.show',$data->id) }}">{{ $data->days }}</a></td>
<td>{{ number_format($data->cost,2) }}<span class="badge"> {{ $data->currency}}</span></td>
  <td>{{ number_format($data->price,2) }}<span class="badge"> {{ $data->currency }}</span></td>
        <td>{{ $data->tour_code }}</td>
      <td>{{ $data->category }}</td>
      <td>{{ $data->type }}</td>

    </tr>
    <tr class="fold">
      <td colspan="7">
        <div class="fold-content">
          <strong>{{ $data->tour_name }}</strong>
          <p><strong>Tour highlight:</strong> {{ $data->tour_highlight }}</p>
          <table>
            <thead>
              <tr style="background-color:#fdfdfd">
                <th>Company ID</th><th>Main</th><th>Photo</th><th>Popular Experience</th><th>Circuit</th><th>Overview</th><th>SEO</th><th>Action</th>
              </tr>
            </thead>
            <tbody class="searchable">
              <tr>
                <td>{{ $data->id }}</td>
                  <td>{{ $data->main }}</td>
                <td><div class="logo mr-auto"><img src="{{ URL::asset('/storage/uploads/'.$data->attachment) }}" style="width:80px;height:50px"></div></td>
                <td>{{ $data->popular_experience }}</td>
                <td>{{ $data->tour_circuit }}</td>
                <td>{{ $data->overview }}</td>
                <td>{{ $data->seo }}</td>
                <td>
                  <p>
                  <a role="button" href="{{ route('editProgram',$data->id) }}"><i class="fa fa-edit"></i> Edit</a>
                </p>
<p>
                  <a href="{{ route('inclusive.show',$data->id) }}"><i class="fas fa-solid fa-bars"></i> Inclusive</a></p>
                  <p>
                  <a role="button" href="/destroyf/{{$data->id}} " onclick="return confirm('Are you sure? You want to delete {{ $data->tour_name}}','Inclusive')"><i class="fas fa-trash red"></i> Delete</a>
</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
<br>
{!! $datas->links()!!}
</section>
</div>
<script>
$(function(){
  $(".fold-table tr.view").on("click", function(){
    $(this).toggleClass("open").next(".fold").toggleClass("open");
  });
});
</script>

<script>


$(document).ready(function () {
    (function ($) {

        $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});
</script>

<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
@endsection

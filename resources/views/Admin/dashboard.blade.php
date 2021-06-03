@extends('admin.layouts.master',['title' =>'Halaman Admin'])
@section('content')
<div class="card mb-4">
  <div class="card-header">
	  <div class="row justify-content-between">
			<div class="col-4" >
				<i class="fas fa-table"></i> Data Siswa
			</div>
			<div class="col-4 text-right">
				<a href="" class="text-decoration-none">
					<i class="primary fas fa-plus"></i>
					Tambah Data
				</a> 
			</div>
		</div>
  </div>
  <div class="card-body">
	  <div class="table-responsive">
		  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			  <thead>
				  <tr>
					  <th>Name</th>
					  <th>Position</th>
					  <th>Office</th>
					  <th>Age</th>
					  <th>Start date</th>
					  <th>Salary</th>
				  </tr>
			  </thead>
			  <tbody>
				<tr>
				  <td>Tiger Nixon</td>
				  <td>System Architect</td>
				  <td>Edinburgh</td>
				  <td>61</td>
				  <td>2011/04/25</td>
				  <td>$320,800</td>
			  </tr>
			  <tr>
				  <td>Garrett Winters</td>
				  <td>Accountant</td>
				  <td>Tokyo</td>
				  <td>63</td>
				  <td>2011/07/25</td>
				  <td>$170,750</td>
			  </tr>
			  </tbody>
		  </table>
	  </div>
  </div>
</div>
@endsection
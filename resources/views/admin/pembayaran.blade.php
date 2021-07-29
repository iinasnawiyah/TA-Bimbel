@extends('layout.master')
@extends('partials.sidebar')
@extends('partials.header')

@section('konten')
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h5 class="text-blue">Data Table Simple</h5>
			<p class="font-14">Ini Merupakan COntoh Form <a class="text-primary" href="{{ route('tambahData') }}" target="_blank">Tambah Data</a></p>
		</div>
	</div>
	<div class="row">
		<table class="tabel stripe hover nowrap">
			<thead>
				<tr>
					<th class="table-plus datatable-nosort">Name</th>
					<th>Age</th>
					<th>Office</th>
					<th>Address</th>
					<th>Start Date</th>
					<th class="datatable-nosort">Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="table-plus">Gloria F. Mead</td>
					<td>25</td>
					<td>Sagittarius</td>
					<td>2829 Trainer Avenue Peoria, IL 61602 </td>
					<td>29-03-2018</td>
					<td>
						<div class="dropdown">
							<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-h"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
								<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
								<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="table-plus">Andrea J. Cagle</td>
					<td>30</td>
					<td>Gemini</td>
					<td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
					<td>29-03-2018</td>
					<td>
						<div class="dropdown">
							<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-h"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
								<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
								<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="table-plus">Andrea J. Cagle</td>
					<td>20</td>
					<td>Gemini</td>
					<td>2829 Trainer Avenue Peoria, IL 61602 </td>
					<td>29-03-2018</td>
					<td>
						<div class="dropdown">
							<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-h"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
								<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
								<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="table-plus">Andrea J. Cagle</td>
					<td>30</td>
					<td>Sagittarius</td>
					<td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
					<td>29-03-2018</td>
					<td>
						<div class="dropdown">
							<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-h"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
								<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
								<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="table-plus">Andrea J. Cagle</td>
					<td>25</td>
					<td>Gemini</td>
					<td>2829 Trainer Avenue Peoria, IL 61602 </td>
					<td>29-03-2018</td>
					<td>
						<div class="dropdown">
							<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-h"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
								<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
								<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="table-plus">Andrea J. Cagle</td>
					<td>20</td>
					<td>Sagittarius</td>
					<td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
					<td>29-03-2018</td>
					<td>
						<div class="dropdown">
							<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-h"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
								<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
								<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="table-plus">Andrea J. Cagle</td>
					<td>18</td>
					<td>Gemini</td>
					<td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
					<td>29-03-2018</td>
					<td>
						<div class="dropdown">
							<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-h"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
								<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
								<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="table-plus">Andrea J. Cagle</td>
					<td>30</td>
					<td>Sagittarius</td>
					<td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
					<td>29-03-2018</td>
					<td>
						<div class="dropdown">
							<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-h"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
								<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
								<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="table-plus">Andrea J. Cagle</td>
					<td>30</td>
					<td>Sagittarius</td>
					<td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
					<td>29-03-2018</td>
					<td>
						<div class="dropdown">
							<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-h"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
								<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
								<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="table-plus">Andrea J. Cagle</td>
					<td>30</td>
					<td>Gemini</td>
					<td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
					<td>29-03-2018</td>
					<td>
						<div class="dropdown">
							<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-h"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
								<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
								<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="table-plus">Andrea J. Cagle</td>
					<td>30</td>
					<td>Gemini</td>
					<td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
					<td>29-03-2018</td>
					<td>
						<div class="dropdown">
							<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-h"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
								<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
								<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="table-plus">Andrea J. Cagle</td>
					<td>30</td>
					<td>Gemini</td>
					<td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
					<td>29-03-2018</td>
					<td>
						<div class="dropdown">
							<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								<i class="fa fa-ellipsis-h"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>
								<a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Edit</a>
								<a class="dropdown-item" href="#"><i class="fa fa-trash"></i> Delete</a>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection
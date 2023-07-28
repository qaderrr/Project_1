{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
<!-- row -->
<div class="container-fluid">
  <!-- Add Order -->
  <div class="modal fade" id="addOrderModalside">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Event</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label class="text-black font-w500">Event Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label class="text-black font-w500">Event Date</label>
              <input type="date" class="form-control">
            </div>
            <div class="form-group">
              <label class="text-black font-w500">Description</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex flex-wrap mb-2 align-items-center justify-content-between">
    <div class="mb-3 mr-3">
      <h6 class="fs-16 text-black font-w600 mb-0">568 Total Orders</h6>
      <span class="fs-14">Based your preferences</span>
    </div>
    <div class="event-tabs mb-3 mr-3">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#All" role="tab" aria-selected="true">
            All
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Sold" role="tab" aria-selected="false">
            Sold
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Refunded" role="tab" aria-selected="false">
            Refunded
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#Canceled" role="tab" aria-selected="false">
            Canceled
          </a>
        </li>
      </ul>
    </div>
    <div class="d-flex mb-3">
      <select class="form-control style-2 default-select mr-3">
        <option>Newest</option>
        <option>Monthly</option>
        <option>Weekly</option>
      </select>
      <a href="javascript:void(0)" class="btn btn-primary text-nowrap"><i class="fa fa-file-text scale5 mr-3" aria-hidden="true"></i>Generate Report</a>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-12">
      <div class="tab-content">
        <div id="All" class="tab-pane active fade show">
          <div class="table-responsive">
            <table id="example2" class="table card-table display dataTablesCard">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Date</th>
                  <th>Event Name</th>
                  <th>Customer </th>
                  <th>Location</th>
                  <th>Sold Ticket</th>
                  <th>Available</th>
                  <th>Refund</th>
                  <th>Total Revenue</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">Envato Authors Meetup<br>2020</span></td>
                  <td>Elisabeth Queen</td>
                  <td>Medan, Indonesia</td>
                  <td>4 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$536,00</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">Great Big Fireworks at <br> Newyork City</span></td>
                  <td>David Bekam</td>
                  <td>Sydney, Australia</td>
                  <td>4 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$65,22</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">Charity Fun Games at <br> Lapangan Merdeka</span></td>
                  <td>Andrew Stevano</td>
                  <td>Jakarta, Indonesia</td>
                  <td>2 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-primary">REFUND</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$124,55</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">Indonesian Envato <br> Authors Fun Run </span></td>
                  <td>Cive Slauw</td>
                  <td>Penang, Malaysia</td>
                  <td>4 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$536,00</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Eddy Cusuma</td>
                  <td>Medan, Indonesia</td>
                  <td>3 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$44,00</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Frank Azire</td>
                  <td>Bangkok, Thailand</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">REFUND</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$51,50</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Elisabeth Queen</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Andrew Stevano</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div id="Sold" class="tab-pane fade">
          <div class="table-responsive">
            <table id="example3" class="table card-table display dataTablesCard">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Date</th>
                  <th>Event Name</th>
                  <th>Customer </th>
                  <th>Location</th>
                  <th>Sold Ticket</th>
                  <th>Available</th>
                  <th>Refund</th>
                  <th>Total Revenue</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">Envato Authors Meetup<br>2020</span></td>
                  <td>Elisabeth Queen</td>
                  <td>Medan, Indonesia</td>
                  <td>4 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$536,00</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">Great Big Fireworks at <br> Newyork City</span></td>
                  <td>David Bekam</td>
                  <td>Sydney, Australia</td>
                  <td>4 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$65,22</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">Charity Fun Games at <br> Lapangan Merdeka</span></td>
                  <td>Andrew Stevano</td>
                  <td>Jakarta, Indonesia</td>
                  <td>2 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-primary">REFUND</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$124,55</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">Indonesian Envato <br> Authors Fun Run </span></td>
                  <td>Cive Slauw</td>
                  <td>Penang, Malaysia</td>
                  <td>4 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$536,00</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Eddy Cusuma</td>
                  <td>Medan, Indonesia</td>
                  <td>3 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$44,00</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Frank Azire</td>
                  <td>Bangkok, Thailand</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">REFUND</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$51,50</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Andrew Stevano</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Elisabeth Queen</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Andrew Stevano</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div id="Refunded" class="tab-pane fade">
          <div class="table-responsive">
            <table id="example4" class="table card-table display dataTablesCard">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Date</th>
                  <th>Event Name</th>
                  <th>Customer </th>
                  <th>Location</th>
                  <th>Sold Ticket</th>
                  <th>Available</th>
                  <th>Refund</th>
                  <th>Total Revenue</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Andrew Stevano</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">Envato Authors Meetup<br>2020</span></td>
                  <td>Elisabeth Queen</td>
                  <td>Medan, Indonesia</td>
                  <td>4 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$536,00</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">Great Big Fireworks at <br> Newyork City</span></td>
                  <td>David Bekam</td>
                  <td>Sydney, Australia</td>
                  <td>4 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$65,22</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">Charity Fun Games at <br> Lapangan Merdeka</span></td>
                  <td>Andrew Stevano</td>
                  <td>Jakarta, Indonesia</td>
                  <td>2 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-primary">REFUND</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$124,55</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">Indonesian Envato <br> Authors Fun Run </span></td>
                  <td>Cive Slauw</td>
                  <td>Penang, Malaysia</td>
                  <td>4 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$536,00</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Eddy Cusuma</td>
                  <td>Medan, Indonesia</td>
                  <td>3 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$44,00</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Frank Azire</td>
                  <td>Bangkok, Thailand</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">REFUND</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$51,50</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Elisabeth Queen</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Andrew Stevano</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div id="Canceled" class="tab-pane fade">
          <div class="table-responsive">
            <table id="example5" class="table card-table display dataTablesCard">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Date</th>
                  <th>Event Name</th>
                  <th>Customer </th>
                  <th>Location</th>
                  <th>Sold Ticket</th>
                  <th>Available</th>
                  <th>Refund</th>
                  <th>Total Revenue</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">Envato Authors Meetup<br>2020</span></td>
                  <td>Elisabeth Queen</td>
                  <td>Medan, Indonesia</td>
                  <td>4 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$536,00</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">Great Big Fireworks at <br> Newyork City</span></td>
                  <td>David Bekam</td>
                  <td>Sydney, Australia</td>
                  <td>4 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$65,22</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Andrew Stevano</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">Charity Fun Games at <br> Lapangan Merdeka</span></td>
                  <td>Andrew Stevano</td>
                  <td>Jakarta, Indonesia</td>
                  <td>2 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-primary">REFUND</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$124,55</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">Indonesian Envato <br> Authors Fun Run </span></td>
                  <td>Cive Slauw</td>
                  <td>Penang, Malaysia</td>
                  <td>4 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$536,00</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Eddy Cusuma</td>
                  <td>Medan, Indonesia</td>
                  <td>3 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$44,00</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Frank Azire</td>
                  <td>Bangkok, Thailand</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">REFUND</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$51,50</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Bella Simatupang</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Elisabeth Queen</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
                <tr>
                  <td>#0012451</td>
                  <td>04/08/2020<br>12:34 AM</td>
                  <td><span class="text-nowrap">The Story of Danau Toba<br> (Musical Drama)</span></td>
                  <td>Andrew Stevano</td>
                  <td>London, US</td>
                  <td>1 Pcs</td>
                  <td>567k left</td>
                  <td><strong class="text-black">NO</strong></td>
                  <td><a href="javascript:void(0)" class="btn btn-primary btn-sm light">$125,70</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
@extends('cms.cms_master')

@section('welcome')


<div class="row ">
  <div class="col-12 mt-5 p-2 text-center">
    <h1>Orders Managing</h1>
    <!-- / table with default heading -->
  </div><!-- / coulmn -->

  <div class="col-lg-12">
    <!-- table with inverse heading -->
    <div class="card">
      <div class="card-body">
        <p class="lead mt-3 mb-3 ">Orders List</p>

        <table class="table">
          <thead class="thead-inverse">
            <tr>

              <th>USER</th>
              <th>ORDER LIST</th>
              <th>TOTAL</th>
              <th>STATUS</th>
              <th>DATA</th>
              <th>MANEG</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $item)
            <tr>

              <td><i class="far m-1 fa-user"></i>{{ $item->name }} </td>
              <td>
                <ul>
                  @foreach (unserialize($item->order_data) as $order)
                  <li>{{ $order['name']}}, Quantity: {{ $order['quantity']}}, Price: {{ $order['price']}}$ </li>
                  @endforeach
                </ul>
              </td>
              <td><i class="far m-1 fa-credit-card"></i>{{ $item->total }}$</td>
              <td>
                @if($item->ship_number === null )
                <i class="text-warning far fa-clock"> <span class="text-dark">Not Complited</span></i>

                @else
                <i class="text-success far fa-check-circle">
                  <span class="text-dark"> Traking Number:<br><br>{{ $item->ship_number }}</span>
                </i>
                @endif
              </td>
              <td><i class="far m-1 fa-calendar-alt"></i> {{ date('d/m/y', strtotime($item->created_at)) }}</td>
              <td><a href="{{ url("cms/orders/$item->id/edit_orders")}}" class="btn btn-secondary btn-sm active"
                  role="button" aria-pressed="true">ADD SHIPING</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- / table with inverse heading -->
      </div>
    </div>
  </div>
</div>
@endsection
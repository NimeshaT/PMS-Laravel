<div class="col-md-3" >

            
    <div class="card" >
        <div class="card-header" style="background-color:#e17055">
            <h4 class="text-center">PMS</h4>
			<h5 class="text-center text-warning">{{Auth::user()->name}}</h5>
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/dashboard') }}">
					<h6 class="text-dark">Dashboard</h6>
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin/items') }}">
                        <h6 class="text-dark">Products</h6>
                    </a>
                </li>
            </ul>
			<ul class="nav" role="tablist">
			<li>
              <form action="{{ url('logout')}}" method="post">
                    @csrf
                    <br/>
                    <input style="width:100%; background-color:#fab1a0" type="submit" class="btn" value ="Logout">          
              </form>
        </li>
            </ul>
        </div>
    </div>
</div>

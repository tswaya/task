<!DOCTYPE html>
<html>
<head>
    <title>Laravel task to import data into database</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</head>

<body>
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Laravel  task to import data into database
        </div>
            @if ($errors->any())
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   @if($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
        <div class="card-body">
            <form action="{{ url('import-excel') }}" method="POST" name="importform" enctype="multipart/form-data">
                @csrf
                <input type="file" name="import_file" class="form-control">
                <br>
                <button class="btn btn-success">Import File</button>
            </form>
        </div>
    </div>
    <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">products file</h3>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
       'name', 'sku', 'stock','cog','price','lenght','width','height','weight','fdw_sku','colour_0','colour_1','colour_2','asin_uk','asin_ca',
        'asin_fr','asin_de','asin_es','asin_it','asin_ni','asin_se'
       <th>Name</th>
        <th>SKU</th>
        <th>COG</th>
        <th>STOCK</th>
        <th>PRICE</th>
        <th>LENGHT</th>
        <th>WIDTH</th>
        <th>HEIGHT</th>
        <th>WEIGHT</th>
        <th>FDW SKU</th>
        <th>COLOUR 0</th>
        <th>COLOUR 1</th>
        <th>COLOUR 2</th>
        <th>ASIN UK</th>
        <th>ASIN CA</th>
        <th>ASIN FR</th>
        <th>ASIN DE</th>
        <th>ASIN ES</th>
        <th>ASIN IT</th>
        <th>ASIN NI</th>
        <th>ASIN SE</th>
               </tr>
       @foreach($contacts as $c)
       <tr>
        <td>{{ $c->name }}</td>
        <td>{{ $c->sku }}</td>
        <td>{{ $c->cog }}</td>
        <td>{{ $c->stock }}</td>
        <td>{{ $c->price }}</td>
        <td>{{ $c->lenght }}</td>
        <td>{{ $c->width }}</td>
        <td>{{ $c->hight }}</td>
        <td>{{ $c->weight }}</td>
        <td>{{ $c->fdw_sku }}</td>
        <td>{{ $c->colour_0 }}</td>
        <td>{{ $c->colour_1 }}</td>
        <td>{{ $c->colour_2 }}</td>
        <td>{{ $c->asin_uk }}</td>
        <td>{{ $c->asin_ca }}</td>
        <td>{{ $c->asian_fr }}</td>
        <td>{{ $c->asin_de }}</td>
        <td>{{ $c->asin_es }}</td>
        <td>{{ $c->asin_it }}</td>
        <td>{{ $c->asin_ni }}</td>
        <td>{{ $c->asin_se }}</td>
       </tr>
       @endforeach
      </table>
     </div>
    </div>
</div>

</div>
    
</body>
</html>
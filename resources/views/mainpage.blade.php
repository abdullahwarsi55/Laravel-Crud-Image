<h1>hello</h1>
<a href="{{ url('/productlisting/create') }}">click to add new product</a>

<style>
    #product {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #product td, #product th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #product tr:nth-child(even){background-color: #f2f2f2;}
    
    #product tr:hover {background-color: #ddd;}
    
    #product th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #37517e;
      color: white;
    }
    </style>
    <h1>Product Listing</h1>
    <br>
    <table id="product">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Image</th>
        <th>Edit</th>
      </tr>
      
      @foreach($products as $pro)
      <tr>
        <td>{{$pro->id}}</td>
        <td>{{$pro->name}}</td>
        <td>{{$pro->price}}</td>
        <td>{{$pro->description}}</td>
        <td><img src="product/{{$pro->image}}" width="50" height="50"/></td>
        <td><a href="{{url('/productlisting/edit',$pro->id)}}">Edit</a></td>
        @endforeach
        
    </table>
   
    

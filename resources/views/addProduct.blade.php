<h1>Add Product</h1>
<section class="flex items-center justify-center ">
    <form action="postData" method="post">
        @csrf
        <input 
           type="number" 
           name="id" id="" 
           class=""
           placeholder="Enter Product Id" 
        /><br /><br/>
        <input type="text" name="name" id="" placeholder="Enter Product Name"><br /><br/>
        <input type="number" name="price" id="" placeholder="Enter Product price"><br /><br/>
        <input type="text" name="category" id="" placeholder="Enter Product Category"><br /><br/>
        <button type="submit">Submit</button>
    </form>
</section>
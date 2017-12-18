<div style="text-align: center">
    <form method="POST" action="?view=product-history&action=create" enctype="multipart/form-data">

        <div> Data : </div>
        <input type="date" name="date"> <br>

        <div> Preke : </div>

        <select name="product_id">
            (@productOptions)
        </select>

        <div> Vakarysktis likutis : </div>
        <input type="number" name="initial"> <br>

        <div> Pagaminta : </div>
        <input type="number" name="produced"> <br>

        <div> Parduota : </div>
        <input type="number" name="damaged"> <br>

        <div> Sugadinta : </div>
        <input type="number" name="sold"> <br>

        <div> Galutinis likutis : </div>
        <input type="number" name="closed"> <br>

        <input type="submit" value="Issaugoti duomenys"><br><br>

    </form>
    <form method="POST" action="?view=product&action=new">
        <div>
            <input type="submit" class="btn btn-danger" value="New Product"> <br>
        </div>
    </form>
</div>
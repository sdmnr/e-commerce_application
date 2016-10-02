<!--Categories-->
<div class="modal fade" id="cat_edit-modal" tabindex="-1" role="dialog" aria-labelledby="cat_edit" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="cat_edit">Edit Categories</h4>
            </div>
            <div class="modal-body">
              <form action="categories_main">
                          <label>Category Title:</label>
                          <input type="text" name="categoryname"><br><br>
                          <label>Is Visible:</label><br>
                          <label>YES</label>
                          <input type="radio" name="visible_yes"><br>
                          <label>NO</label>
                          <input type="radio" name="visible_no"><br><br>
                          <label>Icon:</label>
                          <input type="file" name="pic"><br><br>
                          <input type="submit" name="submit" value="Save">
                          <a href="categories_main"><button>Cancel</button></a>
                        </form>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="cat_delete-modal" tabindex="-1" role="dialog" aria-labelledby="cat_delete" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="cat_delete">Delete Category</h4>
            </div>
            <div class="modal-body">
            <h3>Are you sure you want to Delete this Category?</h3>
            <h4>If you delete this Category, you will no longer see this in the front end.</h4><br>
                      <form action="categories_main">
                          <input type="submit" name="submit" value="Delete">
                          <a href="categories_main"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="cat_add-modal" tabindex="-1" role="dialog" aria-labelledby="cat_add" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="cat_add">Add Categories</h4>
            </div>
            <div class="modal-body">
              <form action="categories_main">
                          <label>Category Title:</label>
                          <input type="text" name="categoryname"><br><br>
                          <label>Is Visible:</label><br>
                          <label>YES</label>
                          <input type="radio" name="visible_yes"><br>
                          <label>NO</label>
                          <input type="radio" name="visible_no"><br><br>
                          <label>Icon:</label>
                          <input type="file" name="pic"><br><br>
                          <input type="submit" name="submit" value="Add">
                          <a href="categories_main"><button>Cancel</button></a>
                        </form>
            </div>
          </div>
        </div>
      </div>
<!--//Categories-->

<!--Attributes-->
    <div class="modal fade" id="attr_edit-modal" tabindex="-1" role="dialog" aria-labelledby="attr_edit" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="attr_edit">Edit Attribute</h4>
            </div>
            <div class="modal-body">
              <form action="categories_attr">
                          <label>Attribute Name:</label>
                          <input type="text" name="attributename" value="Brand"><a href="#" data-toggle="modal" data-target="#attr_delete-modal"><span class="glyphicon glyphicon-trash"></span>Trash</a><br><br>
                          <input type="text" name="attributename" value="Accessories"><a href="#" data-toggle="modal" data-target="#attr_delete-modal"><span class="glyphicon glyphicon-trash"></span>Trash</a><br><br>
                          <input type="text" name="attributename" value="Miscellaneous"><a href="#" data-toggle="modal" data-target="#attr_delete-modal"><span class="glyphicon glyphicon-trash"></span>Trash</a><br><br>
                          <input type="text" name="attributename" value="Featured"><a href="#" data-toggle="modal" data-target="#attr_delete-modal"><span class="glyphicon glyphicon-trash"></span>Trash</a><br><br>
                          <input type="text" name="attributename"><a href="#" data-toggle="modal" data-target="#attr_delete-modal"><span class="glyphicon glyphicon-trash"></span>Trash</a><br><br>
                          <a href=""><b>+</b> Add Attribute</a><br>
                          <br>
                          <input type="submit" name="submit" value="Add">
                          <a href="categories_attr"><button>Cancel</button></a>
                        </form>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="attr_delete-modal" tabindex="-1" role="dialog" aria-labelledby="attr_delete" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="attr_delete">Delete Attribute</h4>
            </div>
            <div class="modal-body">
            <h3>Are you sure you want to Delete this Attribute?</h3>
            <h4>If you delete this Attribute, you will no longer see this in the front end.</h4><br>
                      <form action="categories_attr">
                          <input type="submit" name="submit" value="Delete">
                          <a href="categories_attr"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>

<!--//Attributes-->

<!--Products-->

<div class="modal fade" id="product_delete-modal" tabindex="-1" role="dialog" aria-labelledby="product_delete" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="product_delete">Delete Products</h4>
            </div>
            <div class="modal-body">
            <h3>Are you sure you want to Delete this Product?</h3>
            <h4>If you delete this Product, you will no longer see this in the front end.</h4><br>
                      <form action="products_main">
                          <input type="submit" name="submit" value="Delete">
                          <a href="products_main"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="product_reassign-modal" tabindex="-1" role="dialog" aria-labelledby="product_reassign" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="product_reassign">Reassign Products</h4>
            </div>
            <div class="modal-body">
            <h4>Please select a Category below to Reassign the Products to.</h4>
                      <form action="products_main">
                      <div class="control-group">
                      <label class="control-label">Reassign To:</label>
                          <div class="controls">
                            <select name="reassign" id="reassign">
                              <option value="Mobiles">Mobiles</option>
                              <option value="Tablets">Tablets</option>
                              <option value="Laptops">Laptops</option>
                              <option value="Motherboards">Motherboards</option>
                              <option value="Processor">Processor</option>
                            </select>
                             </div>
                             </div><br>
                      <input type="submit" name="submit" value="Reassign">
                      <a href="products_main"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>

<!--//Products-->

<!--Banners-->

<div class="modal fade" id="banner_add-modal" tabindex="-1" role="dialog" aria-labelledby="banner_add" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="banner_add">Add Banner</h4>
            </div>
            <div class="modal-body">
            <h4>Select an Image to add in Banner list.</h4><br>
                      <form action="banners_main">
                          <input type="file" name="banner"><br>
                          <input type="submit" name="submit" value="Upload">
                          <a href="banners_main"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="banner_delete-modal" tabindex="-1" role="dialog" aria-labelledby="banner_delete" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="banner_delete">Delete Banner</h4>
            </div>
            <div class="modal-body">
            <h3>Are you sure you want to Delete this Banner?</h3>
            <h4>If you delete this Banner, you will no longer see this in the front end.</h4><br>
                      <form action="banners_main">
                          <input type="submit" name="submit" value="Delete">
                          <a href="banners_main"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>
<!--//Banners-->

<!--Static-->
<div class="modal fade" id="static_delete-modal" tabindex="-1" role="dialog" aria-labelledby="static_delete" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="static_delete">Delete Static Page</h4>
            </div>
            <div class="modal-body">
            <h3>Are you sure you want to Delete this Static Page?</h3>
            <h4>If you delete this Static Page, you will no longer see this in the front end.</h4><br>
                      <form action="static_main">
                          <input type="submit" name="submit" value="Delete">
                          <a href="static_main"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="static_add-modal" tabindex="-1" role="dialog" aria-labelledby="static_add" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="static_add">Add Static Page</h4>
            </div>
            <div class="modal-body">
                      <form action="static_main">
                          <label>Name:</label><br>
                          <input type="text" name="name"><br><br>
                          <label>Url:</label><br>
                          <input type="text" name="url"><br><br>
                          <label>Icon:</label><br>
                          <input type="file" name="icon"><br>
                          <label>Body:</label><br>
                          <textarea></textarea><br><br>
                          <input type="submit" name="submit" value="Add">
                          <a href="static_main"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="static_edit-modal" tabindex="-1" role="dialog" aria-labelledby="static_edit" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="static_edit">Edit Static Page</h4>
            </div>
            <div class="modal-body">
                      <form action="static_main">
                          <label>Name:</label><br>
                          <input type="text" name="name"><br><br>
                          <label>Url:</label><br>
                          <input type="text" name="url"><br><br>
                          <label>Icon:</label><br>
                          <input type="file" name="icon"><br>
                          <label>Body:</label><br>
                          <textarea></textarea><br><br>
                          <input type="submit" name="submit" value="Save">
                          <a href="static_main"><button>Cancel</button></a>
                      </form>
            </div>
          </div>
        </div>
      </div>
<!--//Static-->
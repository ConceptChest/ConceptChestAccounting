

<div class="container form-style-5">
    <script type="text/javascript"> 
   
		
         
       
        jQuery("insert_form").click(function(){
            var str = jQuery("#insert_form").serialize();	
        jQuery.ajax({url: "<?phpplugins_url('ajax/ConceptChestAccountingCRUD.php', __FILE__) ?>",data: str, success: function(result){
            jQuery("#note").html(result);
          }});
});
   

</script>
  <h2>Chart Of Account</h2>
  <form id="insert_form">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title">
  </div>
    <div class="form-group">
    <label for="level">Level</label>
    <input type="text" class="form-control" name="level" placeholder="Level">
  </div>
    <div class="form-group">
    <label for="type">Type</label>
    <input type="text" class="form-control" name="type" placeholder="Type">
  </div>
    <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" placeholder="Address">
  </div>
    <div class="form-group">
    <label for="type">Phone No.</label>
    <input type="text" class="form-control" name="phone" placeholder="Phone No.">
  </div>
    <div class="form-group">
    <label for="fax">Fax No.</label>
    <input type="text" class="form-control" name="fax" placeholder="Fax No.">
  </div>
    <div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="Mobile">
  </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Email">
  </div>
    <div class="form-group">
    <label for="website">Website</label>
    <input type="text" class="form-control" name="website" placeholder="Website">
  </div>
    <div class="form-group">
    <label for="category">Category</label>
    <input type="text" class="form-control" name="category" placeholder="Category">
  </div>
    <div class="form-group">
    <label for="ntn">NTN</label>
    <input type="text" class="form-control" name="ntn" placeholder="NTN">
  </div>
    <div class="form-group">
    <label for="stn">STN</label>
    <input type="text" class="form-control" name="stn" placeholder="STN">
  </div>
    <div class="form-group">
    <label for="citycide">City Code</label>
    <input type="text" class="form-control" name="citycode" placeholder="City Code">
  </div>
    <div class="form-group">
    <label for="cityname">City Name</label>
    <input type="text" class="form-control" name="cityname" placeholder="City Name">
  </div>
    <div class="form-group">
    <label for="arecode">Area Code</label>
    <input type="text" class="form-control" name="areacode" placeholder="Area Code">
  </div>
    <div class="form-group">
    <label for="areaname">Area Name</label>
    <input type="text" class="form-control" name="areaname" placeholder="Area Name">
  </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date"  class="form-control" name="date" placeholder="Date">
  </div>
    <div class="form-group">
        <p>
    <button type="submit" class="btn btn-default">Save</button>
        </p>
    </div>
</form>
  <div id="#note"></div>
</div>



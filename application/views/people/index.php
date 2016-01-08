<div class="container">
  <div class="row">
    <div class="col-sm-12">
      
      <form action="<?php echo site_url('/people/save'); ?>" method="post">
        <table id="table-people" class="table table-bordered table-striped table-condensed">
          <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Delete</th>
          </tr>
          <?php for($i = 0; $i < count($people); $i++) : ?>
          <tr>
            <td><input class="form-control" type="text" name="people[<?php echo $i; ?>][firstname]" value="<?php echo $people[$i]['firstname']; ?>" /></td>
            <td><input class="form-control" type="text" name="people[<?php echo $i; ?>][surname]" value="<?php echo $people[$i]['surname']; ?>" /></td>
            <td><button class="btn btn-danger btn-delete"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
          </tr>
          <?php endfor; ?>
        </table>
        <button class="btn btn-success btn-add" type="button">Add Person</button>
        <input class="btn btn-primary" type="submit" value="Save" />
      </form>
      
    </div><!-- end col -->
  </div><!-- end row -->
</div><!-- end container -->

<!-- Underscore template for adding a table row -->
<script id="tmpl-add-person" type="text/html">
  <tr>
    <td><input class="form-control" type="text" name="people[<%= array_index %>][firstname]" /></td>
    <td><input class="form-control" type="text" name="people[<%= array_index %>][surname]" /></td>
    <td><button class="btn btn-danger btn-delete"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
  </tr>
</script>
<!-- End underscore template -->

<script>
  var array_index = <?php echo $i; ?>
  
  $(function() {
    
    /* Delete person */
    $(document).on("click", ".btn-delete", function() {
      if (confirm("Are you sure you wish to delete this person?")) {
       this.closest("tr").remove();
       $(".alert-container").remove();
      }
    });
    
    /* Add person */
    $(".btn-add").click(function() {
      var data = {};
      data.array_index = array_index;
      $("#table-people tbody").append(_.template($("#tmpl-add-person").html(), data));
      array_index++;
    });
    
  });
</script>
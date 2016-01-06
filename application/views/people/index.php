<div class="container">
  <div class="row">
    <div class="col-sm-12">
      
      <form action="<?php echo base_url('/people/save'); ?>" method="post">
        <table>
          <tr>
            <th>First name</th>
            <th>Last name</th>
          </tr>
          <?php for($i = 0; $i < count($people); $i++) : ?>
          <tr>
            <td><input type="text" name="people[<?php echo $i; ?>][firstname]" value="<?php echo $people[$i]['firstname']; ?>" /></td>
            <td><input type="text" name="people[<?php echo $i; ?>][surname]" value="<?php echo $people[$i]['surname']; ?>" /></td>
          </tr>
          <?php endfor; ?>
        </table>
        <input type="submit" value="OK" />
      </form>
      
    </div><!-- end col -->
  </div><!-- end row -->
</div><!-- end container -->
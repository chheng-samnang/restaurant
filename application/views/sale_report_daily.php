</nav>

<div class="row">
  <div class="col-lg-9 col-lg-offset-2">
    <div class="row">
      <h1 class="page-header">Daily Sale Report</h1>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Filter</h3>
        </div>
        <div class="panel-body">
          <form class="form-inline">
              <div class="form-group">
                <label for="exampleInputName2">Date From</label>
                <input type="text" class="form-control" id="exampleInputName2" name="txtDateF">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail2">Date To</label>
                <input type="email" class="form-control" id="exampleInputEmail2" name="txtDateT">
              </div>
              <button type="submit" class="btn btn-default">Search</button>
            </form>
            <hr>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Receipt No.</th>
                  <th>Date</th>
                  <th>Sold By</th>
                  <th>Total USD</th>
                  <th>Cash In USD</th>
                  <th>Cash In KHR</th>
                  <th>Exchange USD</th>
                  <th>Exchange KHR</th>
                </tr>
              </thead>
              <tbody>
                <?php $g_total=0;$c_usd=0;$c_khr=0; foreach ($receipt as $key => $value) {?>
                  <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $value->rec_no ?></td>
                    <td><?php echo $value->rec_date ?></td>
                    <td><?php echo $value->user_crea ?></td>
                    <td><?php echo $value->ttl_usd ?></td>
                    <td><?php echo $value->cash_usd ?></td>
                    <td><?php echo $value->cash_riel ?></td>
                    <td><?php echo $value->exchange_usd ?></td>
                    <td><?php echo $value->exchange_riel ?></td>
                  </tr>
                  <?php $g_total = $g_total + $value->ttl_usd;
                        $c_usd = $c_usd+ $value->cash_usd;
                        $c_khr = $c_khr+ $value->cash_riel;
                } ?>
                  <tr>
                    <td colspan="4" style="text-align:center;">
                      <strong>Grand Total</strong>
                    </td>
                    <td><?php echo $g_total; ?></td>
                    <td><?php echo $c_usd?></td>
                    <td><?php echo $c_khr?></td>
                    <td></td>
                    <td></td>
                  </tr>
              </tbody>
            </table>
        </div>
      </div>

    </div>
  </div>
</div>

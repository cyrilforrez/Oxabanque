<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>Name</th>
      <th>Number Account</th>
      <th>Balance</th>
      <th class="col-4"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $_POST["name"]; ?></td>
      <td></td>
      <td><?php echo $_POST["balance"]; ?></td>
      <td><button type="button" class="btn btn-danger btn-sm">Delete</button>
<div class="btn-group dropup">
  <button type="button" class="btn btn-primary btn-sm"><a href="#"></a>
    Details
  </button>
</div>
      </td>
    </tr>
  </tbody>
</table>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Add Account
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="index.php" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Name</label>
              <div class="col-10">
                <input class="form-control" type="text" placeholder="Name" value="" id="example-text-input">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="example-number-input" class="col-2 col-form-label">Balance</label>
            <div class="col-10">
              <input class="form-control" type="number" placeholder="1000" value="" id="example-number-input">
            </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Send Account</button>
        </div>
      </div>
    </form>
  </div>
</div>

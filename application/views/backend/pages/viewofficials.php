<div class="container-fluid">
   <!-- Page Heading -->
   <br>
   <center>
      <h1 class="h3 mb-2 text-gray-800">Barangay Officials</h1>
   </center>
   <p class="mb-4">
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a class="btn btn-primary" href="<?= base_url('index.php/dashboard/add-officials') ?>"> Add Officials </a>
   </p>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">List</h6>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th scope="col">Position</th>
                     <th scope="col">Name</th>
                     <th scope="col">Contact</th>
                     <th scope="col">Address</th>
                     <th scope="col">Start of Term</th>
                     <th scope="col">End of Term</th>
                     <th scope="col">Option</th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach($officials_list as $officials_data): ?>
                  <tr>
                     <td><?= $officials_data->position ?></td>
                     <td><?= $officials_data->name ?></td>
                     <td><?= $officials_data->contact ?></td>
                     <td><?= $officials_data->address ?></td>
                     <td><?= $officials_data->start_term ?></td>
                     <td><?= $officials_data->end_term ?></td>
                     <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editOfficialsModal">
                           Edit
                        </button>
                        <a class="btn btn-danger btn-sm" href="<?= base_url('index.php/dashboard/delete-officials/'.$officials_data->id); ?>">Delete</a>
                        <div class="modal fade" id="editOfficialsModal" tabindex="-1" role="dialog" aria-labelledby="editOfficialsModalLabel" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="editOfficialsModalLabel">Edit Officials Information</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <form method="post" action="<?php echo base_url('index.php/dashboard/update-officials/'.$officials_data->id); ?>">
                                       <div class="form-row">
                                          <div class="form-group col">
                                             <label for="position">Position:</label>
                                             <input type="text" name="position" value="<?php echo $officials_data->position; ?>" id="position" class="form-control" required />
                                             <span><?= form_error('position') ?></span>
                                          </div>
                                          <div class="form-group col">
                                             <label for="name">Name:</label>
                                             <input type="text" name="name" value="<?php echo $officials_data->name; ?>" id="name" class="form-control" required />
                                             <span><?= form_error('name') ?></span>
                                          </div>
                                          <div class="form-group col">
                                             <label for="contact">Contact:</label>
                                             <input type="text" name="contact" value="<?php echo $officials_data->contact; ?>" id="contact" class="form-control" required />
                                             <span><?= form_error('contact') ?></span>
                                          </div>
                                       </div>
                                       <div class="form-group col">
                                          <label for="address">Address:</label>
                                          <input type="text" name="address" value="<?php echo $officials_data->address; ?>" id="address" class="form-control" required />
                                          <span><?= form_error('address') ?></span>
                                       </div>
                                       <div class="form-group col">
                                          <label for="start_term">Start of Term:</label>
                                          <input type="date" name="start_term" value="<?php echo $officials_data->start_term; ?>" id="start_term" class="form-control" required />
                                          <span><?= form_error('start_term') ?></span>
                                       </div>
                                       <div class="form-group col">
                                          <label for="end_term">End of Term:</label>
                                          <input type="date" name="end_term" value="<?php echo $officials_data->end_term; ?>" id="end_term" class="form-control" required />
                                          <span><?= form_error('end_term') ?></span>
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Update</button>
                                       </div>
                                    </form>
                                 </div>
                  </tr>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>


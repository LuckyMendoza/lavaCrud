<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>


<style>



</style>
<body>
  
 
<section class="intro">
  <div class="gradient-custom-1 h-100">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row mt-5 ">
          <div class="col-sm-8 mx-auto">
            <div class="table-responsive bg-white">
              <table class="table table-sm table-hover table-dark ">
                <thead class="table-dark">
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Usertype</th>
                    <th>Action</th>  
                </tr>
                
                </thead>
                  
            <?php foreach ($data as $datum): ?>
                <tbody class=" table-group-divider">
                  <tr class="table-danger">
                   
                  <td><?=$datum['username'];?></td>
                  <td><?=$datum['password'];?></td>
                  <td><?=$datum['email'];?></td>
                  <td><?=$datum['usertype'];?></td>
                  <td><a class="btn btn-danger"  href="<?=site_url('User/delete_data/'.$datum['id'].'');?>">Delete</a>
                    <a  class="btn btn-info" href="<?=site_url('User/edit_data/'.$datum['id'].'');?>">Update</a>
                  </td>
                  </tr>
                 
                </tbody>
                <?php endforeach; ?>
              </table>
       
           
               
                <form action ="<?php echo site_url('show_data');?>" method="POST">  
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" >
                  <label>Password</label>
                  <input type="text" name="password" class="form-control" >
                  <label>Email</label>
                  <input type="text" name="email" class="form-control">
                  <label>Usertype</label>
                  <select name="usertype" class="form-control">
                    <option value="admin">ADMIN</option>
                    <option value="user">USER</option>
                  </select>
                  <br>
                  <button type="submit" class="btn btn-primary btn-lg ">Save</button>
                </form>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        
 
  

<!---javasciprt libraries-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>
</html>
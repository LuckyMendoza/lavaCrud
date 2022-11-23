<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>


<style>




</style>
  <section class="intro">
  <div class="gradient-custom-1 h-100">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row mt-5 ">
          <div class="col-sm-10 mx-auto">
            <div class="table-responsive bg-white">



              <form action="<?php echo site_url('User/update_data'); ?>" method="POST">
                <label>Username</label>
                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                <input type="text" name="username" class="form-control" value="<?= $data['username']; ?>" required>
                <label>Password</label>
                <input type="text" name="password" class="form-control" value="<?= $data['password']; ?>" required>
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?= $data['email']; ?>" required>
                <label>Usertype</label>
                <select name="usertype" class="form-control">
                  <option value="admin">ADMIN</option>
                  <option value="user">USER</option>
                </select>
                <button type="submit" class="btn btn-primary mt-2">Update</button>
              </form>




            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>

</html>
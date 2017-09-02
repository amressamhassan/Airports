<?php include 'include/header.php';  ?>
<div class="container">
                    <form action="" method="post" >
        <table class="table">
            <tbody><tr>
                <td>Username</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Username" required="" type="text" name="username">
            </div></td>
            </tr>

              <tr>
                <td>E-mail</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="E-mail" required="" type="text" name="email">
            </div></td>
            </tr>
                 <tr>
                <td>Phone</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Phone" required="" type="text" name="phone">
            </div></td>
            </tr>
            </tr>
                 <tr>
                <td>Home Telephone</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Telephone" required="" type="text" name="telephone">
            </div></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><div class="input-group input">
                <table><tr>
                <td>Male</td><td><input class="radio" name="gender" value="male" type="radio"/></td> </tr>
                <tr>
                <td>Female</td><td><input class="radio" name="gender" value="female" type="radio"/></td> </tr>
            </table>
            </div></td>
            </tr>
               <tr>
                <td>Password</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Password" required="" type="password" name="password">
            </div></td>
            </tr>

            <tr>
                <td>Confirm Password</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Confirm Password" required="" type="password" name="confirmpassword">
            </div></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><div class="input-group input">
                <div class="col-md-6"><input class="form-control col-md-3" placeholder="Street and building and apartment number" required="" type="text" name="streetname"></div>
                <div class="col-md-3"><input class="form-control col-md-3" placeholder="City" required="" type="text" name="city"></div>
                <div class="col-md-3"><input class="form-control col-md-3" placeholder="Country" required="" type="text" name="country"></div>
            </div></td>
            </tr>

            </tbody>
            </table>
             <div class="col-md-2">
                 <input class="btn btn-info btn-block" name="submit" value="Register" type="submit">
            </div>
       </form> 
        </div>
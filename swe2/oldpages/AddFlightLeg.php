   <?php include 'include/header.php';  ?>

      <div class="container">
   <form action="" method="post" >
    <table class="table">
      <tr>
        <td class="col-md-1">From</td>
          <td>  <div class="col-md-3">
                <select name="type" width="300" style="width: 100%">
                 
                  <option value="1">USA
                        </option>
                         <option value="2">Egypt
                        </option>
                         <option value="3">UK
                        </option>
                         <option value="4">Japan
               </select>
             </div>
      </td>
      </tr>
       <tr>
        <td class="col-md-1">To</td>
          <td>  <div class="col-md-3">
                <select name="type" width="300" style="width: 100%">
                 
                  <option value="1">USA
                        </option>
                         <option value="2">Egypt
                        </option>
                         <option value="3">UK
                        </option>
                         <option value="4">Japan
               </select>
             </div>
      </td>
      </tr>
       <tr>
                <td>Fare</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Ex. 183 (in $)" required="" type="text" name="email">
            </div></td>
            </tr>
       <tr>
                <td>Scheduled Duration</td>
                <td><div class="input-group input">
                <input class="form-control" placeholder="Ex. 20 (in Hours)" required="" type="text" name="email">
            </div></td>
            </tr>
      <tr>
      <td><button class="btn btn-info" type="submit">Submit</button></td>
      </tr>
      </table>           
             </form>  
               
</div>

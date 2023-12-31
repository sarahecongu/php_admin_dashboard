<?php


require_once('./connection/connect.php');


$searchQuery = isset($_POST['search_asset']) ? $_POST['search_asset'] : '';

if (!empty($searchQuery)) {
    $sql = "SELECT assets.*, categories.name FROM assets
            LEFT JOIN categories ON assets.category_id = categories.id
            WHERE assets.name = :searchQuery || categories.name = :searchQuery
            ORDER BY id DESC";

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':searchQuery'. $searchQuery . PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $sql = "SELECT assets.*, categories.name FROM assets
            LEFT JOIN categories ON assets.category_id = categories.id
            ORDER BY id DESC";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<?php
include("./includes/header.php");
?>
<?php
include("./includes/sidebar.php");
?>
<?php
include("./includes/nav.php");
?>
<div class="main-content col-md-9 ml-sm-auto col-md-10 px-md-4 mt-4">
<div class="container-fluid mt-4">
<div class="row">
    <div class="col-md-12 mt-4">
        <form action="assets.php" method="POST">
        <div class="input-group">
        <input type="text" class="form-control" name="search_asset" placeholder="Search for an asset">
        <button type="submit" class="btn btn-secondary">Search</button>
        </div>
</form>
</div>
                      
</div>
<div class="row">
<div class="col-md-12 d-flex mt-4">
      
    
    <a href="add_asset.php" class="btn btn-success float-end  mb-3 "><i class="fas fa-plus "></i> Add Asset</a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
           
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Asset ID</th>
                        <th>Asset Name</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <?php
                 




                   if ($result) {
                       foreach ($result as $row) {

                         
                           ?>
                        
                           <tr>
                               <td>
                                   <?= $row['id'] ?>
                               </td>
                               <td>
                                   <?= ucfirst($row['name']); ?>
                               </td>

                               <td style="width:15%">
                  
                              

                                   <img src="<?php  echo $row['image'];?>"alt="image" class=" w-50 h-50">
                               </td>
                               
                               <td>
                                   <?= $row['name'] ?>
                               </td>
                               <td>
                                   <?= $row['quantity']; ?>
                               </td>
                           
                             
                               <td>
                                   <?= $row['created_at']; ?>
                               </td>
                                  
                               <td>
                                   <?= $row['updated_at']; ?>
                               </td>
                       
                                      <!-- edit -->
                               <td class = "d-flex gap-2">
                                   <a href="update_asset.php?id=<?= $row['id'] ?>"
                                       class="btn btn-success btn-sm float-end">
                                       <i class="bi bi-pencil-square"></i> EDIT
                                   </a>
                               <form action="./server/handler.php" method="POST">
                                        <button type="submit" name="assetdelete"
                                            class="btn btn-danger btn-sm " value="<?= $row['id']; ?>"onclick="return confirm('Are you sure you want to delete asset?')">
                                            <i class="bi bi-trash3"></i> DELETE
                                        </button>

                                    </form>
                    
                                   
                               </td>
                           </tr>
                           <?php
                       }

                   } else {
                       ?>
                       <tr>
                           <td colspan="12">No Record</td>
                       </tr>
                       <?php
                   }
               
                    ?>
                </tbody>
            </table>
            
        </div>
    </div>
</div>
<!-- </div> -->

<?php
include("./includes/footer.php");
?>
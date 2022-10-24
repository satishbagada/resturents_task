<section>
    <div class="container mt-5">
        <div class="row mx-auto">
            <div class="col-md-6">
            <table class="table">
                <thead class="bg-danger text-white">
                <tr class="text-center">
                    <th>id</th>
                    <th>text_fname</th>
                    <th>text_lname</th>
                    <th>gander</th>
                    <th>email</th>
                    <th>Today</th>
                    <th>selectedoption</th>
                    <th>selectdate</th>
                    <th>price</th>
                    <th>Manage profile</th>
                    
            </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td><?php echo $show[0]['regi_id'];?></td>
                    <td><?php echo $show[0]['text_fname'];?></td>
                    <td><?php echo $show[0]['text_lname'];?></td>
                    <td><?php echo $show[0]['text_gander'];?></td>
                    <td><?php echo $show[0]['text_email'];?></td>
                    <td><?php echo $show[0]['time'];?></td>
                    <td><?php echo $show[0]['days_type'];?></td>
                    <td><?php echo $show[0]['date'];?></td>
                    <td><?php echo $show[0]['price'];?></td>
                    <td><a href="<?php echo $mainurl;?>manage-profile"><i class="bi bi-pencil-square btn btn-primary btn-sm"></i></a></td>
                </tr>
            </tbody>
            </table>
            </div>
        </div>
    </div>
    

    
</section>
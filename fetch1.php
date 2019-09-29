<?php
include 'header.php';

session_start();
 ?>

  			<table >
  				<thead>
  					<tr>
  						<th>Description</th>
              <th>post</th>
              <th>image</th>
              <th>current city</th>
              <th>hometown</th>
  						<th>Operations</th>

  					</tr>
  				</thead>

  				<tbody>
  				<?php
  					$sql = "SELECT * FROM feed";
  					$res = mysql_query( $sql);
  					while ($r = mysql_fetch_assoc($res)) {
  				?>

  						<td><?php echo $r['description']; ?></td>
              <td><?php echo $r['post']; ?></td>
              <td><?php echo "<img src='$tmp_name'>"; ?></td>
              <td><?php echo $r['currentcity']; ?></td>
              <td><?php echo $r['hometown']; ?></td>
  						<td><a href="editcategory.php?id=<?php echo $r['id']; ?>">Update</a> |
                <a href="deletecategory.php?id=<?php echo $r['id']; ?>">Delete</a></td>
  					</tr>
  				<?php } ?>
  				</tbody>
  			</table>

  		</div>
  	</div>
  </section>
